@extends('template/page')

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
@endsection
@section('title')
    Riwayat Pemantauan Kolam
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Riwayat Pemantauan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item"><a href="/riwayat">Riwayat Pemantauan</a></li>
          @foreach ($kolam as $item)
          <li class="breadcrumb-item active">Riwayat {{$item->nama_kolam}}</li>              
          @endforeach
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
        @foreach ($kolam as $item)
        <div class="row col-sm-12 col-lg-8">
            <div class="col-6">
                <h3 class="card-title">Data Dari Kolam</h3>
            </div>
            <div class="col-6">
                <h3 class="card-title">: {{$item->nama_kolam}}</h3>
            </div>
        </div>
        <div class="row col-sm-12 col-lg-8">
            <div class="col-6">
                <h3 class="card-title">Kode Alat</h3>
            </div>
            <div class="col-6">
                <h3 class="card-title">: {{$item->id_kolam}}</h3>
            </div>
        </div>        
        @endforeach
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0 pr-4 pl-4" style="height: 500px; ">
          <table id="data" class="table table-head-fixed table-striped table-hover text-nowrap table-bordered">
            <thead>
              <tr>
                <th style="background: rgba(30, 143, 255, 0.856)"> <center>Waktu</center></th>
                <th style="background: rgba(30, 143, 255, 0.856)">pH</th>
                <th style="background: rgba(30, 143, 255, 0.856)">Suhu 1</th>
                <th style="background: rgba(30, 143, 255, 0.856)">Suhu 2</th>
                <th style="background: rgba(30, 143, 255, 0.856)">Suhu 3</th>
                <th style="background: rgba(30, 143, 255, 0.856)">Suhu 4</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $i=1;
                @endphp
                @foreach ($data as $data)
                <tr>
                  <td>{{$data->created_at}}</td>
                  <td>{{$data->ph}}</td>
                  <td>{{$data->suhu1}}°C</td>
                  <td>{{$data->suhu2}}°C</td>
                  <td>{{$data->suhu3}}°C</td>
                  <td>{{$data->suhu4}}°C</td>
                </tr>
                @endforeach
            </tbody>
          </table>      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

@endsection


@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#side-riwayat').addClass('active');
    $('#side-kolamku').addClass('menu-open');
    $('#side-kolamkuu').addClass('active');
    $('#data').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "order": [[ 0, "desc" ]],
      "info": false,
       "autoWidth": true,
      "responsive": false,
    });
  });
//   $(function () {
    
//   });
//   jQuery(document).ready(function($) {
    
// });
</script>
@endsection