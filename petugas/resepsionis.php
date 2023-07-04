<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Hotel Hebat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../templateadmin/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../templateadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../templateadmin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../templateadmin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../templateadmin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../templateadmin/index3.html" class="brand-link">
        <img src="../templateadmin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HOTEL HEBAT</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../templateadmin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Resepsionis</a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="?page=reservasi" class="nav-link">
                <i class="nav-icon fas fa-bed"></i>
                <p>
                  Reservasi Hotel
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../logout.php" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  LogOut

                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>RESEPSIONIS HOTEL HEBAT</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <?php
        if (!empty(@$_GET['page'])) {
          switch (@$_GET['page']) {
            case 'reservasi':
              include 'reservasi.php';
              break;
            default:
              echo "SELAMAT DATANG RESEPSIONIS HOTEL HEBAT";
              break;
          }
        }

        ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../templateadmin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../templateadmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../templateadmin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../templateadmin/dist/js/demo.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../templateadmin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../templateadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../templateadmin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../templateadmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../templateadmin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../templateadmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../templateadmin/plugins/jszip/jszip.min.js"></script>
  <script src="../templateadmin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../templateadmin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../templateadmin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../templateadmin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../templateadmin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>