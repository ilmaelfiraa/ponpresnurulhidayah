<!-- Breadcrumb Start-->
<section class="container">
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
            <li><span aria-current="page">Profil</span></li>
            <li><span aria-current="page"><?= $title; ?></span></li>
        </ul>
    </nav>
</section>
<!-- Breadcrumb End-->

<section class="container kata_sambutan">
    <h3>Tenaga Pendidik</h3>
    <!-- <div class="row align-items-center"> -->
    <div class="row">
        <?php foreach ($tenaga_pendidik as $data) : ?>
        <div class="col-md-3 card-item mt-5">
            <div class="card">
                <img src="<?php echo base_url('upload/profil/' . $data->image) ?>" class="card-img-top" alt="img">
                <div class="card-body text-center">
                    <h4><?php echo $data->nama_tenagapendidik ?></h4>
                    <h5><?php echo $data->jabatan_tenagapendidik ?></h5>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>