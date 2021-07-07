@extends('template/page')

@section('css')

@endsection
@section('title')
    Laporan Kualitas Kolam
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Laporan Kualitas Kolam</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item active">Kualitas Kolam</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

<div class="col-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title" style="text-align: center">Ayo Pantau Kualitas Kolam</h3><br> <br>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        
      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>


@endsection


@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#side-laporan').addClass('active');
  });
</script>
@endsection