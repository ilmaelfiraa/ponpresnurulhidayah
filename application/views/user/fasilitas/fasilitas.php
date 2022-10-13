<!-- Title Section Start -->
<section class="container title">
    <!-- Breadcrumb Start-->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
            <li><span aria-current="page">Fasilitas</span></li>
        </ul>
    </nav>
    <!-- Breadcrumb End-->
    <h3>Fasilitas</h3>
</section>
<!-- Title Section End -->

<section class="fasilitas">
    <div class="container">
        <?php
        foreach ($fasilitas as $data) {
        ?>
        <div class="isi_fasilitas">
            <div class="row align-items-center">
                <div class="col-lg-6 img_fasilitas">
                    <img class="img_fasilitas" src="<?php echo base_url('upload/fasilitas/' . $data->image) ?>"
                        alt="img">
                </div>
                <div class="col-lg-6 judul_fasilitas">
                    <h3 class="mb-4"><?php echo $data->judul_fasilitas ?></h3>
                    <p><?php echo $data->isi_fasilitas ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
