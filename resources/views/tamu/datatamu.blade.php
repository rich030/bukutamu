
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
          <h3>Data Tamu</h3>
          <div class="card-tools">
            <a href="{{ route('tamu.inputtamu') }}" class="btn btn-success">Tambah Tamu <i class="fas fa-plus-square"></i></a>
    <!-- /.content -->
          </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>Nomor</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Tanggal</th>
              <th>Komentar</th>
              <th>Aksi</th>
            </tr>
            @foreach ($dtTamu as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->tanggal }}</td>
              <td>{{ $item->komentar }}</td>
            <td>
              <a href="{{ route('tamu.edittamu', [$item->id]) }}"><i class="fas fa-edit"></i></a> 
              | <a href="{{ route('tamu.deletetamu', [$item->id]) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
            </td>
            </tr>
            @endforeach
          </table>
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
</div>
  <!-- Main Footer -->
  @include('Template.footer')
<!-- ./wrapper -->
  
</div>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
@include('sweetalert::alert')

</body>
</html>