@extends('template/page')

@section('css')
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">

@endsection
@section('title')
    Data Kolam
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Kolam</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item active">Data Kolam</li>
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

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <a href=""class="btn btn-primary btn-sm"data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-pen" style="padding-right:7px "></i>Tambah Data</a>
        </div>
      </div>
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
                <tr data-toggle="modal" data-target="#e{{$data->id}}">
                  <td>{{$i++}}</td>
                  <td>{{$data->nama_kolam}}</td>
                </tr>
                <div class="modal fade" id="e{{$data->id}}">
                  <div class="modal-dialog modal-sm card-outline card-primary">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-pen" style="padding-right:10px "></i>Ubah {{$data->nama_kolam}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/kolam/{{$data->id}}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                            <label >Kode Alat</label>
                            <input type="text" value="{{$data->id_kolam}}" name="kolam" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="Masukan Kode pada Alat">
                          </div>
                          <div class="form-group">
                            <label >Nama Kolam</label>
                            <input type="text" value="{{$data->nama_kolam}}" name="nama" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="Masukan Nama Kolam">
                          </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal"><i class="fa fa-times" style="padding-right:10px "></i>Batal</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#d{{$data->id}}"><i class="fa fa-trash" style="padding-right:10px "></i>Hapus</button>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-SAVE" style="padding-right:10px"></i>Simpan</button>
                      </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="d{{$data->id}}">
                  <div class="modal-dialog modal-sm card-outline card-danger">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-trash" style="padding-right:10px "></i>Hapus {{$data->nama_kolam}}?</h4>
                        <button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#e{{$data->id}}" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/kolam/{{$data->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <p>Apakah yakin akan menghapus {{$data->nama_kolam}}?</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal" data-toggle="modal" data-target="#e{{$data->id}}"><i class="fa fa-times" style="padding-right:10px "></i>Batal</button>
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
                  <td colspan="2" ><center><h4>Belum ada kolam yang ditambahkan </h4><a href="" data-toggle="modal" data-target="#modal-tambah">+ Tambah kolaam</a></center></td>
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
        <h4 class="modal-title"><i class="fa fa-pen" style="padding-right:10px "></i>Tambah Kolam</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kolam" method="POST">
          @csrf
          <div class="form-group">
            <label >Kode Alat</label>
            <input type="text"  name="kolam" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="Masukan Kode pada Alat">
          </div>
          <div class="form-group">
            <label >Nama Kolam</label>
            <input type="text" name="nama" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="Masukan Nama Kolam">
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
@if(Session::has('tambah'))
<script type="text/javascript">
  $(window).on('load', function() {
    $('#modal-tambah').modal('show');       
});
</script>
@endif
<script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#side-kolam').addClass('active');
    $('#side-kolamku').addClass('menu-open');
    $('#side-kolamkuu').addClass('active');
    $('#kolam').DataTable({
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