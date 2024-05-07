<style>
    /* Hide the button by default */
    .card-img-overlay .btn-dange {
        display: none;
    }

    /* Show the button when the parent is hovered over */
    .card-img-overlay:hover .btn-dange {
        display: block;
    }

    .card-img-overlay {
        background: transparent;
    }
</style>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Product</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $wordCountmsg = "";
                    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
                    $galleryCat = mysqli_real_escape_string($conn, $_POST['galleryCat']);

                    $filename = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $image = "../img/gallery/" . $filename;
                    move_uploaded_file($tempname, $image);

                    $aboutsql = "INSERT INTO `gallery`(`heading`, `image`,`galleryCat`) VALUES ('$heading','$filename','$galleryCat')";
                    if ($conn->query($aboutsql) === TRUE) {
                        // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
                        ?>
                        <script>
                            toastMixin.fire({
                                animation: true,
                                title: 'Image has been Added successfully.'
                            });
                            window.setTimeout(function () {
                                window.location.href = 'index.php?page=gallery'
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
                        <label for="Category" class="form-label">Select Category</label>
                        <select class="form-select" name="galleryCat">
                            <option selected="">Open this select menu</option>
                            <option value="wedding">wedding</option>
                            <option value="birthday">birthday</option>
                            <option value="anniversary">anniversary</option>
                            <option value="pre_wedding_shoot">Pre Wedding Shoot</option>
                            <option value="photography">photography</option>
                            <option value="videography">videography</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Heading</label>
                        <input type="text" class="form-control" placeholder="Image Heading" name="heading"
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
                <h5 class="card-title">All image</h5>
                <div class="row">
                    <?php
                    $qry = $conn->query("SELECT * FROM `gallery`");
                    while ($row = $qry->fetch_assoc()) {
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="../img/gallery/<?= $row['image'] ?>" class="card-img-top" alt="...">
                                <div class="card-img-overlay">
                                    <a href="./index.php?page=gallery&id=<?= $row['id'] ?>"
                                        class="btn-dange text-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
$id = $_GET['id'];
if (isset($id)) {
    $dquery = "DELETE FROM `gallery` WHERE `gallery`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=gallery', '_self');
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