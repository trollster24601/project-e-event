<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title>E-Tiket</title>
    <meta content="EO Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico" />
    <link href="<?= base_url(); ?>/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- render css -->
    <?= self::renderSection('css');?>
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- include navbar -->
    <?= self::include("layout/admin-navbar") ?>

    <!-- render content -->
    <?= self::renderSection('content');?>

    <!-- include footer -->
    <?= self::include("layout/admin-footer") ?>

    <!-- jQuery  -->
    <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap-material-design.js"></script>
    <script src="<?= base_url(); ?>/assets/js/modernizr.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/detect.js"></script>
    <script src="<?= base_url(); ?>/assets/js/fastclick.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.blockUI.js"></script>
    <script src="<?= base_url(); ?>/assets/js/waves.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url(); ?>/assets/js/app.js"></script>
    <!-- render js -->
    <?= self::renderSection('js'); ?>
</body>

</html>