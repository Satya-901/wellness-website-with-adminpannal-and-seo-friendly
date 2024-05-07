<style>
    #preview {
        width: 50%;
        height: auto;
        float: right;
    }
</style>

<?php
if (isset($_POST['addBlog'])) {
    $wordCountmsg = "";
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $stext = mysqli_real_escape_string($conn, $_POST['stext']);
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $heading)));
    // to  count the words in this textarea 
    $wordCount = str_word_count($stext);
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $image = "../img/blog/" . $filename;
    move_uploaded_file($tempname, $image);

    if ($wordCount > 100) {
        $wordCountmsg = "<span class='text-danger'>The text area should not exceed 100 words.</span>";
    } else {
        $blogSql = "INSERT INTO `sa_blog`(`title`, `image`, `stext`, `text`, `slug`) VALUES ('$heading','$filename','$stext','$text','$slug')";
        if ($conn->query($blogSql) === TRUE) {
            ?>
            <script>
                toastMixin.fire({
                    animation: true,
                    title: 'Blog Added successfully'
                });
                window.setTimeout(function () {
                    window.location.href = './index.php?page=blog_list'
                }, 3000);
            </script>
            <?php
        } else {
            ?>
            <script>
                toastMixin.fire({
                    title: 'Cannot change information due to some Technical issue. Error: <?= $blogSql ?>',
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
        <h5 class="card-title">Add Blog</h5>
        <form enctype="multipart/form-data" action="" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" name="heading" class="form-control" id="heading" required>
            </div>
            <div class="col-md-4">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept="image/*" name="image" class="form-control" id="image" onchange="previewImage(event)">
            </div>
            <div class="col-md-4">
                <img id="preview" src="" alt="Your Uploaded Image Will Appear Here">
            </div>
            <!-- <div class="col-md-12">
                <label for="slug" class="form-label">Slug</label>
                <input type="hideen" id="slug" class="form-control">
            </div> -->
            <div class="col-md-12">
                <label for="stext" class="form-label">Short Description</label> &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg != "") {
                            echo $wordCountmsg;
                        } else {
                            echo "Sort description Must content 100 Words only (It will be displayed on homepage of your website.)";
                        } ?>
                    </i>
                </Small>
                <textarea name="stext" id="stext" class="form-control" cols="30" rows="3"></textarea>
            </div>
            <div class="col-md-12">
                <label for="text" class="form-label">Description</label>
                <textarea name="text" id="text" class="tinymce-editor form-control"></textarea>
            </div>
            <div class="col-12">
                <input type="submit" name="addBlog" class="btn btn-primary" value="Add Blog">
            </div>
        </form>

    </div>
</div>

<script>

    // const headingInput = document.getElementById('heading');
    // const slugInput = document.getElementById('slug');

    // headingInput.addEventListener('input', () => {
    //     const headingValue = headingInput.value.trim();
    //     const slugValue = headingValue.replace(/\s+/g, '-').toLowerCase();
    //     slugInput.value = slugValue;
    // });

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