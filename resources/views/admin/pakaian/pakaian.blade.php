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
          <div class="card">
            <div class="col-md-2 pt-3 mb-3">
              <a class="btn btn-primary waves-effect waves-light" href="/pakaian/tambah">Tambah Produk</a>
            </div>
            <div class="table-responsive">
              <table class="table mb-0 text-center">
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
                        <button type="button" class="btn btn-success waves-effect waves-light">Detail Produk</button>
                        <a class="btn btn-info waves-effect waves-light" href="/pakaian/edit/{{ $get->token }}">Edit</a>
                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                          data-bs-target="#modal_del_{{ $get->token }}">Hapus
                        </button>
                        <div class="modal fade" id="modal_del_{{ $get->token }}" data-bs-backdrop="static"
                          data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><i
                                    class="ri-error-warning-line"></i>
                                  Peringatan!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Yakin ingin menghapus Produk <b>{{ $get->nama_pakaian }}</b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary text-white"
                                  data-bs-dismiss="modal">Batal</button>
                                <a href="/pakaian/hapus/{{ $get->token }}" class="btn btn-danger text-white">Ya!
                                  Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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
