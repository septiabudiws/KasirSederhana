<x-admin>
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

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
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                <!-- Tabel Produk -->
                <table class="table mb-0 text-center">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Tanggal Transaksi</th>
                      <th>Total Harga Transaksi</th>
                      <th>Jumlah Item</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($transaksi as $get)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($get->created_at)->translatedFormat('l, d F Y H:i') }} WIB</td>
                        <td>@rupiah($get->total_pesanan)</td>
                        <td>{{ $get->items->count() }}</td>
                        <td class="text-center">
                          <button type="button" class="btn btn-primary waves-effect waves-light checkout-btn"
                            data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->token }}">
                            Cetak Struk
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal{{ $get->token }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pesanan Dengan Id
                                    {{ $get->token }}</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <h2 class="text-center fw-bold">MINIBLE</h2>
                                  <p class="text-center">Jl. Raya Andromeda No. 69</p>
                                  <p class="fs-6 text-start">No. Transaksi: {{ $get->token }}</p>
                                  <p class="fs-6 text-start">Tanggal:
                                    {{ \Carbon\Carbon::parse($get->tanggal_transaksi)->translatedFormat('d F Y') }}</p>
                                  <div class="table-responsive-sm">
                                    <table class="table">
                                      <thead class="table-light">
                                        <tr>
                                          <th><small>Nama Produk</small></th>
                                          <th><small>Satuan</small></th>
                                          <th><small>Harga</small></th>
                                          <th><small>Quantity</small></th>
                                          <th><small>Total</small></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($get->items as $item)
                                          <tr>
                                            <td><small>{{ $item->nama_produk }}</small></td>
                                            <td><small>PCS</small></td>
                                            <td><small>@rupiah($item->harga)</small></td>
                                            <td>
                                              <small>{{ $item->harga > 0 ? floor($item->total / $item->harga) : 0 }}</small>
                                            </td>
                                            <td><small>@rupiah($item->total)</small></td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <p class="text-end fs-5">Total @rupiah($get->total_pesanan)</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Cetak Struk</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-success pay-button" type="button"
                            id="pay-button{{ $get->token }}">Bayar</button>
                          <script type="text/javascript">
                            document.getElementById('pay-button{{ $get->token }}').onclick = function() {
                              // SnapToken acquired from previous step
                              snap.pay('{{ $get->snap_token }}', {
                                // Optional
                                onSuccess: function(result) {
                                  /* You may add your own js here, this is just example */
                                  document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                                },
                                // Optional
                                onPending: function(result) {
                                  /* You may add your own js here, this is just example */
                                  document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                                },
                                // Optional
                                onError: function(result) {
                                  /* You may add your own js here, this is just example */
                                  document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                                }
                              });
                            };
                          </script>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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
