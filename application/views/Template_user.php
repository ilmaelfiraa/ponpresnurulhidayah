<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/bootstrap.min.css">
    <!-- bs icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/bs-icons.css">
    <!-- css open img -->
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/style.css">
    <!-- icon -->
    <link rel="icon" href="<?php echo base_url() ?>assets_user/img/logo/Logo-Pesantren.png">
    <!-- box-icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

    <!-- Navbar Open -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid p-0">
            <!-- brand -->
            <a class="navbar-brand px-4 px-lg-5">
                <div class="logo">
                    <img src="<?php echo base_url() ?>assets_user/img/logo/Logo Pesantren.png" alt="logo">
                </div>
            </a>

            <!-- toggler/collapsible button -->
            <button class="navbar-toggler me-4" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class='bx bx-menu'></i>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto p-4 p-lg-0">
                    <li class="nav-item">
                        <a href="<?php echo base_url('beranda'); ?>" class="nav-link <?php if ($this->uri->uri_string() == 'beranda') {
                                                                                            echo 'nav-link active';
                                                                                        } ?>">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link <?php if ($this->uri->uri_string() == 'profil') {
                                                        echo 'nav-link active';
                                                    } ?>" data-toggle="dropdown">PROFIL</a>
                        <div class="dropdown-menu p-3 m-2" style="box-shadow: 6px 4px 23px rgba(0, 0, 0, 0.09);">
                            <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">Kata
                                Sambutan</a>
                            <a href="<?php echo base_url('profil/sejarah'); ?>" class="dropdown-item">Sejarah</a>
                            <a href="<?php echo base_url('profil/visi_misi'); ?>" class="dropdown-item">Visi &
                                Misi</a>
                            <a href="<?php echo base_url('profil/tentang_kami'); ?>" class="dropdown-item">Tentang
                                Kami</a>
                            <a href="<?php echo base_url('profil/program_pendidikan'); ?>" class="dropdown-item">Program
                                Pendidikan</a>
                            <a href="<?php echo base_url('profil/tenaga_pendidik'); ?>" class="dropdown-item">Tenaga
                                Pendidik</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link <?php if ($this->uri->uri_string() == 'berita') {
                                                        echo 'nav-link active';
                                                    } ?>" data-toggle="dropdown">BERITA</a>
                        <div class="dropdown-menu p-3 m-2" style="box-shadow: 6px 4px 23px rgba(0, 0, 0, 0.09);">
                            <a href="<?php echo base_url('berita') ?>" class="dropdown-item">Berita</a>
                            <a href="<?php echo base_url('berita/agenda'); ?>" class="dropdown-item">Agenda</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('fasilitas'); ?>" class="nav-link <?php if ($this->uri->uri_string() == 'fasilitas') {
                                                                                            echo 'nav-link active';
                                                                                        } ?>">FASILITAS</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('ekstrakurikuler'); ?>"
                            class="nav-link <?php if ($this->uri->uri_string() == 'ekstrakurikuler') {
                                                                                                    echo 'nav-link active';
                                                                                                } ?>">EKSTRAKURIKULER</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('album/foto_sejarah') ?>" class="nav-link <?php if ($this->uri->uri_string() == 'album/foto_sejarah') {
                                                                                                    echo 'nav-link active';
                                                                                                } ?>"
                            data-toggle="dropdown">ALBUM</a>
                        <div class="dropdown-menu p-3 m-2" style="box-shadow: 6px 4px 23px rgba(0, 0, 0, 0.09);">
                            <a href="<?php echo base_url('album/foto_sejarah') ?>" class="dropdown-item">Foto
                                Sejarah</a>
                            <a href="<?php echo base_url('album/foto_kegiatan') ?>" class="dropdown-item">Foto
                                Kegiatan</a>
                            <a href="<?php echo base_url('album/foto_ekstrakurikuler') ?>" class="dropdown-item">Foto
                                Ekstrakurikuler</a>
                            <a href="<?php echo base_url('album/foto_prestasi_santri') ?>" class="dropdown-item">Foto
                                Prestasi Santri</a>
                            <a href="<?php echo base_url('album/foto_alumni') ?>" class="dropdown-item">Foto Alumni</a>
                        </div>
                    </li>
                    <li class="nav-item bootstrap-iso">
                        <a href="<?php echo base_url('pendaftaran') ?>"><button
                                class="btn btn-third">PENDAFTARAN</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <?php echo $contents; ?>

    <!-- Footer Start Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer_col col-md-5">
                    <h3 class="mb-5">INFORMASI</h3>
                    <h5><i class='bx bxs-phone'></i>0822-8410-1989</h5>
                    <h5><i class='bx bxs-envelope'></i>pm.nurulhidayah.bengkalis@gmail.com</h5>
                    <h5><i class='bx bxs-map-alt'></i>Jl. Rajimun, Pasiran, Kec. Bantan, Bengkalis</h5>
                    <h5><i class='bx bxs-planet'></i>www.pmnurulhidayah.ponpes.id</h5>
                </div>
                <div class="footer_col col-md-2">
                    <h3 class="mb-5">LINK TERKAIT</h3>
                    <ul>
                        <li><a href="<?php echo base_url('profil/kata_sambutan'); ?>">Kata Sambutan</a></li>
                        <li><a href="<?php echo base_url('fasilitas/ekstrakurikuler'); ?>">Ekstrakurikuler</a>
                        <li><a href="<?php echo base_url('fasilitas'); ?>">Fasilitas</a></li>
                        </li>
                        <li><a href="<?php echo base_url('pendaftaran'); ?>">Pendaftaran</a></li>
                    </ul>
                </div>
                <div class="footer_col col-md-2">
                    <h3 class="mb-5">BERITA</h3>
                    <ul>
                        <li><a href="<?php echo base_url('berita'); ?>">Artikel Berita</a></li>
                        <li><a href="<?= base_url('berita/agenda') ?>">Agenda</a></li>
                    </ul>
                </div>
                <div class="footer_col col-md-3">
                    <h3 class="mb-5">MEDIA SOSIAL</h3>
                    <div class="footer_icon">
                        <a href="https://wa.me/6282284101989">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                        <a href="https://www.instagram.com/pm_nurulhidayah/">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="https://web.facebook.com/NurulHidayahBengkalis">
                            <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC1NLx_dKQBDP4GxO1iKpWtQ">
                            <i class='bx bxl-youtube'></i></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="copyright col-md-7">
                    <h5>Copyright 2022 Pondok Modern Nurul Hidayah</h5>
                </div>
                <div class="copyright col-md-3">
                    <a href="#">
                        <h5>Terms & Conditions</h5>
                    </a>
                </div>
                <div class="copyright col-md-2">
                    <a href="#">
                        <h5>Privacy Policy</h5>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End Section -->

    <!-- jquery js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!-- popper js -->
    <script src="<?php echo base_url() ?>assets_user/js/popper.min.js"></script>
    <!-- scrollIt js -->
    <script src="<?php echo base_url() ?>assets_user/js/scrollIt.min.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url() ?>assets_user/js/main.js"></script>
    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>