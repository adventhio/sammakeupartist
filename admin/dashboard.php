<div class="container-fluid container-fixed-sm">
    <?php
    $message = $this->session->flashdata('error');
    if ($message) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="mdi mdi-close-circle-outline"></i>
            <strong>Error!</strong> ' . $message . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    } ?>
    <?php
    $message = $this->session->flashdata('success');
    if ($message) {
        echo '
        <div class="alert alert-info alert-dismissible fade show">
            <i class="mdi mdi-check-circle-outline"></i>
            <strong>Success!</strong> ' . $message . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    } ?>
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Dashboard | Control Center</h2>
            <div class="header-sub-title">
                <?php if ($this->session->userdata('role') == 'Owner') { ?>
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="<?= base_url('owner') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    </nav>
                <?php } else { ?>
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="<?= base_url('admin') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    </nav>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body ">
                    <div class="media">
                        <div class="align-self-center">
                            <i class="ti-alarm-clock font-size-40 icon-gradient-danger text-danger"></i>
                        </div>
                        <div class="m-l-20">
                            <p class="m-b-0">Menunggu Konfirmasi</p>
                            <h2 class="font-weight-light m-b-0" id="menunggu-konfirmasi">
                                <?php foreach ($menunggu_konfirmasi as $row) { ?>
                                    <?php if ($row->total_produk == 0) { ?>
                                        0
                                    <?php } else { ?>
                                        <?= $row->total_produk ?>
                                    <?php } ?>
                                <?php } ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="align-self-center">
                            <i class="ti-receipt font-size-40 icon-gradient-info text-info"></i>
                        </div>
                        <div class="m-l-20">
                            <p class="m-b-0">Dikerjakan</p>
                            <h2 class="font-weight-light m-b-0"><?php foreach ($dikerjakan as $row) { ?>
                                    <?php if ($row->total_produk == 0) { ?>
                                        0
                                    <?php } else { ?>
                                        <?= $row->total_produk ?>
                                    <?php } ?>
                                <?php } ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="align-self-center">
                            <i class="ti-check-box font-size-40 icon-gradient-success text-success"></i>
                        </div>
                        <div class="m-l-20">
                            <p class="m-b-0">Selesai</p>
                            <h2 class="font-weight-light m-b-0"><?php foreach ($selesai as $row) { ?>
                                    <?php if ($row->total_produk == 0) { ?>
                                        0
                                    <?php } else { ?>
                                        <?= $row->total_produk ?>
                                    <?php } ?>
                                <?php } ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <?php if ($this->session->userdata('role') == 'Admin') { ?>
            <div class="col-md-3">
                <a href="<?= base_url('transaksi/dataOrder') ?>" class="card text-center">
                    <div class="card-body">
                        <i class="ti-direction font-size-40 icon-gradient-danger text-danger"></i>
                        <p class="m-b-0">Data Order</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('transaksi/statusPembayaran') ?>" class="card text-center">
                    <div class="card-body">
                        <i class="ti-credit-card font-size-40 icon-gradient-warning text-warning"></i>
                        <p class="m-b-0">Status Pembayaran konsumen</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('laporan/print') ?>" class="card text-center">
                    <div class="card-body">
                        <i class="ti-printer font-size-40 icon-gradient-secondary text-secondary"></i>
                        <p class="m-b-0">Print Laporan</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('setting') ?>" class="card text-center">
                    <div class="card-body">
                        <i class="ti-settings font-size-40 icon-gradient-primary text-primary"></i>
                        <p class="m-b-0">Pengaturan Akun</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="card text-center" onclick="showDevelopmentAlert()">
                    <div class="card-body">
                        <i class="ti-comments font-size-40 icon-gradient-info text-info"></i>
                        <p class="m-b-0">Pesan</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?= base_url('laporan') ?>" class="card text-center">
                    <div class="card-body">
                        <i class="ti-bar-chart font-size-40 icon-gradient-success text-success"></i>
                        <p class="m-b-0">Analisa Laporan</p>
                    </div>
                </a>
            </div>
        <?php } ?>
        <?php if ($this->session->userdata('role') == 'Owner') { ?>
            <div class="col-md-3">
                <a href="<?= base_url('owner/user') ?>" class="card text-center">
                    <div class="card-body">
                        <i class="ti-crown font-size-40 icon-gradient-gold text-gold"></i>
                        <p class="m-b-0">Data User Center</p>
                    </div>
                </a>
            </div>
        <?php } ?>
        <div class="col-md-3">
            <a href="https://wa.me/6283879258721?text=Laporkan%20Bug" class="card text-center">
                <div class="card-body">
                    <i class="fa fa-bug font-size-40 icon-gradient-danger text-danger"></i>
                    <p class="m-b-0">Laporkan Bug ke Developer</p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="card text-center" id="logoutButton">
                <div class="card-body">
                    <i class="ti-power-off font-size-40 icon-gradient-danger text-danger"></i>
                    <p class="m-b-0">Logout</p>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 20px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function updateMenungguKonfirmasi() {
            $.ajax({
                url: '<?= base_url('api/menunggu_konfirmasi') ?>', // Ganti dengan endpoint yang sesuai
                method: 'GET',
                success: function(data) {
                    // Misalkan data.total_produk adalah format data yang dikembalikan
                    $('#menunggu-konfirmasi').text(data.total_produk);
                },
                error: function() {
                    console.error('Gagal memperbarui data');
                }
            });
        }

        // Panggil fungsi setiap 5 detik
        setInterval(updateMenungguKonfirmasi, 5000);
    });
</script>

<script>
    function showDevelopmentAlert() {
        alert('Maaf, fitur ini masih dalam tahap pengembangan. Fitur ini akan segera hadir di update selanjutnya!');
    }
</script>

<script>
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tautan langsung
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan keluar dan diarahkan ke halaman login.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?= site_url('login/logoutAdmin') ?>';
            }
        });
    });
</script>

<!-- Tambahkan ini di bagian <head> atau sebelum penutup </body> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>