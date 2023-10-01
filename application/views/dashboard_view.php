  <main id="main" class="main">

    <div class="pagetitle">
      <h1 class = "text-success">Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

             <!-- Today Reservation Card -->
             <div class="col-xxl-6 col-xl-12">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-more-fill"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Today's Reservation </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-calendar-check-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Today Reservation Card -->

             <!-- Start Upcoming Reservation Card -->
                <div class="col-xxl-6 col-xl-12">

                <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-more-fill"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">This week</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Upcoming Reservations <span>| This week</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bxs-time-five"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>

                    </div>
                    </div>
                        </div>
                    </div>
                </div>
              <!-- End Upcoming Reservation Card -->

            <!-- Reservation Status -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-more-fill"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reservation Status</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Facility/Amenity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">Resident_ID</a></th>
                        <td>Orland Gedaro</td>
                        <td><a href="#" class="text-primary">Monoblock</a></td>
                        <td>Free</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Resident_ID</a></th>
                        <td>Anthony Reponte</td>
                        <td><a href="#" class="text-primary">Vehicle</a></td>
                        <td>₱200.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Resident_ID</a></th>
                        <td>Vincer Mangueran</td>
                        <td><a href="#" class="text-primary">Basketball Court</a></td>
                        <td>₱400.00</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Resident ID</a></th>
                        <td>Lloyed Reponte</td>
                        <td><a href="#" class="text-primar">Tent</a></td>
                        <td>Free</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">Resident_ID</a></th>
                        <td>Rashed Perez</td>
                        <td><a href="#" class="text-primary">Training Hall</a></td>
                        <td>₱1,000.00</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Reservation status -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="ri-more-fill"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Reservations</h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='ri-checkbox-blank-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                   Vincer Mangueran <a class="fw-bold text-dark">returned the tent</a>.
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='ri-checkbox-blank-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                  Vincer Mangueran has <a class="fw-bold text-dark">returned the tent</a>.
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='ri-checkbox-blank-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                  Vincer Mangueran has <a class="fw-bold text-dark">returned the tent</a>.
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='ri-checkbox-blank-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                  Vincer Mangueran has <a class="fw-bold text-dark">returned the tent</a>.
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='ri-checkbox-blank-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                  Vincer Mangueran has <a class="fw-bold text-dark">returned the tent</a>.
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='ri-checkbox-blank-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                  Rashed Perez has <a class="fw-bold text-dark">returned the tent</a>.
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->y
</body>

</html>