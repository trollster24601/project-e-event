<?= self::extend('layout/admin-template') ?>
<?= self::section('css') ?>
<!-- DataTables -->
<link href="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url(); ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="<?= base_url(); ?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
<?= self::endSection('css') ?>
<?= self::section('content');?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Event</a></li>
                            <li class="breadcrumb-item"><a href="#">Kelola Akun</a></li>
                            <li class="breadcrumb-item active">EO (Event Organizer)</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Kelola Akun Event Organizer</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Daftar Akun Event Organizer</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php for($i=0; $i<30; $i++) : ?>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Donna@gmail.com</td>
                                    <td>083142301830</td>
                                    <td>Kintap, Tanah Laut</td>
                                    <td>@ucupsurotong</td>
                                    <td class="text-success">Approve</td>
                                    <td style="width:111px;">
                                        <button type='button' class='btn border btn-success p-0 px-2 m-0'
                                            data-bs-toggle='modal' data-bs-target='#detail'><i
                                                class="mdi-bookmark-check"></i>
                                            haha</button>
                                        <button type='button' class='btn border btn-primary p-0 px-2 m-0'
                                            data-bs-toggle='modal' data-bs-target='#edit'><i
                                                class="bi bi-pencil-square text-light"></i></button>
                                        <button type='button' class='btn border btn-danger p-0 px-2 m-0'
                                            data-bs-toggle='modal' data-bs-target='#delete'><i
                                                class="bi bi-trash text-light"></i></button>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<?= self::endSection('content');?>
<?= self::section('js'); ?>
<!-- Required datatable js -->
<script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script src="<?= base_url(); ?>/assets/pages/datatables.init.js"></script>
<?= self::endSection('js'); ?>