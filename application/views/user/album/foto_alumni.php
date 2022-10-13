<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <!-- css open img -->
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

</head>

<body>

    <!-- Title Section Start -->
    <section class="container title">
        <!-- Breadcrumb Start-->
        <nav aria-label="Breadcrumb" class="breadcrumb">
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><span aria-current="page">Album</span></li>
                <li><span aria-current="page"><?php echo $title; ?></span></li>
            </ul>
        </nav>
        <!-- Breadcrumb End-->
        <h3>
            <?= $title; ?>
        </h3>
    </section>
    <!-- Title Section End -->

    <div class="tz-gallery">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach ($foto_alumni as $data) : ?>
                <div class="img_galeri col-md-4">
                    <a class="lightbox" href="<?php echo base_url('upload/foto_alumni/' . $data->image) ?>">
                        <img src="<?php echo base_url('upload/foto_alumni/' . $data->image) ?>" alt="">
                    </a>
                    <h4 class="mt-4"><?php echo $data->keterangan ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- SHOW IMG -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
    baguetteBox.run('.tz-gallery');
    </script>
</body>

</html>
