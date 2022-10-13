<!-- Title Section Start -->
<section class="container title">
    <!-- Breadcrumb Start-->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
            <li><span aria-current="page">Berita</span></li>
            <li><span aria-current="page">Agenda</span></li>
        </ul>
    </nav>
    <!-- Breadcrumb End-->
    <h3>Agenda</h3>
</section>
<!-- Title Section End -->

<!-- Agenda Start Section -->
<section class="agenda">
    <div class="container">
        <div class="row">
            <?php
            $no = $this->uri->segment('3') + 1;
            foreach ($agenda as $data) {
            ?>
            <div class="col-md-6 mb-2">
                <div class="row mt-4">
                    <div class="d-flex icon">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-calendar text-success"></i>
                        </div>
                    </div>
                    <div class="d-block text pl-4">
                        <a href="<?= base_url() . 'berita/detail_agenda/' . $data->slug ?>">
                            <h4 class="d-inline-block text-truncate" style="max-width: 400px;">
                                <?php echo $data->judul ?></h4>
                        </a>
                        <p><?php echo changeDateFormat('D d M Y', $data->tanggal) ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="mt-5">
            <?php echo $this->pagination->create_links(); ?>
        </div>

    </div>
</section>
<!-- Agenda End Section -->
