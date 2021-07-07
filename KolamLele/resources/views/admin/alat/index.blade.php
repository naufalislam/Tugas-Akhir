@extends('template/page')

@section('css')
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

@endsection
@section('title')
    Data Alat
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Alat</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item active">Data Alat</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Daftar Alat</h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <a href=""class="btn btn-primary btn-sm"data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-pen" style="padding-right:7px "></i>Tambah Data</a>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0 pr-4 pl-4">
          <table id="alat" class="table table-head-fixed table-striped table-hover text-nowrap table-bordered">
            <thead>
              <tr>
                <th style="background: rgba(30, 143, 255, 0.856)">No. </th>
                <th style="background: rgba(30, 143, 255, 0.856)">Kode Alat</th>
                <th style="background: rgba(30, 143, 255, 0.856)">Status</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @forelse ($alat as $data)
                <tr data-toggle="modal" data-target="#d{{$data->id}}">
                  <td>{{$i++}}</td>
                  <td>{{$data->alat}}</td>
                  <td>
                    @php
                        $status= 0;
                    @endphp
                    @foreach ($kolam as $item)
                        @if ($item->id_kolam=== $data->alat)
                            @php
                                $status= 1;
                            @endphp
                            <span class="badge badge-success">Aktif</span>
                        @endif
                    @endforeach
                    @if ($status=== 0)
                    <span class="badge badge-danger">Belum Aktif</span>
                    @endif
                  </td>
                </tr>
                <div class="modal fade" id="d{{$data->id}}">
                  <div class="modal-dialog modal-sm card-outline card-danger">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-trash" style="padding-right:10px "></i>Hapus {{$data->alat}}?</h4>
                        <button type="button" class="close" data-dismiss="modal" data-toggle="modal"aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/alat/{{$data->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <p>Apakah yakin akan menghapus {{$data->nama_kolam}}?</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal" data-toggle="modal"><i class="fa fa-times" style="padding-right:10px "></i>Batal</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash" style="padding-right:10px"></i>Hapus</button>
                      </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                @empty
                <tr>
                  <td colspan="3" ><center><h4>Belum ada alat yang ditambahkan </h4><a href="" data-toggle="modal" data-target="#modal-tambah">+ Tambah Alat</a></center></td>
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
<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog modal-sm card-outline card-primary">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-pen" style="padding-right:10px "></i>Tambah Alat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/alat" method="POST">
          @csrf
          <div class="form-group">
            <label >Kode Alat</label>
            <input type="text"  name="alat" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="Masukan Kode pada Alat">
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal"><i class="fa fa-times" style="padding-right:10px "></i>Batal</button>
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-SAVE" style="padding-right:10px"></i>Tambah</button>
      </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@section('js')
{{-- @if(Session::has('tambah'))
<script type="text/javascript">
  $(window).on('load', function() {
    $('#modal-tambah').modal('show');       
});
</script>
@endif --}}
<script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#side-alat').addClass('active');
    $('#alat').DataTable({
      "paging": false,
      // "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": true,
      "responsive": true,
    });
  });
  // $(function () {
    
  // });
</script>
@endsection