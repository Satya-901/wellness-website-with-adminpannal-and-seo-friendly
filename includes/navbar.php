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
                                            <li class="nav-item"><a href="under-eye-peel" class="nav-link">Under Eye
                                                    Peel</a></li>
                                            <li class="nav-item"><a href="lip-peel" class="nav-link">Lip Peel </a></li>
                                            <li class="nav-item"><a href="eye-toning" class="nav-link">Eye Toning</a>
                                            </li>
                                            <li class="nav-item"><a href="crows-feet" class="nav-link">Crows Feet</a>
                                            </li>
                                            <li class="nav-item"><a href="lip-toning" class="nav-link">Lip Toning </a>
                                            </li>
                                            <li class="nav-item"><a href="eye-filler" class="nav-link">Eye Filler</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Specialised Facials <i
                                                class="bx bx-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="glow-facial" class="nav-link">Glow Facial</a>
                                            </li>
                                            <li class="nav-item"><a href="paradise-facial" class="nav-link">Paradise
                                                    Facial</a></li>
                                            <li class="nav-item"><a href="hydra-facial-basic" class="nav-link">Hydra
                                                    Facial
                                                    basic</a></li>
                                            <li class="nav-item"><a href="hydra-facial-deluxe" class="nav-link">Hydra
                                                    Facial
                                                    Deluxe</a></li>
                                            <!-- <li class="nav-item"><a href="hydra-facial-platinum" class="nav-link">Hydra
                                                Facial Platinum</a></li> -->
                                            <li class="nav-item"><a href="glow-infusion" class="nav-link">Glow
                                                    Infusion</a>
                                            </li>
                                            <li class="nav-item"><a href="lasertoning-qswitch" class="nav-link">Laser
                                                    Toning Qswitch</a></li>
                                            <li class="nav-item"><a href="fusion-peel" class="nav-link">Fusion Peel</a>
                                            </li>
                                            <li class="nav-item"><a href="fusionpeel-pro" class="nav-link">Fusionpeel
                                                    Pro</a></li>
                                            <li class="nav-item"><a href="d-pigment-peel" class="nav-link">D Pigment
                                                    Peel</a></li>
                                            <!-- <li class="nav-item"><a href="d-pigment-peel" class="nav-link">D Pigment Peel</a></li> -->
                                            <li class="nav-item"><a href="cosmelan-p" class="nav-link">Cosmelan P</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Anti-aging / aging <i
                                                class="bx bx-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="carbon-peel" class="nav-link">Carbon Peel</a>
                                            </li>
                                            <li class="nav-item"><a href="laser-toning" class="nav-link">Laser
                                                    Toning</a>
                                            </li>
                                            <li class="nav-item"><a href="dermaroller" class="nav-link">Dermaroller </a>
                                            </li>
                                            <li class="nav-item"><a href="photo-rejuvenation" class="nav-link">Photo
                                                    Rejuvenation</a></li>
                                            <li class="nav-item"><a href="prp-collagen" class="nav-link">PRP
                                                    (Collagen)</a>
                                            </li>
                                            <li class="nav-item"><a href="vampire-facial" class="nav-link">Vampire
                                                    Facial</a></li>
                                            <li class="nav-item"><a href="botox" class="nav-link">Botox</a></li>
                                            <li class="nav-item"><a href="clear-lift" class="nav-link">Clear Lift</a>
                                            </li>
                                            <li class="nav-item"><a href="microneedling"
                                                    class="nav-link">Microneedling</a>
                                            </li>
                                            <li class="nav-item"><a href="collagen-induction" class="nav-link">Collagen
                                                    Induction Therapy</a></li>
                                            <li class="nav-item"><a href="profhilo" class="nav-link">Profhilo</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">HAIR TREATMENT <i
                                        class="bx bx-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="mesotherapy" class="nav-link">Mesotherapy</a></li>
                                    <li class="nav-item"><a href="kenacort-injections" class="nav-link">Kenacort
                                            Injections
                                        </a></li>
                                    <li class="nav-item"><a href="laser-hair-reduction" class="nav-link">Laser Hair
                                            Reduction </a></li>
                                    <li class="nav-item"><a href="hair-prp-growth-factor-prp" class="nav-link">Growth
                                            Factor
                                            PRP </a></li>
                                    <li class="nav-item"><a href="hydrafacial-keravive" class="nav-link">Keravive </a>
                                    </li>
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