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
                    <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                    <p class="text-muted mb-0">Total Revenue</p>
                  </div>
                  <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                        class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                  </p>
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
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                    <p class="text-muted mb-0">Orders</p>
                  </div>
                  <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                        class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                  </p>
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
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                    <p class="text-muted mb-0">Customers</p>
                  </div>
                  <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                        class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                  </p>
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
                    <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                    <p class="text-muted mb-0">Growth</p>
                  </div>
                  <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                        class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                  </p>
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
                <form id="pesanan-form" method="POST" action="">
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const pesananTable = document.querySelector('#pesanan-table tbody');
      const totalHargaElem = document.querySelector('#total-harga');
      const btnPesan = document.querySelector('#btn-pesan');

      // Fungsi untuk menghitung total harga
      function updateTotalHarga() {
        let total = 0;
        pesananTable.querySelectorAll('tr').forEach(row => {
          const harga = parseFloat(row.querySelector('.harga-produk').textContent);
          const jumlah = parseInt(row.querySelector('.jumlah-input').value);
          const subtotalCell = row.querySelector('.subtotal');
          const subtotal = harga * jumlah;
          subtotalCell.textContent = subtotal.toLocaleString('id-ID'); // Format subtotal ke Rupiah
          total += subtotal;
        });
        totalHargaElem.textContent = total.toLocaleString('id-ID'); // Format total ke Rupiah
      }

      // Event listener untuk tombol Checkout
      document.querySelectorAll('.checkout-btn').forEach(button => {
        button.addEventListener('click', function() {
          const nama = this.getAttribute('data-nama');
          const brand = this.getAttribute('data-brand');
          const harga = parseFloat(this.getAttribute('data-harga'));

          // Cek apakah produk sudah ada di tabel pesanan
          let existingRow = [...pesananTable.querySelectorAll('tr')].find(row =>
            row.querySelector('.nama-produk').textContent === nama
          );

          if (existingRow) {
            // Jika sudah ada, tambahkan jumlah
            const jumlahInput = existingRow.querySelector('.jumlah-input');
            jumlahInput.value = parseInt(jumlahInput.value) + 1;
          } else {
            // Jika belum ada, tambahkan baris baru
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            <td class="nama-produk">${nama}</td>
            <td>${brand}</td>
            <td class="harga-produk">${harga}</td>
            <td>
              <input type="number" class="form-control jumlah-input" value="1" min="1" style="width: 80px;">
            </td>
            <td class="subtotal">${harga.toLocaleString('id-ID')}</td>
            <td class="text-center">
              <button type="button" class="btn btn-danger btn-sm remove-btn">Hapus</button>
            </td>
          `;
            pesananTable.appendChild(newRow);

            // Tambahkan event listener untuk kolom jumlah
            newRow.querySelector('.jumlah-input').addEventListener('input', function() {
              if (this.value < 1) this.value = 1; // Pastikan nilai tidak kurang dari 1
              updateTotalHarga(); // Perbarui total harga saat jumlah berubah
            });

            // Tambahkan event listener untuk tombol hapus
            newRow.querySelector('.remove-btn').addEventListener('click', function() {
              newRow.remove();
              updateTotalHarga(); // Perbarui total harga setelah menghapus baris
            });
          }
          updateTotalHarga(); // Perbarui total harga setelah menambahkan baris
        });
      });

      // Event listener untuk tombol Pesan
      btnPesan.addEventListener('click', function() {
        if (pesananTable.querySelectorAll('tr').length === 0) {
          alert('Pesanan kosong! Silakan tambahkan produk terlebih dahulu.');
        } else {
          alert('Pesanan berhasil dibuat! Total harga: Rp ' + totalHargaElem.textContent);
          // Kosongkan tabel dan reset total harga
          pesananTable.innerHTML = '';
          updateTotalHarga();
        }
      });
    });
  </script>


</x-admin>
