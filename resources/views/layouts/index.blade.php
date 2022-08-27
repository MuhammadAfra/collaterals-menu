<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('AdminLTE') }}/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ url('AdminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <p>
                  Collateral
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <p>
                      Collateral Utama
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Motor Vehicle</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Car Vehicle</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>House/Land</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inventory</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Corporate Guarantie</p>
                      </a>
                    </li>
                  </ul>
                </li>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <p>
                  Collateral Tambahan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Motor Vehicle</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Car Vehicle</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>House/Land</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inventory</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Corporate Guarantie</p>
                  </a>
                </li>
              </ul>
            </li>
        </li>
      </ul>
          </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    
    
    {{-- CONTENT  --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Collateral</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- Main content -->
            <section class="col-xxl-6 connectedSortable px-5">
              <div class="container mt-3">
                <h3>Collateral Utama - Motor Vehicle</h3>
                <div class="container px-5">
                  <div class="row">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Partner ID</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Debitur ID</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Coll ID</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Nilai - Motor Vehicle</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Merk</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Type</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Jenis Motor / Sport, Listrik, Dsb</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Model</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Nama di BPKB</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">No Frame</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">No Engine</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">No Polisi</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Colour</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Silinder</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-5 col-md-6">
                      <label for="exampleFormControlInput1" class="form-label">Status</label>
                      <input type="input" class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-5 col-md-6">
                      <button type="button" class="btn btn-primary mb-4">Submit</button>
                    </div>
                  </div>
                </div>
            </section>
          </div>
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="http://adminlte.io">Reliance Finance</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.2.1
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ url('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ url('AdminLTE') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ url('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="{{ url('AdminLTE') }}/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="{{ url('AdminLTE') }}/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="{{ url('AdminLTE') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{ url('AdminLTE') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ url('AdminLTE') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="{{ url('AdminLTE') }}/plugins/moment/moment.min.js"></script>
  <script src="{{ url('AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ url('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="{{ url('AdminLTE') }}/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="{{ url('AdminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('AdminLTE') }}/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ url('AdminLTE') }}/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ url('AdminLTE') }}/dist/js/demo.js"></script>
</body>

</html>
