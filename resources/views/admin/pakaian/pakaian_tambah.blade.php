<x-admin>
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2>Tambah Produk</h2>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nama Produk</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" placeholder="Masukkan Nama Produk ..." id="example-text-input">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Kategori Produk</label>
                    <div class="col-md-10">
                      <select class="form-select">
                        <option selected disabled value="">Pilih Kategori...</option>
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="example-text-input2" class="col-md-2 col-form-label">Brand Produk</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" placeholder="Masukkan Nama Brand ..." id="example-text-input2">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="example-text-input3" class="col-md-2 col-form-label">Harga</label>
                    <div class="col-md-10">
                      <input class="form-control" type="number" placeholder="contoh: 150000" id="example-text-input3">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="example-text-input5" class="col-md-2 col-form-label">Ukuran Yang Tersedia</label>
                    <div class="col-md-10">
                        @foreach ($size as $get)
                        <input class="form-check-input" type="checkbox" id="formCheck{{ $get->id }}" name="size[]" value="{{ $get->id }}">
                        <label class="form-check-label" for="formCheck{{ $get->id }}">
                            {{ $get->ukuran }}
                        </label>
                        @endforeach
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="example-text-input6" class="col-md-2 col-form-label">Warna Yang Tersedia</label>
                    <div class="col-md-10">
                        @foreach ($color as $key)
                        <input class="form-check-input" type="checkbox" id="formColor{{ $key->id }}" name="color[]" value="{{ $key->id }}">
                        <label class="form-check-label" for="formColor{{ $key->id }}">
                            {{ $key->warna }}
                        </label>
                        @endforeach
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="example-text-input4" class="col-md-2 col-form-label">Stok Produk</label>
                    <div class="col-md-10">
                      <input class="form-control" type="number" placeholder="30" id="example-text-input4">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="editor" class="col-md-2 col-form-label">Deskripsi Produk</label>
                    <div class="col-md-10">
                      <textarea name="deskripsi" id="editor" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- end col -->
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
                target="_blank" class="text-reset">Septiabudi WS</a>
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

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="{{ asset('ckeditor') }}/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create(document.querySelector('#editor'), {
        ckfinder: {
          uploadUrl: ""
        }
      })
      .catch(error => {
        console.error(error);
      });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#upload').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

</x-admin>
