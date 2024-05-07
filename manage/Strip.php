<?php
$stripsql = "SELECT * FROM `strip`";
$stripresult = $conn->query($stripsql);
$stripdata = $stripresult->fetch_assoc();

if (isset($_POST['updatestrip'])) {
    $heading1 = mysqli_real_escape_string($conn, $_POST['heading1']);
    $heading2 = mysqli_real_escape_string($conn, $_POST['heading2']);
    $heading3 = mysqli_real_escape_string($conn, $_POST['heading3']);
    $heading4 = mysqli_real_escape_string($conn, $_POST['heading4']);
    $text1 = mysqli_real_escape_string($conn, $_POST['text1']);
    $text2 = mysqli_real_escape_string($conn, $_POST['text2']);
    $text3 = mysqli_real_escape_string($conn, $_POST['text3']);
    $text4 = mysqli_real_escape_string($conn, $_POST['text4']);


    $stripsql = "UPDATE `strip` SET `heading1`='$heading1',`text1`='$text1',`heading2`='$heading2',`text2`='$text2',`heading3`='$heading3',`text3`='$text3',`heading4`='$heading4',`text4`='$text4' WHERE id = '1'";
    if ($conn->query($stripsql) === TRUE) {
        // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
        ?>
        <script>
            toastMixin.fire({
                animation: true,
                title: 'strip page updated successfully'
            });
            window.setTimeout(function () {
                window.location.href = 'index.php?page=strip'
            }, 3000);
        </script>
        <?php
    } else {
        ?>
        <script>
            toastMixin.fire({
                title: 'Cannot change information due to some Technical issue. Error: <?= $stripsql ?>',
                icon: 'error'
            });
        </script>
        <?php
    }
}
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Update strip</h5>

        <!-- Vertical Form -->
        <form action="" method="post" class="row g-3">

            <div class="col-6">
                <label for="inputNanme4" class="form-label">Heading 1</label>
                <input type="text" value="<?= $stripdata['heading1'] ?>" class="form-control" name="heading1"
                    id="inputNanme4" required>
            </div>
            <div class="col-6">
                <label for="inputEmail4" class="form-label">strip 1</label>
                <input type="number" name="text1" id="text1" class="form-control" value="<?= $stripdata['text1'] ?>">
            </div>

            <div class="col-6">
                <label for="inputPassword4" class="form-label">Heading 2</label>
                <input type="text" class="form-control" value="<?= $stripdata['heading2'] ?>" name="heading2"
                    id="inputNanme4" required>
            </div>
            <div class="col-6">
                <label for="inputEmail4" class="form-label">strip 2</label>
                <input type="number" name="text2" id="text2" class="form-control" value="<?= $stripdata['text2'] ?>">
            </div>

            <div class="col-6">
                <label for="inputPassword4" class="form-label">Heading 3</label>
                <input type="text" class="form-control" value="<?= $stripdata['heading3'] ?>" name="heading3"
                    id="inputNanme4" required>
            </div>
            <div class="col-6">
                <label for="inputEmail4" class="form-label">strip 3</label>
                <input type="number" name="text3" id="text3" class="form-control" value="<?= $stripdata['text3'] ?>">
            </div>

            <div class="col-6">
                <label for="inputPassword4" class="form-label">Heading 4</label>
                <input type="text" class="form-control" value="<?= $stripdata['heading4'] ?>" name="heading4"
                    id="inputNanme4" required>
            </div>
            <div class="col-6">
                <label for="inputEmail4" class="form-label">strip 4</label>
                <input type="number" name="text4" id="text4" class="form-control" value="<?= $stripdata['text4'] ?>">
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" name="updatestrip" value="Update">
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>