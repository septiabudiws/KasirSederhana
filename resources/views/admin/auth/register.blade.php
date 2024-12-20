<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Register</title>
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

</head>

<body class="authentication-bg">
  <div class="account-pages my-5 pt-sm-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <a href="index.html" class="mb-5 d-block auth-logo">
              <img src="{{ asset('minible') }}/assets/images/logo-dark.png" alt="" height="22"
                class="logo logo-dark">
              <img src="{{ asset('minible') }}/assets/images/logo-light.png" alt="" height="22"
                class="logo logo-light">
            </a>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card">

            <div class="card-body p-4">

              <div class="text-center mt-2">
                <h5 class="text-primary">Register Account</h5>
                <p class="text-muted">Daftar Jadi Karyawan Disini</p>
              </div>
              <div class="p-2 mt-4">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama">
                    </div>

                  <div class="mb-3">
                    <label class="form-label" for="useremail">Email</label>
                    <input type="email" class="form-control" id="useremail" placeholder="Masukkan Email Anda" name="email">
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="userpassword">Password</label>
                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="auth-terms-condition-check" name="terms">
                    <label class="form-check-label" for="auth-terms-condition-check">Saya menerima Syarat dan Ketentuan</label>
                  </div>



                  <div class="mt-3 text-end">
                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Daftar</button>
                  </div>
                  </div>

                  <div class="mt-4 text-center">
                    <p class="text-muted mb-0">Sudah Punya Akun Karyawan ? <a href="/login"
                        class="fw-medium text-primary"> Login</a></p>
                  </div>
                </form>
              </div>

            </div>
          </div>
          <div class="mt-5 text-center">
            <p>©
              <script>
                document.write(new Date().getFullYear())
              </script> Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by SeptiabudiWS
            </p>
          </div>

        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('minible') }}/assets/libs/jquery/jquery.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/simplebar/simplebar.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/node-waves/waves.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="{{ asset('minible') }}/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

  <!-- App js -->
  <!-- <script src="{{ asset('minible') }}/assets/js/app.js"></script> -->

</body>

</html>
