<style>
    #preview {
        width: 50%;
        height: auto;
        float: right;
    }
</style>
<?php
$productsql = "SELECT * FROM `product` WHERE id = '" . $_GET['product'] . "'";
$productresult = $conn->query($productsql);
$productdata = $productresult->fetch_assoc();

// $products_id = $_GET['id'];
if (isset($_POST['updateproduct'])) {
    $wordCountmsg = "";
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);

    $oldimage = mysqli_real_escape_string($conn, $_POST['oldimage']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $filename1 = $_FILES["image"]["name"];

    if ($filename1 == "") {
        $filename = $oldimage;
    } else {
        //image upload to my sql server using php.
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $image = "../assets/images/" . $filename;
        move_uploaded_file($tempname, $image);
    }

    $productsql = "UPDATE `product` SET `name`='$heading',`image`='$filename',`text`='$text' WHERE id = '" . $_GET['product'] . "'";
    if ($conn->query($productsql) === TRUE) {
        // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
        ?>
        <script>
            toastMixin.fire({
                animation: true,
                title: 'product page updated successfully'
            });
            window.setTimeout(function () {
                window.location.href = './index.php?page=update_product&product=<?= $productdata['id'] ?>'
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
        </h5>
        <form enctype="multipart/form-data" action="" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Heading</label>
                <input type="text" name="heading" value="<?= $productdata['name'] ?>" class="form-control"
                    id="validationCustom01" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="validationCustom02"
                    onchange="previewImage(event)">
                <input type="hidden" name="oldimage" value="<?= $productdata['image'] ?>">
            </div>
            <div class="col-md-4">
                <img id="preview" src="../img/<?= $productdata['image'] ?>" alt="Your Uploaded Image Will Appear Here">
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Description</label>
                <textarea name="text" class="tinymce-editor form-control"><?= $productdata['text'] ?></</textarea>
            </div>
            <div class="col-12">
                <input type="submit" name="updateproduct" class="btn btn-primary" value="Update">
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