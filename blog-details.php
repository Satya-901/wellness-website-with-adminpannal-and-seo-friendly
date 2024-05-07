<?php
include_once ('includes/header.php');
$blogSql = "SELECT * FROM `sa_blog` WHERE slug = '" . $_GET['slug'] . "'";
$blogresult = $conn->query($blogSql);
$blogdata = $blogresult->fetch_assoc();
?>

<!-- title -->
<div class="page-title-wrap">
    <div class="page-title-area title-img-one"
        style="background-image: url(<?= $base_url; ?>/img/banner/cover-banner.png);">
        <div class="title-shape">
            <img src="<?= $base_url ?>/img/banner/title-shape.png" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="title-content">
                    <h2><?= $blogdata['title']; ?></h2>
                    <ul>
                        <li>
                            <a href="<?= $base_url; ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= $base_url; ?>/blog">Blog</a>
                        </li>
                        <li>
                            <span><?= $page_name; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-details-area ptb-100">
    <div class="container">
        <div class="details-head">
            <h2><?= $blogdata['title']; ?></h2>
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="left">
                        <ul>
                            <li>
                                <a href="#">Admin</a>
                            </li>
                            <li>🕐 <?= date('d M Y', strtotime($blogdata['date'])); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="<?= $base_url; ?>/img/blog/<?= $blogdata['image']; ?>" alt="Details">
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="articles widget-item">
                        <h3>Recent Articles</h3>
                        <p>Nothig to show</p>
                        <?php
                        $blogqry1 = $conn->query("SELECT * FROM `sa_blog` ORDER BY `sa_blog`.`id` ASC LIMIT 3");
                        while ($blogdata1 = $blogqry1->fetch_assoc()) {
                            ?>
                            <div class="inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="<?= $base_url; ?>/img/blog/<?= $blogdata1['image']; ?>" alt="Details">
                                    </li>
                                    <li>
                                        <span><?= date('d M Y', strtotime($blogdata1['date'])); ?></span>
                                        <a
                                            href="<?= $base_url ?>/blog/<?= $blogdata['slug']; ?>"><?= $blogdata1['title']; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="categories widget-item">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Hair
                                    <!-- <span>05</span> -->
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Face
                                    <!-- <span>06</span> -->
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Wellness
                                    <!-- <span>11</span> -->
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    General
                                    <!-- <span>15</span> -->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">

                <?= $blogdata['text']; ?>

                <div class="details-tag">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="left">
                                <ul>
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-pinterest-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="right">
                                <ul>
                                    <li>
                                        <span>Tags:</span>
                                    </li>
                                    <li>
                                        <a href="#">Hair</a>
                                    </li>
                                    <li>
                                        <a href="#">Wellness</a>
                                    </li>
                                    <li>
                                        <a href="#">Face</a>
                                    </li>
                                    <li>
                                        <a href="#">General</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="details-comment">
                    <h3>Comments <span>(02)</span></h3>
                        <ul>
                            <li>
                                <img src="assets/images/blog/comment1.jpg" alt="Details">
                                <h4>Tom Henry</h4>
                                <span>12th April, 2020</span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonu my eirmod
                                    tempor invidunt ut labore et dolore magna</p>
                                <a href="#">Reply</a>
                            </li>
                            <li>
                                <img src="assets/images/blog/comment2.jpg" alt="Details">
                                <h4>Angela Hopper</h4>
                                <span>13th April, 2020</span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonu my eirmod
                                    tempor invidunt ut labore et dolore magna</p>
                                <a href="#">Reply</a>
                            </li>
                        </ul>
                </div>
                <div class="details-form">
                    <h3>Leave A Comment</h3>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea id="your-comment" rows="8" class="form-control"
                                        placeholder="Your Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn common-btn two">Post A Comment</button>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php include_once ('includes/footer.php'); ?>