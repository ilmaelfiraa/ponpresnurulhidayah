<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?= $title; ?> </title>

    <!-- Icon Microlight -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/brand/brand-ponpres_small.svg"
        type="image/x-icon">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/microlight.css">
    <!-- CSS Libraries -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.css" />

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle text-success-700">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__content">
            <!-- Profile link -->
            <a href="#" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                <img src="<?php echo base_url() ?>assets/img/avatar/avatar-girl2.png.png" alt="avatar">
                <ul class="dropdown-menu border-0 shadow-lg rounded ps-2 pe-5" aria-labelledby="dropdownProfile">
                    <li>
                        <span class="dropdown-header fw-bold">👋 Hi, Min</span>
                    </li>
                    <li>
                        <a class="dropdown-item text-danger fw-bold"
                            href="<?php echo base_url('auth/logout') ?>">Logout</a>
                    </li>
                </ul>
            </a>
        </div>
    </header>

    <!-- Navbar -->
    <div class="l-navbar bg-sidenav-success-fill" id="nav-bar">
        <nav class="nav nav-content">
            <div>
                <!-- Brand here -->
                <a href="<?php echo base_url('beranda_user') ?>" class="nav__logo">
                    <img src="<?php echo base_url() ?>assets/img/brand/brand-ponpres.svg" alt="brand"
                        class="nav__logo-icon">
                </a>

                <div class="nav__list">

                    <a href="<?php echo base_url('dashboard') ?>"
                        class="nav__link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
                        <i class='bx bx-grid-alt nav__icon bx-tada-hover'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <li>
                        <a href="<?php echo base_url('carousel') ?>"
                            class="nav__link <?= ($this->uri->segment(1) == 'carousel') ? 'active' : '' ?>">
                            <i class='bx bxs-carousel nav__icon bx-tada-hover'></i>
                            <span class="nav__name">Carousel</span>
                        </a>
                    </li>

                    <a href="#" class="nav__link" id="flush-utilities" data-bs-toggle="collapse"
                        data-bs-target="#flushUtilities" aria-expanded="false" aria-controls="flushUser">
                        <i class='bx bxs-buildings nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Profil</span>

                    </a>
                    <div id="flushUtilities" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-utilities" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column" id="accordion-container-utilities">
                                <a href="<?php echo base_url('Kata_sambutan') ?>" class="accordion-items p-2">Kata
                                    Sambutan</a>
                                <a href="<?php echo base_url('Sejarah') ?>" class="accordion-items p-2">Sejarah</a>
                                <a href="<?php echo base_url('Visi_misi') ?>" class="accordion-items p-2">Visi &
                                    Misi</a>
                                <a href="<?php echo base_url('Tentang_kami'); ?>" class="accordion-items p-2">Tentang
                                    Kami</a>
                                <a href="<?php echo base_url('Tenaga_pendidik'); ?>" class="accordion-items p-2">Tenaga
                                    Pendidik</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="nav__link <?= ($this->uri->segment(1) == 'fasilitas') ? 'active' : '' ?>"
                        id="flush-table" data-bs-toggle="collapse" data-bs-target="#flushTable" aria-expanded="false"
                        aria-controls="flushUser">
                        <i class='bx bxs-building nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Fasilitas</span>

                    </a>
                    <div id="flushTable" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-table" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column" id="accordion-container-table">
                                <a href="<?php echo base_url('Fasilitas_admin') ?>"
                                    class="accordion-items p-2">Fasilitas</a>
                                <a href="<?php echo base_url('Ekstrakurikuler'); ?>"
                                    class="accordion-items p-2">Ekstrakurikuler</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="nav__link <?= ($this->uri->segment(1) == 'berita') ? 'active' : '' ?>"
                        id="flush-pages" data-bs-toggle="collapse" data-bs-target="#flushPages" aria-expanded="false"
                        aria-controls="flushUser">
                        <i class='bx bx-news nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Berita</span>

                    </a>
                    <div id="flushPages" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-pages" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column" id="accordion-container-pages">
                                <a href="<?php echo base_url('Berita_admin') ?>" class="accordion-items p-2">Berita</a>
                                <a href="<?php echo base_url('Agenda_admin') ?>" class="accordion-items p-2">Agenda</a>
                                <a href="#" class="accordion-items p-2">Pengumuman</a>
                            </div>
                        </div>
                    </div>

                    <li>
                        <a href="<?php echo base_url('galeri_admin') ?>"
                            class="nav__link <?= ($this->uri->segment(1) == 'galeri') ? 'active' : '' ?>">
                            <i class='bx bx-photo-album nav__icon bx-tada-hover'></i>
                            <span class="nav__name">Galeri</span>
                        </a>
                    </li>

                    <a href="#" class="nav__link <?= ($this->uri->segment(1) == 'Syarat_penerimaan') ? 'active' : '' ?>"
                        id="flush-components" data-bs-toggle="collapse" data-bs-target="#flushComponents"
                        aria-expanded="false" aria-controls="flushComponents">
                        <i class='bx bxs-user-rectangle nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Pendaftaran</span>

                    </a>
                    <div id="flushComponents" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-components" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body modal-dialog-scrollable">
                            <div class="d-flex flex-column" id="accordion-container-components">
                                <span class="dropdown-header p-2 text-secondary-400">Informasi</span>
                                <a href="<?php echo base_url('Syarat_penerimaan') ?>" class="accordion-items p-2">Syarat
                                    Penerimaan</a>
                                <a href="<?php echo base_url('Waktu_tempat') ?>" class="accordion-items p-2">Waktu &
                                    Tempat
                                </a>
                                <a href="<?php echo base_url('Iuran_bulanan') ?>" class="accordion-items p-2">Iuran
                                    Bulanan</a>
                                <a href="<?php echo base_url('Pakaian_perlengkapan') ?>"
                                    class="accordion-items p-2">Pakaian Perlengkapan</a>
                                <a href="<?php echo base_url('Panduan_pendaftaran') ?>"
                                    class="accordion-items p-2">Panduan Pendaftaran</a>
                                <span class="dropdown-header p-2 text-secondary-400">Form</span>
                                <a href="<?php echo base_url('Data_calonsantriwali') ?>"
                                    class="accordion-items p-2">Data Calon Santri Wali</a>
                                <span class="dropdown-header p-2 text-secondary-400">Jadwal Seleksi</span>
                                <a href="<?php echo base_url('Jadwal_seleksi') ?>" class="accordion-items p-2">File
                                    Jadwal Seleksi</a>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo base_url('auth/logout') ?>" class="nav__link">
                        <i class='bx bx-log-out nav__icon bx-tada-hover'></i>
                        <span class="nav__name">Log Out</span>
                    </a>

                </div>
            </div>
        </nav>
    </div>


    <!-- Container wrapper -->
    <div class="main-content">
        <!-- Start content here -->
        <?php echo $contents; ?>
        <!-- End content here -->
    </div>


    <!-- Footer -->
    <footer class="main-footer">
        <div class="float-start text-secondary-500">
            Copyright &copy; 2022 <div class="bullet"></div> Design with ❤️ By <a class="text-success-700"
                href="https://designwitharifin.netlify.app/">designwitharifin</a>
        </div>
        <div class="float-end text-secondary-500">
            v1.0.0
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- General JS Scripts -->
    <script src="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

    <!-- Template JS FIle -->
    <script src="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/js/main.js"></script>

    <!-- Js Libraries -->
    <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js">
    </script>
    <script>
    // Collapse sidebar accordion container components 
    $(function() {
        // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
        var containerOffset = $('#accordion-container-components')
            .offset(); // gets the container's origin coordinates
        var containerHeight = ($(window).height() - containerOffset.top) -
            400; //determines container's maximum height
        $('#accordion-container-components')
            .css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
    });

    $(function() {
        // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
        var containerOffset = $('#accordion-container-utilities')
            .offset(); // gets the container's origin coordinates
        var containerHeight = ($(window).height() - containerOffset.top) -
            400; //determines container's maximum height
        $('#accordion-container-utilities')
            .css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
    });

    $(function() {
        // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
        var containerOffset = $('#accordion-container-pages')
            .offset(); // gets the container's origin coordinates
        var containerHeight = ($(window).height() - containerOffset.top) -
            400; //determines container's maximum height
        $('#accordion-container-pages')
            .css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
    });
    </script>

</body>

</html>