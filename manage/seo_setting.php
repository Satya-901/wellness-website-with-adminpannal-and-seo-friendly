<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">SEO Setting</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $pagename = mysqli_real_escape_string($conn, $_POST['pagename']);
                    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
                    $description = mysqli_real_escape_string($conn, $_POST['description']);

                    $seosql = "INSERT INTO `seo_keyword`(`page_name`, `keyword`, `description`) VALUES ('$pagename','$keywords','$description')";
                    if ($conn->query($seosql) === TRUE) {
                        ?>
                        <script>
                            toastMixin.fire({
                                animation: true,
                                title: 'meta keyword & description Added successfully.'
                            });
                            window.setTimeout(function () {
                                window.location.href = 'index.php?page=seo_setting'
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
                        <label for="pagename" class="form-label">Page Name</label>
                        <input type="text" class="form-control" name="pagename" id="pagename" required>
                    </div>
                    <div class="col-12">
                        <label for="keywords" class="form-label">keywords</label>
                        <input type="text" class="form-control" name="keywords" id="keywords" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Sort description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="3"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">SEO done pages</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Page Name</th>
                            <th>keywords</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `seo_keyword`");
                        while ($row = $qry->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?php echo $row['page_name']; ?></td>
                                <td><?php echo $row['keyword']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td>
                                    <a href="./index.php?page=seo_setting&id=<?= $row['id'] ?>" class="btn btn-danger"><i
                                            class="bi bi-trash2-fill"></i></a>
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
    $dquery = "DELETE FROM `seo_keyword` WHERE `seo_keyword`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=seo_setting', '_self');
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