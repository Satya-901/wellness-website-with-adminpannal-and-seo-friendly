<?php
// $base_url = 'http://' . $_SERVER['HTTP_HOST'];
$base_url = 'http://localhost/workspace/paradise';

session_start();
include_once ('manage/db/conn.php');

// gett the page name
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$page_name = pathinfo(end($parts), PATHINFO_FILENAME);
$title = str_replace("_", ' ', $page_name);

// Fetching website info in a season
$infosql = "SELECT * FROM `website_info`";
$inforesult = $conn->query($infosql);
$info = $inforesult->fetch_array(MYSQLI_ASSOC);
$_SESSION['website_info'] = $info;

// getting keyword and discription
$qry = $conn->query("SELECT * FROM `seo_keyword` WHERE page_name = '$page_name'");
$row = $qry->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/boxicons.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/meanmenu.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/modal-video.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/odometer.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url; ?>/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url; ?>/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url; ?>/css/navigation.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/nice-select.min.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/style.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/responsive.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/theme-dark.css">
    <link rel="stylesheet" href="<?= $base_url; ?>/css/floart-icon.css">
    <link rel="icon" type="image/png" href="<?= $base_url; ?>/images/favicon.png">

    <title>Best Dermatologist & Skin Specialist in Delhi | <?= $_SESSION['website_info']['website_name']; ?></title>
    <meta content="<?= $row['description']; ?>" name="description" />
    <meta content="<?= $row['keyword']; ?>" name="keywords" />

    <!-- <meta name="description" content="Paradise Laser and Skin is home to the Best Dermatologist and Skin Specialist in Delhi. Experience premium skincare services for radiant skin.">
    <meta name="keywords" content="Best Dermatologist & Skin Specialist in Delhi,  best dermatologist & skin specialist near me, dermatologist & skin specialist near me, dermatologist & skin specialist near Delhi, dermatologist skin specialist in delhi">
    <link rel="canonical" href="http://paradiselaserandskin.in//" /> -->
</head>
<?php include ('navbar.php'); ?>