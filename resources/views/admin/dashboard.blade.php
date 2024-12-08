<x-admin>
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-0">Dashboard</h4>

              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>

            </div>
          </div>
        </div>
        <!-- end page title -->

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

        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table mb-0">

                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
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
              Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/"
                target="_blank" class="text-reset">Themesbrand</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</x-admin>
