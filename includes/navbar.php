<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="loading">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-3 col-lg-3">
                    <div class="left">
                        <ul>
                            <li><a href="<?= $_SESSION['website_info']['fb_link']; ?>" target="_blank"><i
                                        class="bx bxl-facebook"></i></a></li>
                            <li><a href="<?= $_SESSION['website_info']['tw_link']; ?>" target="_blank"><i
                                        class="bx bxl-twitter"></i></a></li>
                            <li><a href="<?= $_SESSION['website_info']['ig_link']; ?>" target="_blank"><i
                                        class="bx bxl-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/@paradisewellnessofficial" target="_blank"><i
                                        class="bx bxl-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <div class="right">
                        <ul>
                            <li>
                                <i class="bx bx-mail-send"></i>
                                <span>Mail Us:</span>
                                <a
                                    href="mailto:<?= $_SESSION['website_info']['email1']; ?>"><?= $_SESSION['website_info']['email1']; ?></a>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <span>Call Now:</span>
                                <a
                                    href="tel:<?= $_SESSION['website_info']['contact1']; ?>"><?= $_SESSION['website_info']['contact1']; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="./" class="logo">
                <img src="<?= $base_url ?>/img/<?= $_SESSION['website_info']['logo']; ?>" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="./">
                        <img style="width: 34%;" src="<?= $base_url ?>/img/<?= $_SESSION['website_info']['logo']; ?>"
                            alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="<?= $base_url ?>" class="nav-link">HOME</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= $base_url ?>/about" class="nav-link">ABOUT</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">SKIN TREATMENT <i
                                        class="bx bx-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Eye and lip treatment <i
                                                class="bx bx-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            $qry = $conn->query("SELECT * FROM `services` WHERE category_id = '1'");
                                            while ($row = $qry->fetch_assoc()) {
                                                echo '<li class="nav-item"><a href="' . $base_url . '/services/' . $row['slug'] . '" class="nav-link">' . $row['service'] . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Specialised Facials <i
                                                class="bx bx-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            $qry = $conn->query("SELECT * FROM `services` WHERE category_id = '2'");
                                            while ($row = $qry->fetch_assoc()) {
                                                echo '<li class="nav-item"><a href="' . $base_url . '/services/' . $row['slug'] . '" class="nav-link">' . $row['service'] . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Anti-aging / aging <i
                                                class="bx bx-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            $qry = $conn->query("SELECT * FROM `services` WHERE category_id = '3'");
                                            while ($row = $qry->fetch_assoc()) {
                                                echo '<li class="nav-item"><a href="' . $base_url . '/services/' . $row['slug'] . '" class="nav-link">' . $row['service'] . '</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">HAIR TREATMENT <i
                                        class="bx bx-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $qry = $conn->query("SELECT * FROM `services` WHERE category_id = '4'");
                                    while ($row = $qry->fetch_assoc()) {
                                        echo '<li class="nav-item"><a href="' . $base_url . '/services/' . $row['slug'] . '" class="nav-link">' . $row['service'] . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?= $base_url ?>/blog" class="nav-link">BLOG</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= $base_url ?>/testimonials" class="nav-link">TESTIMONIALS</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="common-btn nav-btn" href="<?= $base_url ?>/appointment">Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>