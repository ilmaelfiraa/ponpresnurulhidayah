<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="icon" href="<?php echo base_url() ?>assets_user/img/logo/Logo-Pesantren.png">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/style.css">

    <title><?= $title; ?></title>

</head>

<body>
    <div class="container">
        <div class="logo">
            <img class="mt-5" src="<?php echo base_url() ?>assets_user/img/logo/Logo Pesantren.png" alt="">
        </div>
        <hr class="mt-5">
        <h4>BIODATA CALON SANTRI</h4>
        <hr>
        <?php foreach ($singledata_calonsantriwali as $data) { ?>
        <p class="mt-4">Nama Lengkap : <?php echo ($data->nama_lengkap) ?> </p>
        <p>Jenis Kelamin : <?php echo ($data->jenis_kelamin) ?> </p>
        <p>Tempat Lahir : <?php echo ($data->tempat_lahir) ?> </p>
        <p>Tanggal Lahir : <?php echo ($data->tanggal_lahir) ?> </p>
        <hr class="mt-5">
        <h4>ALAMAT</h4>
        <hr>
        <p class="mt-4">Desa/Kelurahan : <?php echo ($data->desa_kelurahan) ?> </p>
        <p>Kecamatan : <?php echo ($data->kecamatan) ?> </p>
        <p>Kabupaten/Kota : <?php echo ($data->kabupaten_kota) ?> </p>
        <hr class="mt-5">
        <h4>Kontak</h4>
        <hr>
        <p>No HP : <?php echo ($data->no_hp) ?> </p>
        <p>No WA : <?php echo ($data->no_wa) ?> </p>
        <?php } ?>
    </div>

    <script>
    window.print();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>