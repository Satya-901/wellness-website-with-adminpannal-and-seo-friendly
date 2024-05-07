<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Services</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $wordCountmsg = "";
                    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
                    $stext = mysqli_real_escape_string($conn, $_POST['stext']);
                    // to  count the words in this textarea 
                    $wordCount = str_word_count($stext);
                    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $heading)));

                    $filename = "service-" . $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $image = "../img/servises/" . $filename;
                    move_uploaded_file($tempname, $image);

                    if ($wordCount > 50) {
                        $wordCountmsg = "<span class='text-danger'>The text area should not exceed 50 words.</span>";
                    } else {
                        $aboutsql = "INSERT INTO `services`(`service`, `image`, `stext`,`slug`) VALUES ('$heading','$filename','$stext','$slug')";
                        if ($conn->query($aboutsql) === TRUE) {
                            // echo $aboutsql;
                            // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
                            ?>
                            <script>
                                toastMixin.fire({
                                    animation: true,
                                    title: 'Services has been Added successfully.'
                                });
                                window.setTimeout(function () {
                                    window.location.href = 'index.php?page=add_services'
                                }, 3000);
                            </script>
                            <?php
                        } else {
                            ?>
                            <script>
                                toastMixin.fire({
                                    title: 'Cannot add Services due to some Technical issue. Error: <?= $aboutsql ?>',
                                    icon: 'error'
                                });
                            </script>
                            <?php
                        }
                    }
                }
                ?>
                <!-- Vertical Form -->
                <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Service Name</label>
                        <input type="text" class="form-control" name="heading" id="inputNanme4" required>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="inputEmail4" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Sort description</label> &nbsp;
                        <Small>
                            <i>
                                <?php if ($wordCountmsg != "") {
                                    echo $wordCountmsg;
                                } else {
                                    echo "Sort description Must content 50 Words only.";
                                } ?>
                            </i>
                        </Small>
                        <textarea class="form-control" name="stext" id="stext" cols="30" rows="3" required></textarea>
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
                <h5 class="card-title">All Services</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Services</th>
                            <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `services`");
                        while ($row = $qry->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $i++ ?>
                                </th>
                                <td>
                                    <?php echo ucwords($row['service']) ?>
                                </td>
                                <td>
                                    <?php echo strtoupper($row['date']) ?>
                                </td>
                                <td>
                                    <a href="./index.php?page=add_services&id=<?= $row['id'] ?>" class="btn btn-danger"><i
                                            class="bi bi-trash2-fill"></i></a>
                                    <a href="./index.php?page=update_services&service=<?= $row['id'] ?>"
                                        class="btn btn-warning"><i class="bi bi-wrench"></i></i></a>
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
</div>
<?php
$id = $_GET['id'];
if (isset($id)) {
    $dquery = "DELETE FROM `services` WHERE `services`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=add_services', '_self');
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