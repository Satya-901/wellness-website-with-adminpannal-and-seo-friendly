<?php include_once ('includes/header.php'); ?>

<!-- video banner -->
<div class="banner-area">
    <video class="w-100" autoplay loop muted>
        <source src="<?= $base_url ?>/video/<?= $_SESSION['website_info']['video']; ?>" type="video/mp4">
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
                <img src="<?= $base_url ?>/img/darmaroller.png" alt="Acne & scar">
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
                <img src="<?= $base_url ?>/img/sundar-si-ladki2.png" alt="Photo Rejuvenation">
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
                <img src="<?= $base_url ?>/img/laser-hair.jpg" alt="Hair care">
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
                <img src="<?= $base_url ?>/img/pigmentation.png" alt="Pigmentation">
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
                <img src="<?= $base_url ?>/img/carban-peel.png" alt="carban-peel.png">
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
                <img src="<?= $base_url ?>/img/Healthy_lips.png" alt="Healthy_lips.png">
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
                    <a class="common-btn" href="<?= $base_url ?>/about">Know More About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our servises -->
<section class="services-area three ptb-100"
    style="background-image: url(<?= $base_url ?>/img/banner/services-bg.jpg);">
    <div class="services-shape">
        <img src="<?= $base_url ?>/img/banner/services-shape1.png" alt="Shape">
    </div>
    <div class="container">
        <div class="section-title">
            <h2>Our services</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="services-item">
                    <div class="inner">
                        <img src="<?= $base_url ?>/img/skincare.png" alt="Services">
                        <h3>
                            <a href="under-eye-peel">Skin Treatment</a>
                        </h3>
                        <p>Paradise Wellness offers personalized, holistic skincare to empower clients to achieve
                            healthy, radiant skin, reflecting overall well-being through tailored care.</p>
                        <a class="services-btn" href="under-eye-peel">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="services-item">
                    <div class="inner">
                        <img src="<?= $base_url ?>/img/hair.png" alt="Services">
                        <h3>
                            <a href="mesotherapy">Hair Treatment</a>
                        </h3>
                        <p>At Paradise Laser and Skin, we understand the importance of vibrant hair for well-being
                            and confidence, offering personalized care to achieve hair wellness.</p>
                        <a class="services-btn" href="mesotherapy">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- influwensers -->
<div class="reviews-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="section-title">
                    <h2>What Influencers Say</h2>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="reviews-shape">
                        <img src="<?= $base_url ?>/img/banner/reviews-shape1.png" alt="Shape">
                        <img src="<?= $base_url ?>/img/banner/reviews-shape2.png" alt="Shape">
                    </div>
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="review-content">
                            <i class="bx bxs-quote-alt-right icon"></i>
                            <p>As an artist, I'm all about chasing the light, but Paradise Wellness was the
                                spotlight I truly needed! ✨ Forget dull studio days – this is a skin and hair
                                sanctuary where relaxation meets serious results</p>
                            <h3>4.8</h3>
                            <ul>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="review-content">
                            <i class="bx bxs-quote-alt-right icon"></i>
                            <p>As a digital creator, discovers Paradise Wellness is more than just a Dermatology
                                Clinic, it's a blissful sanctuary for transformative skin & hair rejuvenation.
                                Carbon facial & body laser treatments shed stress, leaving radiant skin & silky
                                smooth body.</p>
                            <h3>4.5</h3>
                            <ul>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="review-content">
                            <i class="bx bxs-quote-alt-right icon"></i>
                            <p>From Spotlight to Sanctuary: Paradise Wellness Redefined My Glow ✨As an actor, my
                                face is my canvas, but lately it felt like a worn-out paintbrush. So, I stepped off
                                set and into Paradise Wellness, hoping for a touch-up. What I found was a complete
                                transformation!</p>
                            <h3>4.6</h3>
                            <ul>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                                <li>
                                    <i class="bx bxs-star checked"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <div class="reviews-img">
                            <img src="<?= $base_url ?>/img/influencers/himanshu-gandhi.png" alt="himanshu-gandhi.png">
                            <h3>Himanshu Gandhi</h3>
                            <span>Artist I @ihimanshugandhi</span>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <div class="reviews-img">
                            <img src="<?= $base_url ?>/img/influencers/sana_ghauri.jpg" alt="Reviews">
                            <h3>Sana Ghauri</h3>
                            <span>Digital creator | @sana_ghauri</span>
                        </div>
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="reviews-img">
                            <img src="<?= $base_url ?>/img/influencers/lakshay-chaudhary.jpg"
                                alt="lakshay-chaudhary.jpg">
                            <h3>Lakshay Chaudhary</h3>
                            <span>ilakshofficial</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- adds -->
<section class="get-area">
    <div class="container">
        <div class="get-content">
            <div class="get-shape">
                <img src="<?= $base_url ?>/img/banner/get-shape1.png" alt="Shape">
                <img src="<?= $base_url ?>/img/banner/get-shape2.png" alt="Shape">
            </div>
            <div class="section-title">
                <h2>It Needs Professional Hands To Get Rid Of Your Daily Stress Off</h2>
            </div>
            <a class="common-btn" href="appointment">Make An Appointment</a>
        </div>
    </div>
</section>

