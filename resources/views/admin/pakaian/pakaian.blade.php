<x-admin>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-0">Tabel Pakaian</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="mb-2">
              <a class="btn btn-primary waves-effect waves-light" href="/pakaian/tambah">Tambah Produk</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table mb-0">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Nama Pakaian</th>
                      <th>Kategori</th>
                      <th>Brand</th>
                      <th>Harga</th>
                      <th>Stok Barang</th>
                      <th>Ukuran Yang Tersedia</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pakaians as $get)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $get->nama_pakaian }}</td>
                        <td>{{ $get->kategori->nama_kategori }}</td>
                        <td>{{ $get->brand }}</td>
                        <td>@rupiah($get->harga)</td>
                        <td>{{ $get->stok_barang }}</td>
                        <td>
                          @foreach ($get->ukuran as $size)
                            {{ $size->ukuran }},
                          @endforeach
                        </td>
                        <td>
                          <button type="button" class="btn btn-info waves-effect waves-light">Edit</button>
                          <button type="button" class="btn btn-danger waves-effect waves-light">Hapus
                          </button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div> <!-- end col-->
      </div> <!-- end row-->
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
            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank"
              class="text-reset">Themesbrand</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</x-admin>
