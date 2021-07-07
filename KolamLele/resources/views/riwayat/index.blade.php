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
          <li class="breadcrumb-item active">Riwayat Pemantauan</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Daftar Kolamku</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0 pr-4 pl-4" style="height: 500px;">
          <table id="kolam" class="table table-head-fixed table-striped table-hover text-nowrap table-bordered">
            <thead>
              <tr>
                <th style="background: rgba(30, 143, 255, 0.856)">No. </th>
                <th style="background: rgba(30, 143, 255, 0.856)">Nama Kolam</th>
              </tr>
            </thead>
            <tbody>
              @php
                    $i=1;
                @endphp
                @forelse ($kolam as $data)
                <tr class='clickable-row' data-href='/riwayat/{{$data->id_kolam}}'>
                  <td>{{$i++}}</td>
                  <td>{{$data->nama_kolam}}</td>
                </tr>
                @empty
                <tr>
                  <td colspan="2" ><center><h4>Belum ada kolam yang ditambahkan </h4><a href="/kolam/create">+ Tambah kolaam</a></center></td>
                </tr>
                @endforelse
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
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
    $('#kolam').DataTable({
      "paging": false,
      // "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      // "autoWidth": false,
      "responsive": true,
    });
  });
//   $(function () {
    
//   });
//   jQuery(document).ready(function($) {
    
// });
</script>
@endsection