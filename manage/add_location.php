<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Product</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $type = mysqli_real_escape_string($conn, $_POST['type']);
                    $point = mysqli_real_escape_string($conn, $_POST['point']);


                    $aboutsql = "INSERT INTO `location`(`type`, `point`) VALUES ('$type','$point')";
                    if ($conn->query($aboutsql) === TRUE) {
                        ?>
                        <script>
                            toastMixin.fire({
                                animation: true,
                                title: 'Location has been Added successfully.'
                            });
                            window.setTimeout(function () {
                                window.location.href = 'index.php?page=add_location'
                            }, 3000);
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            toastMixin.fire({
                                title: 'Cannot add Location due to some Technical issue. Error: <?= $aboutsql ?>',
                                icon: 'error'
                            });
                        </script>
                        <?php
                    }
                }
                ?>
                <!-- Vertical Form -->
                <form action="" method="post" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label" required>Location type</label>
                        <select name="type" class="form-select" id="validationCustom04" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="1">Running Plants</option>
                            <option value="2">Supply Location</option>
                            <option value="3">Upcoming Plants</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Location</label>
                        <input type="text" class="form-control" placeholder="Location" name="point" id="inputEmail4"
                            required>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Accordion without outline borders</h5>

                <!-- Accordion without outline borders -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Running Plants
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body">
                                <ol class="list-group list-group-numbered">
                                    <?php
                                    $location_query = "SELECT * FROM `location` WHERE type = '1'";
                                    $location_result = mysqli_query($conn, $location_query);
                                    while ($location = mysqli_fetch_assoc($location_result)) {
                                        ?>
                                        <li class="list-group-item">
                                            <?= $location['point'] ?>
                                            <span style="float:right;">
                                                <a class="btn btn-danger btn-sm"
                                                    href="./index.php?page=add_location&id=<?= $location['id'] ?>">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Supply Location
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body">
                                <ol class="list-group list-group-numbered">
                                    <?php
                                    $type_query = "SELECT * FROM `location` WHERE type = '2'";
                                    $type_result = mysqli_query($conn, $type_query);
                                    while ($type = mysqli_fetch_assoc($type_result)) {
                                        ?>
                                        <li class="list-group-item">
                                            <?= $type['point'] ?>
                                            <span style="float:right;">
                                                <a class="btn btn-danger btn-sm"
                                                    href="./index.php?page=add_location&id=<?= $type['id'] ?>">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Upcoming Plants
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body">
                                <ol class="list-group list-group-numbered">
                                    <?php
                                    $data_query = "SELECT * FROM `location` WHERE type = '3'";
                                    $data_result = mysqli_query($conn, $data_query);
                                    while ($data = mysqli_fetch_assoc($data_result)) {
                                        ?>
                                        <li class="list-group-item">
                                            <?= $data['point'] ?>
                                            <span style="float:right;">
                                                <a class="btn btn-danger btn-sm"
                                                    href="./index.php?page=add_location&id=<?= $data['id'] ?>">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- End Accordion without outline borders -->

            </div>
        </div>
    </div>

</div>
</div>
<?php
$id = $_GET['id'];
if (isset($id)) {
    $dquery = "DELETE FROM `location` WHERE `location`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=add_location', '_self');
        </script>
        <?php
    } else {
        ?>
        <script>
            toastMixin.fire({
                title: 'Cannot delete due to some Technical issue. Error: <?= $dquery ?>',
                icon: 'error'
            });
        </script>
        <?php
    }
}
?>