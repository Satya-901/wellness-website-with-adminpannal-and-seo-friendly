<?php
include_once('include/head.php');
if (!isset($_SESSION['loggedin_user'])) {
    header('Location: login.php');
    exit;
}
?>

<body>
    <?php include_once('include/header.php'); ?>

    <?php include_once('include/sidebar.php'); ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>
                <?php echo $title ?>
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">
                        <?php echo $title ?>
                    </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            if (!file_exists($page . ".php")) {
                header('location:404.html');
            } else {
                include $page . '.php';
            }
            ?>
        </section>

    </main><!-- End #main -->
    <?php include_once('include/footer.php'); ?>
</body>

</html>