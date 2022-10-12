<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?></title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"
        integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"
        integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                        <span class="dropdown-header fw-bold">👋 Hey, Min</span>
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
                <a href="<?php echo base_url('beranda') ?>" class="nav__logo">
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

                    <a href="#" class="nav__link <?= ($this->uri->segment(1) == 'kata_sambutan') ? 'active' : '' ?>"
                        id="flush-utilities" data-bs-toggle="collapse" data-bs-target="#flushUtilities"
                        aria-expanded="false" aria-controls="flushUser">
                        <i class='bx bxs-buildings nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Profil</span>

                    </a>
                    <div id="flushUtilities" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-utilities" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column" id="accordion-container-utilities">
                                <a href="<?php echo base_url('kata_sambutan') ?>" class="accordion-items p-2">Kata
                                    Sambutan</a>
                                <a href="<?php echo base_url('sejarah') ?>" class="accordion-items p-2">Sejarah</a>
                                <a href="<?php echo base_url('visi_misi') ?>" class="accordion-items p-2">Visi &
                                    Misi</a>
                                <a href="<?php echo base_url('tentang_kami'); ?>" class="accordion-items p-2">Tentang
                                    Kami</a>
                                <a href="<?php echo base_url('program_pendidikan'); ?>"
                                    class="accordion-items p-2">Program Pendidikan</a>
                                <a href="<?php echo base_url('tenaga_pendidik'); ?>" class="accordion-items p-2">Tenaga
                                    Pendidik</a>
                            </div>
                        </div>
                    </div>

                    <li>
                        <a href="<?php echo base_url('fasilitas_admin') ?>"
                            class="nav__link <?= ($this->uri->segment(1) == 'fasilitas_admin') ? 'active' : '' ?>">
                            <i class='bx bxs-building nav__icon bx-tada-hover'></i>
                            <span class="nav__name">Fasilitas</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('ekstrakurikuler_admin') ?>"
                            class="nav__link <?= ($this->uri->segment(1) == 'ekstrakurikuler_admin') ? 'active' : '' ?>">
                            <i class='bx bx-baseball nav__icon bx-tada-hover'></i>
                            <span class="nav__name">Ekstrakurikuler</span>
                        </a>
                    </li>

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
                                <a href="<?php echo base_url('berita_admin') ?>" class="accordion-items p-2">Berita</a>
                                <a href="<?php echo base_url('agenda_admin') ?>" class="accordion-items p-2">Agenda</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="nav__link <?= ($this->uri->segment(1) == 'foto_sejarah') ? 'active' : '' ?>"
                        id="flush-album" data-bs-toggle="collapse" data-bs-target="#flushAlbum" aria-expanded="false"
                        aria-controls="flushUser">
                        <i class='bx bxs-photo-album nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Album</span>

                    </a>
                    <div id="flushAlbum" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-album" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex flex-column" id="accordion-container-pages">
                                <a href="<?php echo base_url('foto_sejarah') ?>" class="accordion-items p-2">Foto
                                    Sejarah</a>
                                <a href="<?php echo base_url('foto_kegiatan') ?>" class="accordion-items p-2">Foto
                                    Kegiatan</a>
                                <a href="<?php echo base_url('foto_ekstrakurikuler') ?>"
                                    class="accordion-items p-2">Foto
                                    Ekstrakurikuler</a>
                                <a href="<?php echo base_url('foto_prestasi_santri') ?>"
                                    class="accordion-items p-2">Foto Prestasi Santri</a>
                                <a href="<?php echo base_url('foto_alumni') ?>" class="accordion-items p-2">Foto
                                    Alumni</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="nav__link <?= ($this->uri->segment(1) == 'syarat_penerimaan') ? 'active' : '' ?>"
                        id="flush-components" data-bs-toggle="collapse" data-bs-target="#flushComponents"
                        aria-expanded="false" aria-controls="flushComponents">
                        <i class='bx bxs-user-rectangle nav__icon bx-tada-hover'></i>
                        <span class="nav__name dropdown-toggle float-end">Pendaftaran</span>

                    </a>
                    <div id="flushComponents" class="nav__item accordion-collapse collapse ms-3"
                        aria-labelledby="flush-components" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body modal-dialog-scrollable">
                            <div class="d-flex flex-column" id="accordion-container-components">
                                <a href="<?php echo base_url('benner') ?>" class="accordion-items p-2">Benner</a>
                                <span class="dropdown-header p-2 text-secondary-400">Informasi</span>
                                <a href="<?php echo base_url('syarat_penerimaan') ?>" class="accordion-items p-2">Syarat
                                    Penerimaan</a>
                                <a href="<?php echo base_url('waktu_tempat') ?>" class="accordion-items p-2">Waktu &
                                    Tempat
                                </a>
                                <a href="<?php echo base_url('berkas_persyaratan') ?>"
                                    class="accordion-items p-2">Berkas Persyaratan
                                </a>
                                <a href="<?php echo base_url('iuran_bulanan') ?>" class="accordion-items p-2">Iuran
                                    Bulanan</a>
                                <a href="<?php echo base_url('pakaian_perlengkapan') ?>"
                                    class="accordion-items p-2">Pakaian Perlengkapan</a>
                                <a href="<?php echo base_url('file_brosur') ?>" class="accordion-items p-2">File
                                    Brosur</a>
                                <a href="<?php echo base_url('biaya_keseluruhan') ?>" class="accordion-items p-2">Biaya
                                    Keseluruhan</a>
                                <span class="dropdown-header p-2 text-secondary-400">Formulir</span>
                                <a href="<?php echo base_url('data_calonsantriwali') ?>"
                                    class="accordion-items p-2">Data Calon Santri Wali</a>
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
    <!-- <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/chart.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


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

    $(function() {
        // This is where we define the accordion container's maximum height, and scrolling if the content overflows.
        var containerOffset = $('#accordion-container-album')
            .offset(); // gets the container's origin coordinates
        var containerHeight = ($(window).height() - containerOffset.top) -
            400; //determines container's maximum height
        $('#accordion-container-album')
            .css({ // sets container's maximum height & enables vertical scrolling for content overflow
                'max-height': containerHeight,
                'overflow-y': 'auto'
            });
    });
    </script>

    <script>
    function createTextSlug() {
        var judul = document.getElementById("judul").value;
        document.getElementById("slug").value = generateSlug(judul);
    }

    function generateSlug(text) {
        return text.toString().toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }
    </script>

    <script>
    // ckeditor 5
    ClassicEditor
        .create(document.querySelector('#Myeditor'))
        .catch(error => {
            console.error(error);
        });
    </script>

</body>

</html>