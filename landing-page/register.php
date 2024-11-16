<!-- BEGIN DETAIL MAIN BLOCK -->
<div class="detail-block detail-block_margin" style="background-image: url(<?= base_url() . 'assets/assets-landing/image/banner/login.png'  ?>); margin-top:20px">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1 style="color: white;">DAFTAR AKUN</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="<?= base_url('/') ?>" class="bread-crumbs__link" style="color: #ff69b4;">Home</a>
                </li>
                <li class="bread-crumbs__item" style="color: white;">Daftar Akun</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN REGISTRATION -->
<div class="login registration">
    <div class="wrapper">
        <div class="login-form js-img" data-src="img/registration-form__bg.png">
            <form method="POST" action="<?php echo base_url('register/proses'); ?>" onsubmit="return validatePasswords()">
                <h3>REGISTRASI AKUN</h3>
                <p class="login-description" style="text-align: center; font-size: 16px; margin-bottom: 40px;">Silahkan Isi Form Dibawah Ini Untuk Mendaftar Akun. Gunakan Data Diri Yang Belum Pernah Terdaftar.</p>
                <div class="box-field">
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="text" name="no" id="no" class="form-control" placeholder="Masukan Nomor Handphone">
                    </div>
                    <div class="box-field">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Alamat Email yang belum terdaftar">
                    </div>
                </div>
                <div class="box-field">
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Lengkap Secara Detail">
                </div>
                <select name="gender" id="gender" class="form-control" placeholder="Select your gender">
                    <option>--Gender Anda--</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                    <option value="P">Lainnya</option>
                </select>
                <div class="box-field__row">
                    <span>password</span>
                </div>
                <div class="box-field password-field">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password Anda">
                    <span class="toggle-password" onclick="togglePasswordVisibility('password', this)">👁️‍🗨️</span>
                </div>
                <div class="box-field password-field">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Konfirmasi Password Anda">
                    <span class="toggle-password" onclick="togglePasswordVisibility('confirm_password', this)">👁️‍🗨️</span>
                </div>
                <div id="password-error" style="color: red; display: none; margin-bottom: 15px;">Konfirmasi password tidak sama dengan password utama</div>
                <button class="btn" type="submit">DAFTAR</button>
                <div class="login-form__bottom">
                    <span>Sudah punya akun? <a href="<?= base_url('login') ?>">Log in disini.</a></span>
                </div>
            </form>
            <br><center><p>Created by <a href='#' title='SAMmakeUP' target='_blank'>SAMmakeUP</a></p></center>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="<?= base_url() . 'assets/assets-landing/image/side/shop-decor-side-r.jpg' ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">

    <img class="shop-decor js-img" data-src="<?= base_url() . 'assets/assets-landing/image/side/shop-decor-side.jpg' ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
</div>
<!-- REGISTRATION EOF   -->>
    
