<x-admin>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-0">Tabel Color</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card">
            <div class="pt-3 mb-3">
              <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                data-bs-target="#animationModal">Tambah Warna</button>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Warna</th>
                    <th>Total Produk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($color as $get)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $get->warna }}</td>
                      <td>{{ $get->pakaian_count }}</td>
                      <td>
                        <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal"
                          data-bs-target="#animationModaledit{{ $get->id }}">Edit</button>
                        <div class="modal fade animate__jackInTheBox" id="animationModaledit{{ $get->id }}"
                          tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel5">Edit Kategori</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-6 mt-2">
                                    <form action="{{ route('color.update', $get->id) }}" method="POST">
                                      @csrf
                                      <div class="form-floating form-floating-outline">
                                        <input type="text" id="nameAnimation" value="{{ $get->warna }}"
                                          name="color" class="form-control" placeholder="Masukkan Nama Warna...">
                                        <label for="nameAnimation">Warna</label>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                  data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>
                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                          data-bs-target="#modal_del_{{ $get->id }}">Hapus
                        </button>
                        <div class="modal fade" id="modal_del_{{ $get->id }}" data-bs-backdrop="static"
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
                                Yakin ingin menghapus Warna <b>{{ $get->warna }}</b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary text-white"
                                  data-bs-dismiss="modal">Batal</button>
                                <a href="/color/hapus/{{ $get->id }}" class="btn btn-danger text-white">Ya!
                                  Hapus</a>
                              </div>
                            </div>
                          </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

        </div> <!-- end col-->
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
          <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
              Hello, world! This is a toast message.
            </div>
          </div>
        </div>

      </div> <!-- end row-->

      <!-- Modal Tambah Kategori -->
      <div class="modal fade animate__jackInTheBox" id="animationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel5">Tambah Kategori</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-6 mt-2">
                  <form action="{{ route('color.store') }}" method="POST">
                    @csrf
                    <div class="form-floating form-floating-outline">
                      <input type="text" id="nameAnimation" name="color" class="form-control"
                        placeholder="Masukkan Warna...">
                      <label for="nameAnimation">Warna</label>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
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

  <style>
    @keyframes jackInTheBox {
      from {
        opacity: 0;
        transform: scale(0.1) rotate(30deg);
        transform-origin: center bottom;
      }

      50% {
        transform: rotate(-10deg);
      }

      70% {
        transform: rotate(3deg);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate__jackInTheBox {
      animation-name: jackInTheBox;
      animation-duration: 1s;
      animation-fill-mode: both;
    }
  </style>
</x-admin>
