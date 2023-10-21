<?= self::section('css');?>
<!--Morris Chart CSS -->
<link href="<?= base_url(); ?>/assets/plugins/fullcalendar/vanillaCalendar.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/morris/morris.css">
<link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/metro/MetroJs.min.css">

<link href="<?= base_url(); ?>/assets/plugins/carousel/owl.carousel.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>/assets/plugins/carousel/owl.theme.default.min.css" rel="stylesheet">
<?= self::endSection('css');?>

<?= self::extend('layout/eo-template') ?>
<?= self::section('content');?>
<div class="wrapper dashborad-h">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Event</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-primary m-b-30">
                    <div class="card-body">
                        <div class="d-flex row">
                            <div class="col-3 align-self-center">
                                <div class="round">
                                    <i class="mdi mdi-calculator"></i>
                                </div>
                            </div>
                            <div class="col-8 ml-auto align-self-center text-center">
                                <div class="m-l-10 text-white float-right">
                                    <h5 class="mt-0 m-0 round-inner">Rp 37.874.000</h5>
                                    <p class="mb-0">Total Pendapatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-12 col-md-6 col-xl-3">
                <div class="card bg-danger m-b-30">
                    <div class="card-body">
                        <div class="d-flex row">
                            <div class="col-3 align-self-center">
                                <div class="round">
                                    <i class="mdi mdi-google-physical-web"></i>
                                </div>
                            </div>
                            <div class="col-8 ml-auto align-self-center text-center">
                                <div class="m-l-10 text-white float-right">
                                    <h5 class="mt-0 round-inner">1</h5>
                                    <p class="mb-0 ">Event Aktif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-info m-b-30">
                    <div class="card-body">
                        <div class="d-flex row">
                            <div class="col-3 align-self-center">
                                <div class="round">
                                    <i class="mdi mdi-basket"></i>
                                </div>
                            </div>
                            <div class="col-8 text-center ml-auto align-self-center">
                                <div class="m-l-10 text-white float-right">
                                    <h5 class="mt-0 round-inner">4</h5>
                                    <p class="mb-0 ">Event Mendatang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-success m-b-30">
                    <div class="card-body">
                        <div class="d-flex row">
                            <div class="col-3 align-self-center">
                                <div class="round ">
                                    <i class="mdi mdi-account-multiple-plus"></i>
                                </div>
                            </div>
                            <div class="col-8 ml-auto align-self-center text-center">
                                <div class="m-l-10 text-white float-right">
                                    <h5 class="mt-0 round-inner">534</h5>
                                    <p class="mb-0 ">Tiket Terjual</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-5">
                <div class="card m-b-30">
                    <div class="card-body metro-widget">
                        <h5 class="header-title mt-0 pb-3">Statistik Hari Ini</h5>
                        <div id="morris-bar-example"></div>
                        <div class="row text-center d-flex justify-content-around">
                            <div class="col-4">
                                <p class="mb-0 font-14">Tiket Terjual</p>
                                <div class="live-tile m-0 w-100" data-mode="carousel" data-direction="horizontal"
                                    data-delay="3900" data-height="10">
                                    <div>
                                        <small class="text-muted"> hari ini</small>
                                        <h3 class=" text-dark">12
                                            <small>
                                                <i class="mdi mdi-menu-down text-danger"></i>
                                            </small>
                                        </h3>
                                    </div>
                                    <div>
                                        <small class="text-muted"> kemarin</small>
                                        <h3 class="text-dark">39
                                            <small>
                                                <i class="mdi mdi-menu-up text-success"></i>
                                            </small>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <p class="mb-0 font-14">Pendapatan</p>
                                <div class="live-tile m-0 w-100" data-mode="carousel" data-direction="vertical"
                                    data-delay="3500" data-height="10">
                                    <div>
                                        <small class="text-muted"> hari ini</small>
                                        <h3 class=" text-dark">349.000</h3>
                                    </div>
                                    <div>
                                        <small class="text-muted"> kemarin</small>
                                        <h3 class="text-dark">692.000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <p class="mb-0 font-14">Peserta Pendaftar</p>
                                <div class="live-tile m-0 w-100" data-mode="carousel" data-direction="vertical"
                                    data-delay="4200" data-height="10">
                                    <div>
                                        <small class="text-muted"> hari ini</small>
                                        <h3 class=" text-dark">8
                                            <small>
                                                <i class="mdi mdi-menu-up text-success"></i>
                                            </small>
                                        </h3>
                                    </div>
                                    <div>
                                        <small class="text-muted"> kemarin</small>
                                        <h3 class="text-dark">31
                                            <small>
                                                <i class="mdi mdi-menu-down text-danger "></i>
                                            </small>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-7">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h5 class="header-title mt-0 pb-3">Statistik Penjualan Tiket</h5>
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--end row-->
    </div> <!-- end container -->
</div>
<?= self::endSection('content');?>
<?= self::section('js'); ?>
<script src="<?= base_url(); ?>/assets/plugins/carousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/peity/jquery.peity.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/chartist/js/chartist.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/metro/MetroJs.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/morris/morris.min.js"></script>
<script src="<?= base_url(); ?>/assets/pages/dashborad-eo.js"></script>
<?= self::endSection('js');?>