<!-- srip -->
<div class="counter-area pt-100 pb-70">
    <div class="container">
        <?php
        $stripsql = "SELECT * FROM `strip`";
        $stripresult = $conn->query($stripsql);
        $stripdata = $stripresult->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <img src="<?= $base_url ?>/img/banner/counter-shape.png" alt="Shape">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="<?= $stripdata['text1'] ?>">
                            <div class="odometer-inside">
                                <span class="odometer-digit">
                                    <span class="odometer-digit-spacer">8</span>
                                    <span class="odometer-digit-inner">
                                        <span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner">
                                                <span class="odometer-value">5</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span class="odometer-digit">
                                    <span class="odometer-digit-spacer">8</span>
                                    <span class="odometer-digit-inner">
                                        <span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner">
                                                <span class="odometer-value">0</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span class="odometer-digit">
                                    <span class="odometer-digit-spacer">8</span>
                                    <span class="odometer-digit-inner">
                                        <span class="odometer-ribbon">
                                            <span class="odometer-ribbon-inner">
                                                <span class="odometer-value">0</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </span>
                        <span class="target">+</span>
                    </h3>
                    <p><?= $stripdata['heading1'] ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <img src="<?= $base_url ?>/img/banner/counter-shape.png" alt="Shape">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="<?= $stripdata['text2'] ?>">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">1</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">5</span></span></span></span></span>
                            </div>
                        </span>
                        <span class="target">+</span>
                    </h3>
                    <p><?= $stripdata['heading2'] ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <img src="<?= $base_url ?>/img/banner/counter-shape.png" alt="Shape">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="<?= $stripdata['text3'] ?>">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">2</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">5</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span>
                            </div>
                        </span>
                        <span class="target">+</span>
                    </h3>
                    <p><?= $stripdata['heading3'] ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter-item">
                    <img src="<?= $base_url ?>/img/banner/counter-shape.png" alt="Shape">
                    <h3>
                        <span class="odometer odometer-auto-theme" data-count="<?= $stripdata['text4'] ?>">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">1</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span>
                            </div>
                        </span>
                        <span class="target">+</span>
                    </h3>
                    <p><?= $stripdata['heading4'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Specialist -->
<section class="services-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Meet Our Top Specialist</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="services-item">
                    <div class="inner">
                        <img src="<?= $base_url ?>/img/team/surabhi.png" alt="Services">
                        <h3>
                            <a href="">Dr. Surabhi Sharma</a>
                        </h3>
                        <span style="font-weight: bold; font-size: 15px; color: #536b5c;">Dermatologist |
                            Venerologist | Leprosy Specialist</span>
                        <p>Meet Dr Surbhi Sharma an accomplished dermatologist with a compelling background at
                            paradise wellness centre, holding an MBBS and MD with a gold medal in dermatology
                            venerology and leprosy from Vardhman Mahavir medical college and Safdarjung hospital.
                            She brings four years of expertise encompassing clinical and cosmetic dermatology
                            dermatosurgery and dermatopathology.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="services-item">
                    <div class="inner">
                        <img src="<?= $base_url ?>/img/team/saman.jpg" alt="Services">
                        <h3>
                            <a href="">Dr. Saman Ahmad</a>
                        </h3>
                        <span style="font-weight: bold; font-size: 15px; color: #536b5c;">Aesthetic Physician |
                            Dermatologist</span>
                        <p>Dr Saman Ahmed a dermatologist at paradise wellness is more than just a skincare expert.
                            With a passion for innovative treatments and a keen eye for detail Dr Ahmed transforms
                            skin with precision and care his personalized approach ensures clients achieve radiant
                            healthy skin that reflects their inner beauty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about -->
<section class="skin-area pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="skin-content">
                    <div class="section-title">
                        <h2>Hair & Skin Wellness</h2>
                        <p>At Paradise Laser and Skin, our approach to hair wellness is rooted in a profound
                            understanding that healthy, vibrant hair contributes significantly to one's overall
                            sense of well-being and self-confidence. We are dedicated to providing comprehensive,
                            individualized care that addresses the unique needs of our clients and helps them
                            achieve their hair wellness goals.</p>
                        <p>Hair wellness at paradise laser and skin is guided by the belief that healthy vibrant
                            hair enhances overall well being and confidence. We offer tailored care to meet each
                            client’s needs ensuring personalized solutions and helping them reach their hair
                            wellness objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="skin-img">
                    <img src="<?= $base_url ?>/img/treatment-room.JPG" alt="Skin">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog-area pt-100 pb-70">
    <div class="blog-shape">
        <img src="assets/images/banner/blog-shape.png" alt="Shape">
    </div>
    <div class="section-title">
        <h2>Some Latest Blog</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $blogqry = $conn->query("SELECT * FROM `sa_blog` ORDER BY `sa_blog`.`id` ASC LIMIT 3");
            while ($blogdata = $blogqry->fetch_assoc()) {
                ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <!-- <span>16th Nov</span> -->
                            <a href="winter-hair">
                                <img src="<?= $base_url ?>/img/blog/<?= $blogdata['image']; ?>"
                                    alt="<?= $blogdata['image']; ?>">
                            </a>
                        </div>
                        <div class="bottom">
                            <h3><a href="winter-hair"><?= $blogdata['title']; ?></a></h3>
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