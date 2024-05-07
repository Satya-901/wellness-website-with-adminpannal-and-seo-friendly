<style>
    #preview {
        width: 50%;
        height: auto;
        float: right;
    }
</style>
<?php
if (isset($_POST['updateabout'])) {
    $wordCountmsg = "";
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $stext = mysqli_real_escape_string($conn, $_POST['stext']);
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
        $image = "../assets/img/" . $filename;
        move_uploaded_file($tempname, $image);
    }

    if ($wordCount > 100) {
        $wordCountmsg = "<span class='text-danger'>The text area should not exceed 20 words.</span>";
    } else {
        $aboutsql = "UPDATE `about` SET `heading`='$heading',`image`='$filename',`stext`='$stext',`text`='$text' WHERE id = '1'";
        if ($conn->query($aboutsql) === TRUE) {
            // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
            ?>
            <script>
                toastMixin.fire({
                    animation: true,
                    title: 'About page updated successfully'
                });
                window.setTimeout(function () {
                    window.location.href = 'index.php?page=about'
                }, 3000);
            </script>
            <?php
        } else {
            ?>
            <script>
                toastMixin.fire({
                    title: 'Cannot change information due to some Technical issue. Error: <?= $aboutsql ?>',
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
        <h5 class="card-title">Update About</h5>
        <?php
        $aboutsql = "SELECT * FROM `about`";
        $aboutresult = $conn->query($aboutsql);
        $aboutdata = $aboutresult->fetch_assoc();
        ?>
        <form enctype="multipart/form-data" action="" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Heading</label>
                <input type="text" name="heading" value="<?= $aboutdata['heading'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="validationCustom02"
                    onchange="previewImage(event)">
                <input type="hidden" name="oldimage" value="<?= $aboutdata['image'] ?>">
            </div>
            <div class="col-md-4">
                <img id="preview" src="../assets/img/<?= $aboutdata['image'] ?>"
                    alt="Your Uploaded Image Will Appear Here">
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Short Description</label> &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg != "") {
                            echo $wordCountmsg;
                        } else {
                            echo "Sort description Must content 100 Words only (It will be displayed on homepage of your website.)";
                        } ?>
                    </i>
                </Small>
                <textarea name="stext" id="stext" class="form-control" cols="30"
                    rows="3"><?= $aboutdata['stext'] ?></textarea>
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Description</label>
                <textarea name="text" class="tinymce-editor form-control"><?= $aboutdata['text'] ?></</textarea>
            </div>
            <div class="col-12">
                <input type="submit" name="updateabout" class="btn btn-primary" value="Update">
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