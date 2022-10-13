<!-- Hero Carousel Start -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php $carousel = $this->carousel_m->carouselGetAll(); ?>
        <?php
        foreach ($carousel as $key => $value) {
            $active = ($key == 0) ? 'active' : '';
            echo '<div class="carousel-item ' . $active . '">
                                <img src="' . base_url('upload/carousel/') . $value['image'] . '" alt="..." class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>' . $value['judul_carousel'] . '</h2>
                                    <p class="text-center">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                              </div>';
        } ?>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
            <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle"
                style="width: 50px; height: 50px;">
                <i class="fa fa-arrow-left text-success"></i>
            </div>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="sr-only">Next</span>
            <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle"
                style="width: 50px; height: 50px;">
                <i class="fa fa-arrow-right text-success"></i>
            </div>
        </a>
    </div>
</div>
<!-- Hero Carousel End -->

<!-- Berita Start -->
<section class="berita_home">
    <div class="berita_home-section-wrapper">
        <div class="container">
            <span>Berita</span>
            <div class="judul-berita_home d-sm-flex align-items-center justify-content-between mb-4">
                <h2>Berita Seputar Pesantren</h2>
                <a class="mt-3" href="<?= base_url('berita') ?>">
                    <h6>Lihat Selengkapnya</h6>
                </a>
            </div>
            <div class="row align-items-center">
                <?php foreach ($berita_beranda as $data) : ?>
                <div class="col-md-4 img_berita_lainnya">
                    <img src="<?php echo base_url('upload/berita/' . $data->image) ?>" alt="img">
                    <h6><?php echo changeDateFormat('D d M Y', $data->created) ?></h6>
                    <h4><?php echo word_limiter($data->judul, 10) ?></h4>
                    <a href="<?= base_url() . 'berita/detail_berita/' . $data->slug ?>">
                        <h6>Baca Selengkapnya</h6>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Berita End -->

<!-- Fasilitas Start -->
<section class="fasilitas_home">
    <div class="fasilitas_home-section-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach ($fasilitas_beranda as $data) : ?>
                <div class="col-md-12">
                    <span>Fasilitas</span>
                    <h2>Fasilitas Pesantren</h2>
                </div>
                <div class="col-lg-6 col-md-6 mb-lg-0">
                    <div class="img_fasilitas">
                        <img src="<?php echo base_url('upload/fasilitas/' . $data->image) ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6 mb-lg-0 col-lg-6">
                    <p class="mt-5"><?php echo ($data->isi_fasilitas) ?></p>
                    <a href="<?= base_url('fasilitas') ?>"><button class="btn btn-primary">Selengkapnya</button></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Fasilitas End -->