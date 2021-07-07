@extends('template/page')

@section('css')

@endsection
@section('title')
    Hasil Usahaku
@endsection
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Hasil Usahaku</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item active">Hasil Usahaku</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>

@endsection

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Berapakah Hasil yang Didapat?</h3><br> <br>

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
    $('#side-hasil').addClass('active');
  });
</script>
@endsection