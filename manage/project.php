<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> All the project list <span class="float-end">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#verticalycentered">
                            Add New Project
                        </button></span> </h5>
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>
                                <b>Project</b> Name
                            </th>
                            <th>Location</th>
                            <th>Image</th>
                            <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `projects` ORDER BY `projects`.`id` ASC");
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
                                    <?php echo ucwords($row['location']) ?>
                                </td>
                                <td>
                                    <img style="height: 100px;" class="img-fluid" src="../img/<?= $row['image'] ?>"
                                        alt="<?= $row['image'] ?>">
                                </td>
                                <td>
                                    <?= date('d, M Y', strtotime($row['date'])) ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<?php
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $image = "../img/" . $filename;
    move_uploaded_file($tempname, $image);

    $aboutsql = "INSERT INTO `projects`(`name`,`location`, `image`) VALUES ('$name','$location','$filename')";
    if ($conn->query($aboutsql) === TRUE) {
        // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
        ?>
        <script>
            toastMixin.fire({
                animation: true,
                title: 'Project has been Added successfully.'
            });
            window.setTimeout(function () {
                window.location.href = 'index.php?page=project'
            }, 3000);
        </script>
        <?php
    } else {
        ?>
        <script>
            toastMixin.fire({
                title: 'Cannot add Product due to some Technical issue. Error: <?= $aboutsql ?>',
                icon: 'error'
            });
        </script>
        <?php
    }

}
?>
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Project Name</label>
                        <input type="text" class="form-control" placeholder="Project name" name="name" id="inputNanme4"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="location" class="form-label">Project location</label>
                        <input type="text" class="form-control" placeholder="Project location" name="location"
                            id="location" required>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="inputEmail4" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
            </div>
            </form>
        </div>
    </div>
</div>