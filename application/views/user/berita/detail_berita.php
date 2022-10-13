<!-- Title Section Start -->
<div class="container title">
    <!-- Breadcrumb Start-->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
            <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
            <li><span aria-current="page"><?= $title ?>
                </span></li>
        </ul>
    </nav>
    <!-- Breadcrumb End-->
    <h3>Berita</h3>
</div>
<!-- Title Section End -->

<!-- Detail Berita Start -->
<section class="detailberita">
    <div class="detailberita_section-wrapper">
        <div class="container">
            <div class="row">
                <!-- Detail Berita Start -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo base_url('upload/berita/' . $berita->image) ?>" alt="">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6><?php echo changeDateFormat('D d M Y', $berita->created) ?></h6>
                                <h6 class="upload_detailberita">Ponpres Nurul Hidayah</h6>
                            </div>
                            <h3><?php echo $berita->judul ?></h3>
                            <p class="paragraf_detailberita"><?php echo $berita->isi_berita ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Detail Berita End -->

                <!-- Side Berita Start -->
                <div class="col-lg-4 mt-lg-0">
                    <div class="detailberita_lainnya">
                        <h3 class="mt-0">Berita Lainnya</h3>
                        <?php foreach ($berita_lainnya as $data) : ?>
                        <img src="<?php echo base_url('upload/berita/' . $data->image) ?>" alt="">
                        <h6><?php echo changeDateFormat('D d M Y', $data->created) ?></h6>
                        <h4><?php echo $data->judul ?></h4>
                        <a href="<?= base_url() . 'berita/detail_berita/' . $data->slug ?>">
                            <h6>Baca Selengkapnya</h6>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Side Berita End -->
            </div>
        </div>
    </div>
</section>
<!-- Detail Berita End -->