<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Fasilitas</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php base_url('dashboard'); ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Fasilitas</li>
                <li class="breadcrumb-item">Edit</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('fasilitas_admin') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $fasilitas->id_fasilitas ?>" />
            <div class="card-header">
                <h5 class="fw-medium">Edit Fasilitas</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="judul_fasilitas">Judul Fasilitas</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500"
                            name="judul_fasilitas" required value="<?php echo $fasilitas->judul_fasilitas ?>">
                    </div>
                    <div class="form-grup mb-3">
                        <?php if ($fasilitas->image != null) { ?>
                        <img class="img-fluid mb-4"
                            src="<?php echo base_url('upload/fasilitas/' . $fasilitas->image) ?>" style="width:400px"
                            alt="image">
                        <?php } ?>
                        <input
                            class="form-control <?php echo form_error('image') ? 'is-invalid' : '' ?> form-control-md"
                            type="file" name="image">
                        <input type="hidden" name="old_image" value="<?php echo $fasilitas->image ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('image') ?>
                        </div>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="isi_fasilitas">Isi Fasilitas</label-sm>
                        <textarea type="text" class="form-control form-control-md text-secondary-500" rows="7"
                            name="isi_fasilitas" required value=""><?php echo $fasilitas->isi_fasilitas ?></textarea>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-md" type="submit" value="Simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>