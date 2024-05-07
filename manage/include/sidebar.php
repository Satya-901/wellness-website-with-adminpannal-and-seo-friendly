<?php
ini_set('display_errors', 0);
$current_page = $_GET['page'];
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'home') {
                echo 'collapsed';
            } ?>" href="index.php?page=home">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li>


        <li class="nav-heading">Website</li>

        <!-- About -->
        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'about' or $current_page != 'vision') {
                echo 'collapsed';
            } ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse <?php if ($current_page == 'about' || $current_page == 'vision' || $current_page == 'Strip') {
                echo 'show';
            } ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a <?php if ($current_page == 'about') {
                        echo 'class="active"';
                    } ?> href="index.php?page=about">
                        <i class="bi bi-circle"></i><span>About</span>
                    </a>
                </li>

                <li>
                    <a <?php if ($current_page == 'vision') {
                        echo 'class="active"';
                    } ?> href="index.php?page=vision">
                        <i class="bi bi-circle"></i><span>Vision</span>
                    </a>
                </li>
                <li>
                    <a <?php if ($current_page == 'Strip') {
                        echo 'class="active"';
                    } ?> href="index.php?page=Strip">
                        <i class="bi bi-circle"></i><span>Strip</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- services -->
        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'add_services' or $current_page != 'update_services') {
                echo 'collapsed';
            } ?>" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-briefcase"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="services-nav" class="nav-content collapse <?php if ($current_page == 'add_services' || $current_page == 'update_services') {
                echo 'show';
            } ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a <?php if ($current_page == 'add_services') {
                        echo 'class="active"';
                    } ?>   href="index.php?page=add_services">
                        <i class="bi bi-circle"></i><span>Add Services</span>
                    </a>
                </li>
                <?php
                $qry = $conn->query("SELECT * FROM `services`");
                while ($row = $qry->fetch_assoc()) {
                    ?>
                    <li>
                        <a <?php if ($current_page == 'update_services') {
                            echo 'class="active"';
                        } ?> href="./index.php?page=update_services&service=<?= $row['id'] ?>">
                            <i class="bi bi-circle"></i><span>
                                <?= ucwords($row['service']) ?>
                            </span>
                        </a>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </li>

        <!-- Blog -->
        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'add_blog' or $current_page != 'blog_list') {
                echo 'collapsed';
            } ?>" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-substack"></i></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blog-nav" class="nav-content collapse <?php if ($current_page == 'add_blog' || $current_page == 'blog_list') {
                echo 'show';
            } ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a <?php if ($current_page == 'add_blog') {
                        echo 'class="active"';
                    } ?> href="index.php?page=add_blog">
                        <i class="bi bi-circle"></i><span>Add Blog</span>
                    </a>
                </li>

                <li>
                    <a <?php if ($current_page == 'blog_list') {
                        echo 'class="active"';
                    } ?> href="index.php?page=blog_list">
                        <i class="bi bi-circle"></i><span>Blog List</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'testimonial') {
                echo 'collapsed';
            } ?>" href="index.php?page=testimonial">
                <i class="bi bi-chat"></i>
                <span>Testimonials</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'gallery') {
                echo 'collapsed';
            } ?>" href="index.php?page=gallery">
                <i class="bi bi-card-image"></i>
                <span>gallery</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'brochure') {
                echo 'collapsed';
            } ?>" href="index.php?page=brochure">
                <i class="bi bi-file-earmark"></i>
                <span>Brochure</span>
            </a>
        </li>

        <li class="nav-heading">Authorization</li>

        <li class="nav-item">
            <a class="nav-link <?php if ($current_page != 'website_setting') {
                echo 'collapsed';
            } ?>" href="index.php?page=website_setting">
                <i class="bi bi-gear"></i>
                <span>Website setting</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign out</span>
            </a>
        </li>

    </ul>

</aside>