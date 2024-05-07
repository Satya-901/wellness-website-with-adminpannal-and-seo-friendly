<?php
$brochuresql = "SELECT * FROM `brochure` WHERE id = '1'";
$brochureresult = $conn->query($brochuresql);
$brochuredata = $brochureresult->fetch_assoc();
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Brochure<span class="float-end"><button type="button" class="btn btn-primary btn-sm"
                    data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Brochure</button></span> </h5>

        <iframe src="..\brochure\<?= $brochuredata['pdf'] ?>" style="width:100%; height:450px;"
            frameborder="0"></iframe>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {

    if (isset($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
        // yaha sara form handal karna hai 

        $oldPdfFile = mysqli_real_escape_string($conn, $_POST['oldPdfFile']);
        $pdfFileName1 = $_FILES['pdfFile']['name'];

        if ($pdfFileName1 == "") {
            $pdfFileName = $oldPdfFile;
        } else {
            //image upload to my sql server using php.
            $pdfFileName = $_FILES['pdfFile']['name'];
            $pdfFileTmp = $_FILES['pdfFile']['tmp_name'];
            $pdfPath = "../brochure/" . $pdfFileName;
            move_uploaded_file($pdfFileTmp, $pdfPath);
        }

        $updatebrochuresql = "UPDATE `brochure` SET `pdf` = '$pdfFileName' WHERE `brochure`.`id` = 1;";
        if ($conn->query($updatebrochuresql) === TRUE) {
            ?>
            <script>
                toastMixin.fire({
                    animation: true,
                    title: 'PDF file uploaded successfully!'
                });
                window.setTimeout(function () {
                    window.location.href = 'index.php?page=brochure'
                }, 3000);
            </script>
            <?php
        } else {
            ?>
            <script>
                toastMixin.fire({
                    title: 'Error uploading PDF file.. Error: <?= $updatebrochuresql ?>',
                    icon: 'error'
                });
            </script>
            <?php
        }


    } else {
        ?>
        <script>
            toastMixin.fire({
                title: 'Please select a PDF file.',
                icon: 'error'
            });
            window.setTimeout(function () {
                window.location.href = 'index.php?page=brochure'
            }, 3000);
        </script>
        <?php
    }
}
?>
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New brochure</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="post" enctype="multipart/form-data" class="row g-3">

                    <div class="col-12">
                        <label class="form-label" for="pdfFile">Select PDF file:</label>
                        <input type="file" class="form-control" name="pdfFile" id="pdfFile" accept=".pdf">
                        <input type="text" name="oldPdfFile" id="oldPdfFile" value="<?= $brochuredata['pdf'] ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary" value="Upload">
            </div>
            </form>
        </div>
    </div>
</div>