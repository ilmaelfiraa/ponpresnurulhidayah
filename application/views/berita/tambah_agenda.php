<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Agenda</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Berita</li>
                <li class="breadcrumb-item">Agenda</li>
                <li class="breadcrumb-item">Tambah</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('agenda_admin') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="<?php echo base_url() . 'agenda_admin/tambah'; ?>" method="post" enctype="multipart/form-data">
            <div class="card-header">
                <h5 class="fw-medium"><?= $title ?></h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="judul">Judul Agenda</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="judul" id="judul" onkeyup="createTextSlug()" required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="slug">Slug</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" name="slug"
                            id="slug">
                    </div>
                    <div class=" form-grup mb-3">
                        <label-sm for="tanggal">Tanggal</label-sm>
                        <input
                            class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            type="date" name="tanggal" min="0" required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="waktu">Waktu</label-sm>
                        <input
                            class="form-control <?php echo form_error('waktu') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            type="time" name="waktu" min="0" required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="waktu">Lokasi</label-sm>
                        <input
                            class="form-control <?php echo form_error('lokasi') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            type="text" name="lokasi" min="0" required>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-success text-bg-success-700 btn-md" type="submit"
                            value="Simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>