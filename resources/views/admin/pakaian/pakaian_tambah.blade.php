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
                <div class="mb-3 row">
                  <label for="example-text-input" class="col-md-2 col-form-label">Nama Produk</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Kategori Produk</label>
                  <div class="col-md-10">
                    <select class="form-select">
                      <option>T-Shirt</option>
                      <option>Jaket</option>
                      <option>Celana</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="example-text-input2" class="col-md-2 col-form-label">Brand Produk</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input2">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="example-text-input3" class="col-md-2 col-form-label">Harga</label>
                  <div class="col-md-10">
                    <input class="form-control" type="number" placeholder="150000" id="example-text-input3">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="example-text-input5" class="col-md-2 col-form-label">Ukuran Yang Tersedia</label>
                  <div class="col-md-10">
                    <input class="form-check-input" type="checkbox" id="formCheck1">
                    <label class="form-check-label" for="formCheck1">
                      L
                    </label>
                    <input class="form-check-input" type="checkbox" id="formCheck2">
                    <label class="form-check-label" for="formCheck2">
                      XL
                    </label>
                    <input class="form-check-input" type="checkbox" id="formCheck3">
                    <label class="form-check-label" for="formCheck3">
                      XXL
                    </label>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="example-text-input6" class="col-md-2 col-form-label">Warna Yang Tersedia</label>
                  <div class="col-md-10">
                    <input class="form-check-input" type="checkbox" id="formCheck4">
                    <label class="form-check-label" for="formCheck4">
                      Biru
                    </label>
                    <input class="form-check-input" type="checkbox" id="formCheck5">
                    <label class="form-check-label" for="formCheck5">
                      Putih
                    </label>
                    <input class="form-check-input" type="checkbox" id="formCheck6">
                    <label class="form-check-label" for="formCheck6">
                      Khaki
                    </label>
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
