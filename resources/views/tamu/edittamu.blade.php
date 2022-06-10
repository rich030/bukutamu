
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tamu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <h3>Edit Tamu</h3>
        </div>

        <div class="card-body">
          <form action="{{ route('tamu.updatetamu', [$peg->id]) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="varchar" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $peg->nama }}">
            </div>
            <div class="form-group">
              <input type="varchar" id="email" name="email" class="form-control" placeholder="Email" value="{{ $peg->email }}">
            </div>
            <div class="form-group">
              <input type="datetime-local" id="tanggal" name="tanggal" class="form-control">Terakhir: {{ $peg->tanggal }}
            </div>
            <div class="form-group">
              <textarea name="komentar" id="komentar" class="form-control" placeholder="Komentar...">{{ $peg->komentar }}</textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')