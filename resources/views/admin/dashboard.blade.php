<x-admin>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-0">Dashboard</h4>
            </div>
          </div>
        </div>
        <!-- end page title -->
        @if (Auth::user()->hasRole('admin'))
          <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="float-end mt-2">
                    <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                  </div>
                  <div>
                    <h4 class="mb-1 mt-1"><span>{{ $produk }}</span></h4>
                    <p class="text-muted mb-0">Total Produk</p>
                  </div>
                </div>
              </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                  </div>
                  <div>
                    <h4 class="mb-1 mt-1"><span>{{ $transaksi }}</span></h4>
                    <p class="text-muted mb-0">Total Transaksi</p>
                  </div>
                </div>
              </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="float-end mt-2">
                    <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                  </div>
                  <div>
                    <h4 class="mb-1 mt-1"><span>@rupiah($pendapatan)</span></h4>
                    <p class="text-muted mb-0">Total Pendapatan</p>
                  </div>
                </div>
              </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">

              <div class="card">
                <div class="card-body">
                  <div class="float-end mt-2">
                    <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                  </div>
                  <div>
                    <h4 class="mb-1 mt-1"><span>{{ $karyawan }}</span></h4>
                    <p class="text-muted mb-0">Total Karyawan</p>
                  </div>
                </div>
              </div>
            </div> <!-- end col-->
          </div> <!-- end row-->
        @endif
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                <!-- Tabel Produk -->
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Nama Produk</th>
                      <th>Brand</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pakaians as $get)
                      <tr>
                        <td>{{ $get->nama_pakaian }}</td>
                        <td>{{ $get->brand }}</td>
                        <td>@rupiah($get->harga)</td>
                        <td>{{ $get->stok_barang }}</td>
                        <td class="text-center">
                          <button type="button" class="btn btn-success waves-effect waves-light checkout-btn"
                            data-id="{{ $get->id }}" data-nama="{{ $get->nama_pakaian }}"
                            data-brand="{{ $get->brand }}" data-harga="{{ $get->harga }}"
                            data-stok="{{ $get->stok_barang }}">
                            Checkout
                          </button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <h4 class="mb-0">Tabel Pesanan</h4>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body mt-4">
                <form id="pesanan-form" method="POST" action="{{ route('transaksi.store') }}">
                  @csrf
                  <table id="pesanan-table" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <tr>
                        <th>Nama Produk</th>
                        <th>Brand</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Pesanan akan ditambahkan secara dinamis di sini -->
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h5>Total Harga: Rp <span id="total-harga">0</span></h5>
                    <button type="submit" class="btn btn-primary btn-lg">Pesan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <script>
              document.write(new Date().getFullYear())
            </script> © Minible.
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block">
              Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/"
                target="_blank" class="text-reset">Themesbrand</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="{{ asset('minible') }}/assets/js/pesan.js"></script>
</x-admin>
