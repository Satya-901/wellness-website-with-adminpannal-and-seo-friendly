<?php
$visionsql = "SELECT * FROM `vision`";
$visionresult = $conn->query($visionsql);
$visiondata = $visionresult->fetch_assoc();

if (isset($_POST['updatevision'])) {
    $wordCountmsg1 = "";
    $wordCountmsg2 = "";
    $wordCountmsg3 = "";
    $wordCountmsg4 = "";
    $heading1 = mysqli_real_escape_string($conn, $_POST['heading1']);
    $heading2 = mysqli_real_escape_string($conn, $_POST['heading2']);
    $heading3 = mysqli_real_escape_string($conn, $_POST['heading3']);
    $heading4 = mysqli_real_escape_string($conn, $_POST['heading4']);
    $text1 = mysqli_real_escape_string($conn, $_POST['text1']);
    $text2 = mysqli_real_escape_string($conn, $_POST['text2']);
    $text3 = mysqli_real_escape_string($conn, $_POST['text3']);
    $text1Count = str_word_count($text1);
    $text2Count = str_word_count($text2);
    $text3Count = str_word_count($text3);
    $text4Count = str_word_count($text4);

    if ($text1Count > 50) {
        $wordCountmsg1 = "<span class='text-danger'>The text area should not exceed 50 words.</span>";
    } else {
        if ($text2Count > 50) {
            $wordCountmsg2 = "<span class='text-danger'>The text area should not exceed 50 words.</span>";
        } else {
            if ($text3Count > 50) {
                $wordCountmsg3 = "<span class='text-danger'>The text area should not exceed 50 words.</span>";
            } else {
                $visionsql = "UPDATE `vision` SET `heading1`='$heading1',`text1`='$text1',`heading2`='$heading2',`text2`='$text2',`heading3`='$heading3',`text3`='$text3',`heading4`='$heading4',`text4`='$text4' WHERE id = '1'";
                if ($conn->query($visionsql) === TRUE) {
                    // echo "<script>alert('Data has been updated!');window.location='index.php?page=settings';</script>";
                    ?>
                    <script>
                        toastMixin.fire({
                            animation: true,
                            title: 'vision page updated successfully'
                        });
                        window.setTimeout(function () {
                            window.location.href = 'index.php?page=vision'
                        }, 3000);
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        toastMixin.fire({
                            title: 'Cannot change information due to some Technical issue. Error: <?= $visionsql ?>',
                            icon: 'error'
                        });
                    </script>
                    <?php
                }
            }
        }
    }
}
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Update Vision</h5>

        <!-- Vertical Form -->
        <form action="" method="post" class="row g-3">

            <div class="col-12">
                <label for="inputNanme4" class="form-label">Heading 1</label>
                <input type="text" value="<?= $visiondata['heading1'] ?>" class="form-control" name="heading1"
                    id="inputNanme4" required>
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Description 1</label> &nbsp; &nbsp; &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg1 != "") {
                            echo $wordCountmsg1;
                        } else {
                            echo "Description Must content 20 Words only.";
                        } ?>
                    </i>
                </Small>
                <textarea name="text1" id="text1" class="form-control" cols="30"
                    rows="3"><?= $visiondata['text1'] ?></textarea>
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Heading 2</label>
                <input type="text" class="form-control" value="<?= $visiondata['heading2'] ?>" name="heading2"
                    id="inputNanme4" required>
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Description 2</label> &nbsp; &nbsp; &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg2 != "") {
                            echo $wordCountmsg2;
                        } else {
                            echo "Description Must content 20 Words only.";
                        } ?>
                    </i>
                </Small>
                <textarea name="text2" id="text2" class="form-control" cols="30"
                    rows="3"><?= $visiondata['text2'] ?></textarea>
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Heading 3</label>
                <input type="text" class="form-control" value="<?= $visiondata['heading3'] ?>" name="heading3"
                    id="inputNanme4" required>
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Description 3</label> &nbsp; &nbsp; &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg3 != "") {
                            echo $wordCountmsg3;
                        } else {
                            echo "Description Must content 20 Words only.";
                        } ?>
                    </i>
                </Small>
                <textarea name="text3" id="text3" class="form-control" cols="30"
                    rows="3"><?= $visiondata['text3'] ?></textarea>
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Heading 4</label>
                <input type="text" class="form-control" value="<?= $visiondata['heading4'] ?>" name="heading4"
                    id="inputNanme4" required>
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Description 4</label> &nbsp; &nbsp; &nbsp;
                <Small>
                    <i>
                        <?php if ($wordCountmsg4 != "") {
                            echo $wordCountmsg4;
                        } else {
                            echo "Description Must content 20 Words only.";
                        } ?>
                    </i>
                </Small>
                <textarea name="text4" id="text4" class="form-control" cols="30"
                    rows="3"><?= $visiondata['text4'] ?></textarea>
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary" name="updatevision" value="Update">
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>