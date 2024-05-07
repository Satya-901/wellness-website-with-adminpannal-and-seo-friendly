<?php include_once ('includes/header.php'); ?>

<!-- video banner -->
<div class="banner-area">
    <video class="w-100" autoplay loop muted>
        <source src="https://paradisewellness.in/assets/video/<?= $_SESSION['website_info']['video']; ?>"
            type="video/mp4">
    </video>
</div>

<!-- what we do  -->
<section class="offer-area ptb-100">
    <div class="offer-shape">
        <img src="<?= $base_url ?>/img/banner/offer-shape1.png" alt="Shape">
    </div>
    <div class="container">
        <div class="section-title">
            <h2>What We Offer</h2>
        </div>
        <div class="offer-slider owl-theme owl-carousel">
            <div class="offer-item">
                <img src="assets/images/darmaroller.png" alt="Acne & scar">
                <div class="inner">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h4>Darmaroller</h4>
                            <a href="dermaroller">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <img src="assets/images/sundar-si-ladki2.png" alt="Photo Rejuvenation">
                <div class="inner">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h4>Photo Rejuvenation</h4>
                            <a href="photo-rejuvenation">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <img src="assets/images/laser-hair.jpg" alt="Hair care">
                <div class="inner">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h4>Laser Hair Reduction</h4>
                            <a href="laser-hair-reduction">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <img src="assets/images/pigmentation.png" alt="Pigmentation">
                <div class="inner">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h4>Pigmentation</h4>
                            <a href="d-pigment-peel">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <img src="assets/images/carban-peel.png" alt="carban-peel.png">
                <div class="inner">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h4>Carbon Peelg</h4>
                            <a href="carbon-peel">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <img src="assets/images/Healthy_lips.png" alt="Healthy_lips.png">
                <div class="inner">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h4>Lip Peel</h4>
                            <a href="lip-peel">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- we are best  -->
<div class="best-area pt-100 pb-70">
    <div class="best-shape">
        <img src="<?= $base_url ?>/img/banner/best-shape1.png" alt="Shape">
    </div>
    <?php
    $visionsql = "SELECT * FROM `vision`";
    $visionresult = $conn->query($visionsql);
    $visiondata = $visionresult->fetch_assoc();
    ?>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="best-img">
                    <img src="<?= $base_url ?>/img/banner/best1.jpg" alt="Best">
                    <img src="<?= $base_url ?>/img/banner/best-bg.png" alt="Shape">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="section-title">
                        <h2>Why We Are The Best</h2>
                    </div>
                    <ul class="accordion">
                        <li>
                            <h3 class="faq-head"><?= $visiondata['heading1'] ?></h3>
                            <div class="faq-content">
                                <p><?= $visiondata['text1'] ?></p>
                            </div>
                        </li>
                        <li>
                            <h3 class="faq-head"><?= $visiondata['heading2'] ?></h3>
                            <div class="faq-content">
                                <p><?= $visiondata['text2'] ?></p>
                            </div>
                        </li>
                        <li>
                            <h3 class="faq-head"><?= $visiondata['heading3'] ?></h3>
                            <div class="faq-content">
                                <p><?= $visiondata['text3'] ?></p>
                            </div>
                        </li>
                        <li>
                            <h3 class="faq-head"><?= $visiondata['heading4'] ?></h3>
                            <div class="faq-content">
                                <p><?= $visiondata['text4'] ?></p>
                            </div>
                        </li>
                    </ul>
                    <a class="common-btn" href="about">Know More About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once ('includes/footer.php'); ?>