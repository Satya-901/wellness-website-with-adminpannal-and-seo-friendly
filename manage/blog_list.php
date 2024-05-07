<div class="row">
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

            <div class="card-body">
                <h5 class="card-title">All Blogs</h5>

                <table class="table table-striped datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Short Discription</th>
                            <th scope="col">Blog Added On</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `sa_blog` ORDER BY `sa_blog`.`id` ASC");
                        while ($row = $qry->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $i++ ?>
                                </th>
                                <td>
                                    <?php echo ucwords($row['title']) ?>
                                </td>
                                <td>
                                    <?= $row['stext'] ?>
                                </td>
                                <td>
                                    <?= date('M d,Y', strtotime($row['date'])); ?>
                                </td>
                                <td>
                                    <img style="height: 100px;" class="img-fluid" src="../img/blog/<?= $row['image'] ?>" alt="<?= $row['image'] ?>">
                                </td>
                                <td>
                                    <a href="./index.php?page=update_blog&id=<?= $row['id'];?>" class="btn btn-warning mb-2">Edit <i class="bi bi-wrench"></i></a>
                                    <a href="./index.php?page=blog_list&id=<?= $row['id'];?>" class="btn btn-danger mb-2"><i class="bi bi-trash2-fill"></i> Delet</a>
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
<?php
$id = $_GET['id'];
if (isset($id)) {
    $dquery = "DELETE FROM `sa_blog` WHERE `sa_blog`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=blog_list', '_self');
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