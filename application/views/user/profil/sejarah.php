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

<?php foreach ($sejarah as $data) : ?>
<section class="container sejarah">
    <h3><?php echo $data->judul_sejarah ?></h3>
    <div class="row">
        <div class="col-md-12">
            <p>
                <?php echo ($data->isi_sejarah) ?>
            </p>
        </div>
    </div>
</section>
<?php endforeach; ?>