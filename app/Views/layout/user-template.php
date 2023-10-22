<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | 2 | Alpins | Mountain And Trekking Template</title>
    <meta name="description" content="">
    <script src="<?= base_url(); ?>/scripts/user/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/main.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/glide.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/content-box.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/media-box.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/contact-form.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/user/main.css">
    <link rel="icon" href="<?= base_url(); ?>/images/user/favicon.png">
    <!-- render css -->
    <?= self::renderSection('css');?>
</head>

<body class="page-main">
    <div id="preloader"></div>

    <!-- include navbar -->
    <?= self::include("layout/user-navbar") ?>
    <!-- render content -->
    <?= self::renderSection('content');?>

    <!-- include footer -->
    <?= self::include("layout/user-footer") ?>
    <link rel="stylesheet" href="<?= base_url(); ?>/images/user/icons/iconsmind/line-icons.min.css" />
    <script src="<?= base_url(); ?>/scripts/user/parallax.min.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/glide.min.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/progress.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/tab-accordion.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/pagination.min.js"></script>
    <script src="<?= base_url(); ?>/scripts/user/contact-form/contact-form.js"></script>
</body>

</html>