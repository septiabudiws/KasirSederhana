<div id="sidebar-menu">
  @if (Auth::user()->hasRole('admin'))
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
      <li class="menu-title">Menu</li>

      <li>
        <a href="/dashboard" class="wafes-effect">
          <i class="uil-chart-pie"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="/kategori" class="waves-effect">
          <i class="uil uil-books"></i>
          <span>Kategori</span>
        </a>
      </li>

      <li>
        <a href="/color" class="waves-effect">
          <i class="uil uil-palette"></i>
          <span>Warna</span>
        </a>
      </li>

      <li>
        <a href="/size" class="waves-effect">
          <i class="uil uil-text-size"></i>
          <span>Ukuran</span>
        </a>
      </li>

      <li>
        <a href="/pakaian" class="waves-effect">
          <i class="uil-usd-square"></i>
          <span>Pakaian</span>
        </a>
      </li>

      <li>
        <a href="/transaksi" class="waves-effect">
          <i class="uil-file-info-alt"></i>
          <span>Transaksi</span>
        </a>
      </li>

    </ul>
  @else
    <ul class="metismenu list-unstyled" id="side-menu">
      <li class="menu-title">Menu</li>

      <li>
        <a href="/dashboard/karyawan" class="wafes-effect">
          <i class="uil uil-home"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="/transaksi" class="waves-effect">
          <i class="uil-file-info-alt"></i>
          <span>Transaksi</span>
        </a>
      </li>

    </ul>
  @endif

</div>
