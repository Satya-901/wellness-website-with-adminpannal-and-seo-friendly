<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add testimonial</h5>
                <?php
                if (isset($_POST['submit'])) {
                    $wordCountmsg = "";
                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                    $stext = mysqli_real_escape_string($conn, $_POST['stext']);
                    // to  count the words in this textarea 
                    $wordCount = str_word_count($stext);

                    $filename = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $image = "../assets/img/user/" . $filename;
                    move_uploaded_file($tempname, $image);

                    if ($wordCount > 250) {
                        $wordCountmsg = "<span class='text-danger'>The text area should not exceed 250 words.</span>";
                    } else {
                        $aboutsql = "INSERT INTO `testimonial`(`name`, `image`, `text`) VALUES ('$name','$filename','$stext')";
                        if ($conn->query($aboutsql) === TRUE) {
                            ?>
                            <script>
                                toastMixin.fire({
                                    animation: true,
                                    title: 'Testimonial has been Added successfully.'
                                });
                                window.setTimeout(function () {
                                    window.location.href = 'index.php?page=testimonial'
                                }, 3000);
                            </script>
                            <?php
                        } else {
                            ?>
                            <script>
                                toastMixin.fire({
                                    title: 'Cannot add Services due to some Technical issue. Error: <?= $aboutsql ?>',
                                    icon: 'error'
                                });
                            </script>
                            <?php
                        }
                    }
                }
                ?>
                <!-- Vertical Form -->
                <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4" required>
                    </div>
                    <!-- <div class="col-12">
                        <label for="inputEmail4" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="inputEmail4" required>
                    </div> -->
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Sort description</label> &nbsp;
                        <Small>
                            <i>
                                <?php if ($wordCountmsg != "") {
                                    echo $wordCountmsg;
                                } else {
                                    echo "Sort description Must content 250 Words only.";
                                } ?>
                            </i>
                        </Small>
                        <textarea class="form-control" name="stext" id="stext" cols="30" rows="3" required></textarea>
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
                <h5 class="card-title">All Testimonial</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th> Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $qry = $conn->query("SELECT * FROM `testimonial`");
                        while ($row = $qry->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?= $i++ ?>
                                </th>
                                <td>
                                    <?php echo ucwords($row['name']) ?>
                                </td>
                                <td>
                                    <?php echo $row['text'] ?>
                                </td>
                                <td>
                                    <a href="./index.php?page=testimonial&id=<?= $row['id'] ?>"
                                        class="btn btn-danger mb-2"><i class="bi bi-trash2-fill"></i></a>
                                    <a href="./index.php?page=update_testimonial&id=<?= $row['id'] ?>"
                                        class="btn btn-warning"><i class="bi bi-wrench"></i></i></a>
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
</div>
<?php
$id = $_GET['id'];
if (isset($id)) {
    $dquery = "DELETE FROM `testimonial` WHERE `testimonial`.`id` = '$id'";
    $run = mysqli_query($conn, $dquery);
    if ($run) {
        ?>
        <script>
            window.open('./index.php?page=testimonial', '_self');
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