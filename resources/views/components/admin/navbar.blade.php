<div class="navbar-header">
  <div class="d-flex">
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

    <!-- App Search-->
    <form class="app-search d-none d-lg-block">
      <div class="position-relative">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="uil-search"></span>
      </div>
    </form>
  </div>

  <div class="d-flex">

    <div class="dropdown d-inline-block d-lg-none ms-2">
      <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="uil-search"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

        <form class="p-3">
          <div class="m-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="dropdown d-none d-lg-inline-block ms-1">
      <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="uil-apps"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <div class="px-lg-2">
          <div class="row g-0">
            <div class="col">
              <a class="dropdown-icon-item" href="#">
                <img src="{{ asset('minible') }}/assets/images/brands/github.png" alt="Github">
                <span>GitHub</span>
              </a>
            </div>
            <div class="col">
              <a class="dropdown-icon-item" href="#">
                <img src="{{ asset('minible') }}/assets/images/brands/bitbucket.png" alt="bitbucket">
                <span>Bitbucket</span>
              </a>
            </div>
            <div class="col">
              <a class="dropdown-icon-item" href="#">
                <img src="{{ asset('minible') }}/assets/images/brands/dribbble.png" alt="dribbble">
                <span>Dribbble</span>
              </a>
            </div>
          </div>

          <div class="row g-0">
            <div class="col">
              <a class="dropdown-icon-item" href="#">
                <img src="{{ asset('minible') }}/assets/images/brands/dropbox.png" alt="dropbox">
                <span>Dropbox</span>
              </a>
            </div>
            <div class="col">
              <a class="dropdown-icon-item" href="#">
                <img src="{{ asset('minible') }}/assets/images/brands/mail_chimp.png" alt="mail_chimp">
                <span>Mail Chimp</span>
              </a>
            </div>
            <div class="col">
              <a class="dropdown-icon-item" href="#">
                <img src="{{ asset('minible') }}/assets/images/brands/slack.png" alt="slack">
                <span>Slack</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="dropdown d-none d-lg-inline-block ms-1">
      <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
        <i class="uil-minus-path"></i>
      </button>
    </div>

    @if (auth()->user()->hasRole('admin'))
      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="uil-bell"></i>
          <span class="badge bg-danger rounded-pill">{{ auth()->user()->unreadNotifications->count() }}</span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
          aria-labelledby="page-header-notifications-dropdown">
          <div class="p-3">
            <div class="row align-items-center">
              <div class="col">
                <h5 class="m-0 font-size-16">Notifications</h5>
              </div>
              <div class="col-auto">
                <a href="{{ route('notifications.markAllRead') }}" class="small">Mark all as read</a>
              </div>
            </div>
          </div>
          <div data-simplebar style="max-height: 230px;">
            @foreach (auth()->user()->unreadNotifications as $notification)
              <a href="javascript:void(0);" class="text-dark notification-item">
                <div class="d-flex align-items-start">
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Notifikasi Produk</h6>
                    <div class="font-size-12 text-muted">
                      <p class="mb-1">{{ $notification->data['message'] }}</p>
                      <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                        {{ $notification->created_at->diffForHumans() }}</p>
                    </div>
                  </div>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    @endif


    <div class="dropdown d-inline-block">
      <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle header-profile-user" src="{{ asset('minible') }}/assets/images/users/avatar-4.jpg"
          alt="Header Avatar">
        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Marcus</span>
        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <a class="dropdown-item" href="#"><i
            class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View
            Profile</span></a>
        <a class="dropdown-item" href="#"><i
            class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">My
            Wallet</span></a>
        <a class="dropdown-item d-block" href="#"><i
            class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
            class="align-middle">Settings</span> <span
            class="badge bg-success-subtle text-success rounded-pill mt-1 ms-2">03</span></a>
        <a class="dropdown-item" href="#"><i
            class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock
            screen</span></a>
        <a class="dropdown-item" href="/logout"><i
            class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
            class="align-middle">Sign out</span></a>
      </div>
    </div>

    <div class="dropdown d-inline-block">
      <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
        <i class="uil-cog"></i>
      </button>
    </div>

  </div>
</div>
