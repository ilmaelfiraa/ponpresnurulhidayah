<!-- Breadcrumb Start-->
<section class="container">
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
            <li><span aria-current="page">Profil</span></li>
            <li><span aria-current="page">Kata Sambutan</span></li>
        </ul>
    </nav>
</section>
<!-- Breadcrumb End-->

<?php foreach ($kata_sambutan as $data) : ?>
<section class="container kata_sambutan">
    <h3><?php echo $data->judul_katasambutan ?></h3>
    <div class="d-flex">
        <div class="d-flex align-items-center mt-3">
            <img src="<?php echo base_url('upload/profil/' . $data->image) ?>" alt="img">
        </div>
        <div class="col-sm-4">
            <div class="keterangan_kepsek ml-3">
                <h4><?php echo $data->nama ?></h4>
                <h5><?php echo $data->jabatan ?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>
                <?php echo ($data->isi_katasambutan) ?>
            </p>
        </div>
    </div>
</section>
<?php endforeach; ?>
