<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Category</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $pagename = mysqli_real_escape_string($conn, $_POST['pagename']);

                    $seosql = "INSERT INTO `category`(`category`) VALUES ('$pagename')";
                    if ($conn->query($seosql) === TRUE) {
                        ?>
                        <script>
                            toastMixin.fire({
                                animation: true,
                                title: 'category Added successfully.'
                            });
                            window.setTimeout(function () {
                                window.location.href = 'index.php?page=add_category'
                            }, 3000);
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            toastMixin.fire({
                                title: 'Cannot add Services due to some Technical issue. Error: <?= $seosql ?>',
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
                        <label for="pagename" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="pagename" id="pagename" required>
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
                <h5 class="card-title">Category List</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `category`");
                        while ($row = $qry->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?php echo $row['category']; ?></td>
                                <td>
                                    <a href="./index.php?page=add_category&id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash2-fill"></i></a>
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
    $dquery = "DELETE FROM `category` WHERE `category`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=add_category', '_self');
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