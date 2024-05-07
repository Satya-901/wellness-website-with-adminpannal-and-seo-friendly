<div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Total PDF Uploded</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6>145</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                        <h5 class="card-title">Revenue</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="ps-3">
                                <h6>$3,264</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>
                                    10
                                    <?php echo $conn->query("SELECT * FROM login WHERE usertype = '2'")->num_rows; ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End Customers Card -->

            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">Recent Users</h5>

                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">School Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $qry = $conn->query("SELECT * FROM `login` WHERE usertype = '2' ORDER BY `login`.`id` ASC");
                                while ($row = $qry->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $i++ ?>
                                        </th>
                                        <td>
                                            <?php echo ucwords($row['username']) ?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($row['schoolname']) ?>
                                        </td>
                                        <td>
                                            <a href="mailto: <?= $row['email'] ?>"
                                                class="text-primary text-decoration-none">
                                                <?php echo $row['email'] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="tel: <?= $row['phone'] ?>">
                                                <?= $row['phone'] ?>
                                            </a>
                                        </td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Recent Sales -->

        </div>
    </div><!-- End Left side columns -->

</div>