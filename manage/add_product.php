<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Product</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $wordCountmsg = "";
                    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
                    $stext = mysqli_real_escape_string($conn, $_POST['stext']);
                    // to  count the words in this textarea 
                    $wordCount = str_word_count($stext);

                    $filename = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $image = "../img/" . $filename;
                    move_uploaded_file($tempname, $image);

                    $aboutsql = "INSERT INTO `Product`(`name`, `image`) VALUES ('$heading','$filename')";
                    if ($conn->query($aboutsql) === TRUE) {
                        // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
                        ?>
                        <script>
                            toastMixin.fire({
                                animation: true,
                                title: 'Product has been Added successfully.'
                            });
                            window.setTimeout(function () {
                                window.location.href = 'index.php?page=add_Product'
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
                <!-- Vertical Form -->
                <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="Product name" name="heading"
                            id="inputNanme4" required>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="inputEmail4" required>
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
                <h5 class="card-title">All Product</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th data-type="date" data-format="YYYY/DD/MM">Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `Product`");
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
                                    <?php echo strtoupper($row['date']) ?>
                                </td>
                                <td>
                                    <a href="./index.php?page=add_Product&id=<?= $row['id'] ?>" class="btn btn-danger"><i
                                            class="bi bi-trash2-fill"></i></a>
                                    <a href="./index.php?page=update_Product&product=<?= $row['id'] ?>"
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
    $dquery = "DELETE FROM `Product` WHERE `Product`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=add_Product', '_self');
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