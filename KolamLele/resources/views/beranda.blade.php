@extends('template/page')

@section('css')
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
@endsection
@section('title')
    Beranda
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Selamat Datang</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Beranda</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')
<div class="col-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Anda Login Sebagai</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <h5>{{ Auth::user()->name }}</h5>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

@endsection
@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#side-home').addClass('active');
  });
</script>
@endsection