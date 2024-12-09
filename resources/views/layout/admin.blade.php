<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('minible') }}/assets/images/favicon.ico">

  <!-- Bootstrap Css -->
  <link href="{{ asset('minible') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('minible') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('minible') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!-- DataTables -->
  <link href="{{ asset('minible') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('minible') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />

  <!-- Responsive datatable examples -->
  <link href="{{ asset('minible') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />



</head>


<body>

  <!-- <body data-layout="horizontal" data-topbar="colored"> -->

  <!-- Begin page -->
  <div id="layout-wrapper">


    <header id="page-topbar">
      <x-admin.navbar></x-admin.navbar>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <!-- LOGO -->
      <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
          <span class="logo-sm">
            <img src="{{ asset('minible') }}/assets/images/logo-sm.png" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="{{ asset('minible') }}/assets/images/logo-dark.png" alt="" height="20">
          </span>
        </a>

        <a href="index.html" class="logo logo-light">
          <span class="logo-sm">
            <img src="{{ asset('minible') }}/assets/images/logo-sm.png" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="{{ asset('minible') }}/assets/images/logo-light.png" alt="" height="20">
          </span>
        </a>
      </div>

      <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
      </button>

      <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    {{ $slot }}
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->



  <!-- Right Sidebar -->
  <div class="right-bar">
    <div data-simplebar class="h-100">
      <div class="rightbar-title d-flex align-items-center p-3">

        <h5 class="m-0 me-2">Settings</h5>

        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
          <i class="mdi mdi-close noti-icon"></i>
        </a>
      </div>

      <!-- Settings -->
      <hr class="m-0" />

      <div class="p-4">
        <h6 class="mb-3">Layout</h6>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
          <label class="form-check-label" for="layout-vertical">Vertical</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
          <label class="form-check-label" for="layout-horizontal">Horizontal</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
          <label class="form-check-label" for="layout-mode-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
          <label class="form-check-label" for="layout-mode-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild"
            onchange="document.body.setAttribute('data-layout-size', 'fluid')">
          <label class="form-check-label" for="layout-width-fuild">Fluid</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed"
            onchange="document.body.setAttribute('data-layout-size', 'boxed')">
          <label class="form-check-label" for="layout-width-boxed">Boxed</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light"
            onchange="document.body.setAttribute('data-topbar', 'light')">
          <label class="form-check-label" for="topbar-color-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
            onchange="document.body.setAttribute('data-topbar', 'dark')">
          <label class="form-check-label" for="topbar-color-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
            value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
          <label class="form-check-label" for="sidebar-size-default">Default</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
            value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
          <label class="form-check-label" for="sidebar-size-compact">Compact</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small"
            onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
          <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
            value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
          <label class="form-check-label" for="sidebar-color-light">Light</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
            value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
          <label class="form-check-label" for="sidebar-color-dark">Dark</label>
        </div>
        <div class="form-check sidebar-setting">
          <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored"
            value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
          <label class="form-check-label" for="sidebar-color-colored">Colored</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Direction</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
            value="ltr">
          <label class="form-check-label" for="layout-direction-ltr">LTR</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
            value="rtl">
          <label class="form-check-label" for="layout-direction-rtl">RTL</label>
        </div>

      </div>

    </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('minible') }}/assets/libs/jquery/jquery.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/simplebar/simplebar.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/node-waves/waves.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

  <!-- apexcharts -->
  <script src="{{ asset('minible') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

  <script src="{{ asset('minible') }}/assets/js/pages/dashboard.init.js"></script>

  <!-- App js -->
  <script src="{{ asset('minible') }}/assets/js/app.js"></script>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


  <!-- Required datatable js -->
  <script src="{{ asset('minible') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- Buttons examples -->
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/jszip/jszip.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

  <!-- Responsive examples -->
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
  </script>

  <!-- Datatable init js -->
  <script src="{{ asset('minible') }}/assets/js/pages/datatables.init.js"></script>

  <!-- App js -->
  <script src="{{ asset('minible') }}/assets/js/app.js"></script>

</body>

</html>
