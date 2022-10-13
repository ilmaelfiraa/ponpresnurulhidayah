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

<!-- <?php foreach ($program_pendidikan as $data) : ?>
<section class="container visi_misi">
    <h3><?php echo $data->judul_programpendidikan ?></h3>
    <div class="row">
        <div class="col-md-12">
            <p>
                <?php echo ($data->keterangan) ?>
            </p>
        </div>
    </div>
</section>
<?php endforeach; ?> -->

<div class="container">
    <h3>Program Pendidikan</h3>
    <?php $no = 1; ?>
    <?php foreach ($program_pendidikan as $data) : ?>
    <div class="row">
        <div class="col-lg-12">
            <p class="mt-5"><?php echo $no++; ?>. <?php echo ($data->judul_programpendidikan) ?> </p>
            <p>
                <?php echo $data->keterangan ?>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
</div>