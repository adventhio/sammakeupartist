<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Owner | SAMmakeUp</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="<?php echo base_url() . 'assets/assets-landing/image/icon-2.png' ?>">
    <link rel="shortcut icon" href="<?php echo base_url() . 'assets/assets-landing/image/icon-2.png' ?>">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-admin/vendor/bootstrap/dist/css/bootstrap.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-admin/vendor/PACE/themes/blue/pace-theme-minimal.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-admin/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css' ?>" />

    <!-- page css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-admin/vendor/jvectormap-master/jquery-jvectormap-2.0.3.css' ?>" />
    <!-- data table -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-admin/vendor/datatables/media/css/dataTables.bootstrap4.min.css' ?>" />

    <!-- core css -->
    <link href="<?php echo base_url() . 'assets/assets-admin/css/font-awesome.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/assets-admin/css/themify-icons.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/assets-admin/css/materialdesignicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/assets-admin/css/animate.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/assets-admin/css/app.css' ?>" rel="stylesheet">
</head>

<body>
    <div class="app header-info-gradient side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="index.html">
                            <div class="logo" style="background-image: url('<?php echo base_url() . 'assets/assets-admin/images/logo2.png' ?>')"></div>
                        </a>
                    </div>
                    <ul class="nav-right">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="title text-semibold"><?= $this->session->userdata('nama'); ?></span>

                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="<?php echo base_url() . 'assets/assets-admin/images/profile/profile.png' ?>" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold"><?= $this->session->userdata('nama'); ?></span>
                                                <span class="sub-title"><?= $this->session->userdata('role'); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="<?= base_url('owner/setting') ?>">
                                        <i class="ti-settings p-r-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('owner/profile') ?>">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="showLogoutModal()">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('') ?>">
                                        <i class="ti-arrow-left p-r-10"></i>
                                        <span>Exit without Logout</span>
                                    </a>
                                </li>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="side-nav-header">
                            <span>(Owner Privilege Feature.)</span>
                        </li>
                        <li class="active nav-item dropdown">
                            <a href="<?= base_url('owner') ?>">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="fa fa-file-pdf-o"></i>
                                </span>
                                <span class="title">Laporan</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= base_url('owner/produk') ?>">Produk Terjual</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('owner/print') ?>">Print Laporan</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <?= $contents; ?>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                        <span>Copyright © 2024 <b class="text-dark"></b>. All rights reserved. | Created by  <a href='#' title='Versi Ini Masih Tahap Beta. Update Terbaru Akan Segera Hadir' target='_blank'>SAMmakeUp APPS V.1.0.0 (Beta)</a>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <!-- build:js <?php echo base_url() . 'assets/assets-admin/js/vendor.js' ?> -->
    <!-- core dependcies js -->
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/jquery/dist/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/popper.js/dist/umd/popper.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/bootstrap/dist/js/bootstrap.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/PACE/pace.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/d3/d3.min.js' ?>"></script>
    <!-- endbuild -->

    <!-- build:js <?php echo base_url() . 'assets/assets-admin/js/app.min.js' ?> -->
    <!-- core js -->
    <script src="<?php echo base_url() . 'assets/assets-admin/js/app.js' ?>"></script>
    <!-- configurator js -->
    <script src="<?php echo base_url() . 'assets/assets-admin/js/configurator.js' ?>"></script>
    <!-- endbuild -->

    <!-- page js -->
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/chart.js/dist/Chart.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/jvectormap-master/jquery-jvectormap-2.0.3.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/js/maps/vector-map-lib/jquery-jvectormap-world-mill.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/js/dashboard/saas.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/datatables/media/js/jquery.dataTables.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/js/tables/data-table.js' ?>"></script>

    <!-- Modal HTML -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?php echo site_url('owner/logout') ?>" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLogoutModal() {
            $('#logoutModal').modal('show');
        }
    </script>

</body>

</html>