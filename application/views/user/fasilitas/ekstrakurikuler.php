<!-- Title Section Start -->
<section class="container title">
    <!-- Breadcrumb Start-->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda'); ?>">Beranda</a></li>
            <li><span aria-current="page">Ekstrakurikuler</span></li>
        </ul>
    </nav>
    <!-- Breadcrumb End-->
    <h3>Ekstrakurikuler</h3>
</section>
<!-- Title Section End -->

<section class="ekstrakurikuler">
    <div class="container">
        <div class="row align-items-center">
            <?php foreach ($ekstrakurikuler as $data) : ?>
            <div class="col-md-6 mt-2">
                <img class="img_ekstrakurikuler" src="<?php echo base_url('upload/ekstrakurikuler/' . $data->image) ?>"
                    alt="img">
                <h4 class="mb-3 fw-bold" style="margin-top: 30px;"><?php echo $data->judul_ekstrakurikuler ?></h4>
                <p class="mb-4 text-secondary"><?php echo $data->isi_ekstrakurikuler ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>