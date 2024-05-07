<?php
include_once ('includes/header.php');

$servicesql = "SELECT * FROM `services` WHERE slug = '" . $_GET['name'] . "'";
$serviceresult = $conn->query($servicesql);
$servicedata = $serviceresult->fetch_assoc();
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

<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <?= $servicedata['text'] ?>
    </div>
</div>

<?php include_once ('includes/footer.php'); ?>