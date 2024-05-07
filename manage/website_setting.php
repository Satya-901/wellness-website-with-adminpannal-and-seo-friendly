<style>
    #preview {
        width: 35%;
        height: auto;
        float: right;
    }
</style>
<?php

$productsql = "SELECT * FROM `website_info` WHERE id = '1'";
$productresult = $conn->query($productsql);
$productdata = $productresult->fetch_assoc();

// $products_id = $_GET['id'];
if (isset($_POST['updateproduct'])) {

    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $phone1 = mysqli_real_escape_string($conn, $_POST['phone1']);
    $phone2 = mysqli_real_escape_string($conn, $_POST['phone2']);
    $email1 = mysqli_real_escape_string($conn, $_POST['email1']);
    $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
    $fb_link = mysqli_real_escape_string($conn, $_POST['fb_link']);
    $ig_link = mysqli_real_escape_string($conn, $_POST['ig_link']);
    $tw_link = mysqli_real_escape_string($conn, $_POST['tw_link']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    $oldimage = mysqli_real_escape_string($conn, $_POST['oldimage']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $filename1 = $_FILES["image"]["name"];

    if ($filename1 == "") {
        $filename = $oldimage;
    } else {
        //image upload to my sql server using php.
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $image = "../img/" . $filename;
        move_uploaded_file($tempname, $image);
    }

    $productsql = "UPDATE `website_info` SET `website_name`='$heading',`logo`='$filename',`ig_link`='$ig_link',`fb_link`='$fb_link',`tw_link`='$tw_link',`contact1`='$phone1',`contact2`='$phone2',`email1`='$email1',`email2`='$email2',`address`='$text' WHERE id = '1'";
    if ($conn->query($productsql) === TRUE) {
        ?>
        <script>
            toastMixin.fire({
                animation: true,
                title: 'Website information  updated successfully'
            });
            window.setTimeout(function () {
                window.location.href = 'index.php?page=website_setting'
            }, 3000);
        </script>
        <?php
    } else {
        ?>
        <script>
            toastMixin.fire({
                title: 'Cannot change information due to some Technical issue. Error: <?= $productsql ?>',
                icon: 'error'
            });
        </script>
        <?php
    }
}
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Update
            <?= ucwords($productdata['product']) ?>

            <span class="float-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#verticalycentered">
                    Add Video
                </button>
            </span>
        </h5>

        <form enctype="multipart/form-data" action="" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label"> Website name </label>
                <input type="text" name="heading" value="<?= $productdata['website_name'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="validationCustom02"
                    onchange="previewImage(event)">
                <input type="hidden" name="oldimage" value="<?= $productdata['image'] ?>">
            </div>
            <div class="col-md-4">
                <img id="preview" src="../img/<?= $productdata['logo'] ?>" alt="Your Uploaded Image Will Appear Here">
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Phone No.</label>
                <input type="number" name="phone1" value="<?= $productdata['contact1'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Alternate No.</label> <small><i> Leave it blank
                        if you don't want to Add another Phone number</i></small>
                <input type="number" name="phone2" value="<?= $productdata['contact2'] ?>" class="form-control"
                    id="validationCustom01">
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Email</label>
                <input type="email" name="email1" value="<?= $productdata['email1'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Alternate email</label> <small><i> Leave it blank
                        if you don't want to Add Alternate email address</i></small>
                <input type="email" name="email2" value="<?= $productdata['email2'] ?>" class="form-control"
                    id="validationCustom01">
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Facebook Link</label>
                <input type="text" name="fb_link" value="<?= $productdata['fb_link'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Instagram Link</label>
                <input type="text" name="ig_link" value="<?= $productdata['ig_link'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Twitter Link</label>
                <input type="text" name="tw_link" value="<?= $productdata['tw_link'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>


            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Address</label>
                <textarea name="text" class="form-control"><?= $productdata['address'] ?></textarea>
            </div>

            <div class="col-12">
                <button type="submit" name="updateproduct" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

<!-- Modal  -->
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">upload Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                if (isset($_POST['updatevideo'])) {
                    $videoName1 = $_FILES["video"]["name"];
                    $old_video = $_POST['old_video'];

                    if ($videoName1 == "") {
                        $videoName = $old_video;
                    } else {
                        $videoName = $_FILES["video"]["name"];
                        $videoTmp = $_FILES["video"]["tmp_name"];
                        // Move uploaded file to a folder
                        $uploadFolder = "../video/";
                        move_uploaded_file($videoTmp, $uploadFolder . $videoName);
                    }

                    $videosql = "UPDATE `website_info` SET `video` = '$videoName' WHERE `website_info`.`id` = 1;";

                    if ($conn->query($videosql) === TRUE) {
                        ?>
                        <script>
                            toastMixin.fire({
                                animation: true,
                                title: 'Video uploaded successfully.'
                            });
                            window.setTimeout(function () {
                                window.location.href = 'index.php?page=website_setting'
                            }, 3000);
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            toastMixin.fire({
                                title: 'Cannot upload Video due to some Technical issue. Error: <?= $videosql ?>',
                                icon: 'error'
                            });
                        </script>
                        <?php
                    }
                }
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <label class="form-label" for="video">Choose a video:</label>
                    <input type="file" class="form-control" name="video" id="video" accept="video/*" required>
                    <input type="hidden" name="old_video" value="<?= $productdata['video'] ?>" id="old_video">
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="updatevideo" class="btn btn-primary" value="Uplaod Video">
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var preview = document.getElementById('preview');
                preview.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>