<style>
    #preview {
        width: 50%;
        height: auto;
        float: right;
    }
</style>
<?php
$servicesql = "SELECT * FROM `services` WHERE id = '" . $_GET['service'] . "'";
$serviceresult = $conn->query($servicesql);
$servicedata = $serviceresult->fetch_assoc();

// $services_id = $_GET['id'];
if (isset($_POST['updateservice'])) {
    $wordCountmsg = "";
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $stext = mysqli_real_escape_string($conn, $_POST['stext']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    // to  count the words in this textarea 
    $wordCount = str_word_count($stext);
    $oldimage = mysqli_real_escape_string($conn, $_POST['oldimage']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $filename1 = $_FILES["image"]["name"];

    if ($filename1 == "") {
        $filename = $oldimage;
    } else {
        //image upload to my sql server using php.
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $image = "../img/servises/" . $filename;
        move_uploaded_file($tempname, $image);
    }

    if ($wordCount > 50) {
        $wordCountmsg = "<span class='text-danger'>The text area should not exceed 50 words.</span>";
    } else {
        $servicesql = "UPDATE `services` SET `service`='$heading',`image`='$filename',`stext`='$stext',`text`='$text' ,`slug` = '$slug' WHERE id = '" . $_GET['service'] . "'";
        if ($conn->query($servicesql) === TRUE) {
            // echo $servicesql;
            // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
            ?>
            <script>
                toastMixin.fire({
                    animation: true,
                    title: 'service page updated successfully'
                });
                window.setTimeout(function () {
                    window.location.href = './index.php?page=update_services&service=<?= $servicedata['id'] ?>'
                }, 3000);
            </script>
            <?php
        } else {
            ?>
            <script>
                toastMixin.fire({
                    title: 'Cannot change information due to some Technical issue. Error: <?= $servicesql ?>',
                    icon: 'error'
                });
            </script>
            <?php
        }
    }
}
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Update
            <?= ucwords($servicedata['service']) ?>
        </h5>
        <form enctype="multipart/form-data" action="" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Heading</label>
                <input type="text" name="heading" value="<?= $servicedata['service'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="validationCustom02"
                    onchange="previewImage(event)">
                <input type="hidden" name="oldimage" value="<?= $servicedata['image'] ?>">
            </div>
            <div class="col-md-4">
                <img id="preview" src="../img/servises/<?= $servicedata['image'] ?>"
                    alt="Your Uploaded Image Will Appear Here">
            </div>
            <div class="col-md-12">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" value="<?= $servicedata['slug'] ?>" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Short Description</label> &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg != "") {
                            echo $wordCountmsg;
                        } else {
                            echo "Sort description Must content 50 Words only (It will be displayed on homepage of your website.)";
                        } ?>
                    </i>
                </Small>
                <textarea name="stext" id="stext" class="form-control" cols="30"
                    rows="3"><?= $servicedata['stext'] ?></textarea>
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Description</label>
                <textarea name="text" class="tinymce-editor form-control"><?= $servicedata['text'] ?></</textarea>
            </div>
            <div class="col-12">
                <input type="submit" name="updateservice" class="btn btn-primary" value="Update">
            </div>
        </form>

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