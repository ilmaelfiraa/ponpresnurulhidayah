<!-- Title Section Start -->
<div class="container title">
    <!-- Breadcrumb Start-->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
            <li><span aria-current="page">Berita</span></li>
        </ul>
    </nav>
    <!-- Breadcrumb End-->
    <h3>Berita</h3>
</div>
<!-- Title Section End -->

<section class="berita_lainnya">
    <div class="container">
        <div class="row align-items-center">
            <?php
            foreach ($berita as $data) {
            ?>
            <div class="col-md-4 img_berita_lainnya">
                <img src="<?php echo base_url('upload/berita/' . $data->image) ?>" alt="img">
                <h6><?php echo changeDateFormat('D d M Y', $data->created) ?></h6>
                <h4><?php echo word_limiter($data->judul, 8) ?></h4>
                <a href="<?= base_url() . 'berita/detail_berita/' . $data->slug ?>">
                    <h6>Baca Selengkapnya</h6>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>