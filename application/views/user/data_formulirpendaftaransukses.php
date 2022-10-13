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

    <!-- Formulir Pendaftaran Sukses Start -->
    <section class="pendaftaran_sukses">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 image">
                    <img src="<?php echo base_url() ?>assets_user/icons/pendaftaran_sukses.svg" alt="img">
                </div>
                <div class="col-lg-6 text">
                    <h3 class="mb-4">Data Berhasil Terkirim!</h3>
                    <p>Terima kasih telah melakukan pendaftaran online calon santri baru TA 2022 pada website Pondok
                        Modern
                        Nurul Hidayah. Silahkan cetak bukti pendaftaran dibawah ini. <a
                            href="<?php echo base_url('beranda') ?>">Kembali
                            ke Beranda</a>
                    </p>
                    <a href="<?php echo base_url('pendaftaran/cetak') ?>" target="_blank" alt="file" ?><button
                            class="btn btn-primary">Cetak
                            Bukti
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulir Pendaftaran Sukses End -->


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

</html