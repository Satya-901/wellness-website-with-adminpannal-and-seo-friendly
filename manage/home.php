<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Current Date and Time</h5>
                <p id="clock" class="card-text"></p>
            </div>
        </div>
        <script>
            function updateClock() {
                var now = new Date();
                var dname = now.getDay(),
                    mo = now.getMonth(),
                    dnum = now.getDate(),
                    yr = now.getFullYear(),
                    hou = now.getHours(),
                    min = now.getMinutes(),
                    sec = now.getSeconds(),
                    pe = "AM";

                if (hou >= 12) {
                    pe = "PM";
                }
                if (hou == 0) {
                    hou = 12;
                }
                if (hou > 12) {
                    hou = hou - 12;
                }

                Number.prototype.pad = function (digits) {
                    for (var n = this.toString(); n.length < digits; n = 0 + n);
                    return n;
                }

                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
                var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                document.getElementById('clock').innerHTML = values.join(" ");
            }

            window.onload = function () {
                updateClock();
                setInterval('updateClock()', 1000);
            }
        </script>
    </div>
    <!-- Sales Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Service</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php echo $conn->query("SELECT * FROM services")->num_rows; ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Sales Card -->

    <!-- Revenue Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Total Images</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-card-image"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php echo $conn->query("SELECT * FROM gallery")->num_rows; ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Revenue Card -->

    <!-- Customers Card -->
    <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Total number of queries</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php echo $conn->query("SELECT * FROM contact")->num_rows; ?>
                        </h6>
                    </div>
                </div>
            </div>

        </div>

    </div><!-- End Customers Card -->

    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <h5 class="card-title">Recent Query</h5>

                <table class="table table-striped datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `contact` ORDER BY `contact`.`id` ASC");
                        while ($row = $qry->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $i++ ?>
                                </th>
                                <td>
                                    <?php echo ucwords($row['name']) ?>
                                </td>
                                <td>
                                    <?= $row['phone'] ?>
                                </td>
                                <td>
                                    <?= $row['subject'] ?>
                                </td>
                                <td>
                                    <?= $row['text'] ?>
                                </td>
                                <td>
                                    <a class="badge bg-success" href="mailto: <?= $row['email'] ?>">
                                        <i class="bi bi-envelope-fill"></i> Send Email
                                    </a>
                                    <br>
                                    <a class="badge bg-primary" href="tel: <?= $row['phone'] ?>"><i
                                            class="bi bi-telephone-fill"></i> Call</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</div>