<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11">
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>SAMmakeUP</title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <link href="<?php echo base_url() . 'assets/assets-landing/vendor/selectize/dist/css/selectize.default.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/assets-admin/vendor/sweetalert/lib/sweet-alert.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() . 'assets/assets-landing/image/icon-2.png' ?>" />
    <link rel="preload stylesheet" href="<?php echo base_url() . 'assets/assets-landing/css/style.css' ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-landing/css/whatsapps.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets-landing/css/regis.css' ?>">
</head>

<body class="loaded">
    <!-- BEGIN BODY -->
    <div class="main-wrapper">
        <!-- BEGIN CONTENT -->
        <main class="content" style="margin-top: 20px;">
            <?= $contents; ?>
        </main>
        <!-- CONTENT EOF -->

        <!-- BEGIN HEADER -->
        <header class="header">
            <div class="header-top">
                <span>HAI...Selamat Datang</span>
            </div>
            <div class="header-content">
                <div class="header-logo">
                    <a href="<?= base_url('') ?>"><img src="<?= base_url() . 'assets/assets-landing/image/logo2.png' ?>" alt="" id="logo"></a>
                </div>
                <div class="header-box">
                    <ul class="header-nav">
                        <li><a href="<?= base_url('/') ?>" class="nav-link">Home</a></li>
                        <li><a href="<?= base_url('profil') ?>" class="nav-link">Profile</a></li>
                        <li><a href="<?= base_url('shop') ?>" class="nav-link">Shop</a></li>
                        <?php $data = $this->session->userdata('nama');
                        if (empty($data)) { ?>
                        <?php } else { ?>
                            <li><a href="<?= base_url('myorder') ?>" class="nav-link">My Order</a></li>
                        <?php } ?>
                        <li><a href="<?= base_url('contact') ?>" class="nav-link">Contact</a></li>
                    </ul>
                    <ul class="header-options">
                        <?php
                        $data = $this->session->userdata('nama');
                        if (empty($data)) { ?>
                            <li><a href="<?php echo base_url('login') ?>" class="nav-link">Login</a></li>
                        <?php } else { ?>
                            <ul class="header-nav">
                                <li style="position: relative;">
                                    <a href="#" class="icon-background">
                                        <i class="icon-user"></i> <?= $this->session->userdata('nama'); ?>
                                    </a>
                                    <ul class="dropdown-menu" style="display: none; position: absolute; top: 150%; left: 0; background-color: rgba(128, 128, 128, 0.5); border-radius: 10px; padding: 10px;">
                                        <?php if ($this->session->userdata('role') == 'Admin') { ?>
                                            <li><a href="<?php echo site_url('admin') ?>" style="color: white;">Dashboard</a></li>
                                        <?php } elseif ($this->session->userdata('role') == 'Owner') { ?>
                                            <li><a href="<?php echo site_url('owner') ?>" style="color: white;">Dashboard</a></li>
                                        <?php } ?>
                                        <?php if ($this->session->userdata('role') == 'Customer') { ?>
                                            <li><a href="<?php echo site_url('myorder') ?>" style="color: white;">Riwayat belanjaan</a></li>
                                            <li><a href="https://wa.me/+6285719145111" style="color: white;">Hubungi bantuan</a></li>
                                        <?php } ?>
                                        <li><a href="<?php echo site_url('login/logout') ?>" style="color: white;">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php } ?>
                        <?php
                        $keranjang = $this->cart->contents();
                        $jml_item = 0;
                        foreach ($keranjang as $row) {
                            $jml_item += $row['qty'];
                        }
                        ?>
                        <li><a href="<?php echo base_url('shop/cart') ?>" class="icon-background"><i class="icon-cart"></i><span><?= $jml_item ?></span></a></li>
                    </ul>
                </div>

                <div class="btn-menu js-btn-menu"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div>
            </div>
        </header>
        <!-- HEADER EOF -->

        <!-- BEGIN FOOTER -->
        <footer style="margin-top: 20px;" class="footer">
            <div class="wrapper">
                <div class="footer-copy">
                    <span>&copy; All rights reserved. SAMmakeUP 2024</span>
                </div>
            </div>
        </footer>
        <!-- FOOTER EOF -->
    </div>

    <div class="icon-load"></div>
    <!-- BODY EOF -->

    <!-- Tambahkan elemen audio -->
    <audio id="background-music" loop>
        <source src="<?php echo base_url() . 'assets/audio/background2-music.mp3' ?>" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Tambahkan ikon mute -->
    <div id="mute-icon" style="position: fixed; bottom: 10px; left: 10px; cursor: pointer; z-index: 1000;">
        <img src="<?php echo base_url() . 'assets/mute.png' ?>" alt="Mute" width="40" height="40">
    </div>

    <script src="<?php echo base_url() . 'assets/assets-landing/js/landing.js' ?>"></script>                   
    <script src="<?php echo base_url() . 'assets/assets-landing/js/jquery-3.5.1.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-landing/js/lazyload.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-landing/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-landing/js/custom.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/nouislider/distribute/nouislider.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/vendor/selectize/dist/js/standalone/selectize.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-admin/js/components/notifications.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/assets-landing/js/pop.js' ?>"></script>

    <!--JS-Script finishing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="<?= base_url('assets/assets-landing/js/pop.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-landing/js/pelengkap.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-landing/js/password.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($this->session->flashdata('success')): ?>
                Swal.fire({
                    title: "Berhasil!",
                    text: "<?= $this->session->flashdata('success'); ?>",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then(() => {
                    <?php $this->session->set_flashdata('success', null); ?>
                });
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
                Swal.fire({
                    title: "Gagal!",
                    text: "Username atau Password Salah",
                    icon: "error",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    <?php $this->session->set_flashdata('error', null); ?>
                });
            <?php endif; ?>

            <?php if ($this->session->flashdata('login_error')): ?>
                Swal.fire({
                    title: "Gagal!",
                    text: "<?= $this->session->flashdata('login_error'); ?>",
                    icon: "error",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    <?php $this->session->set_flashdata('login_error', null); ?>
                });
            <?php endif; ?>

            const userIcon = document.querySelector('.icon-background');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            userIcon.addEventListener('click', function(event) {
                event.preventDefault();
                dropdownMenu.style.display = dropdownMenu.style.display === 'none' ? 'block' : 'none';
            });

            // Optional: Close the dropdown if clicked outside
            document.addEventListener('click', function(event) {
                if (!userIcon.contains(event.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
