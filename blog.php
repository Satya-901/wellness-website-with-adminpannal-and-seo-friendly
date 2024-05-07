<?php include_once ('includes/header.php'); ?>
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
                    <h2><?= $page_name; ?></h2>
                    <ul>
                        <li>
                            <a href="<?= $base_url; ?>">Home</a>
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

<!-- all blogs -->
<section class="blog-area four ptb-100">
    <div class="container">
        <div class="row">
            <?php
            $blogqry = $conn->query("SELECT * FROM `sa_blog` ORDER BY `sa_blog`.`id` ASC");
            while ($blogdata = $blogqry->fetch_assoc()) {
                ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <span><?= date('M d', strtotime($blogdata['date'])); ?></span>
                            <a href="<?= $base_url ?>/blog/<?= $blogdata['slug']; ?>"><img
                                    src="<?= $base_url ?>/img/blog/<?= $blogdata['image']; ?>" alt="Blog"></a>
                        </div>
                        <div class="bottom">
                            <h3><a href="<?= $base_url ?>/blog/<?= $blogdata['slug']; ?>"><?= $blogdata['title']; ?></a>
                            </h3>
                            <p><?= $blogdata['stext']; ?></p>
                            <a class="blog-btn" href="<?= $base_url ?>/blog/<?= $blogdata['slug']; ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<?php include_once ('includes/footer.php'); ?>