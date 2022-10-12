<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Berita</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php base_url('dashboard'); ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Berita</li>
                <li class="breadcrumb-item">Edit</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('berita_admin') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $berita->id_berita ?>" />
            <div class="card-header">
                <h5 class="fw-medium">Edit Berita</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="judul_berita">Judul Berita</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" name="judul" required
                            value="<?php echo $berita->judul ?>">
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="slug">Slug</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" name="slug" id="slug"
                            value="<?php echo $berita->slug ?>">
                    </div>
                    <div class="form-grup mb-3">
                        <?php if ($berita->image != null) { ?>
                        <img class="img-fluid mb-4" src="<?php echo base_url('upload/berita/' . $berita->image) ?>"
                            style="width:400px" alt="image">
                        <?php } ?>
                        <input
                            class="form-control <?php echo form_error('image') ? 'is-invalid' : '' ?> form-control-md"
                            type="file" name="image">
                        <input type="hidden" name="old_image" value="<?php echo $berita->image ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('image') ?>
                        </div>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="isi_berita">Isi Berita</label-sm>
                        <textarea name="isi_berita" id="Myeditor"
                            class="form-control form-control-md text-secondary-500" rows="7"
                            value=""><?php echo $berita->isi_berita ?></textarea>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="created">Created</label-sm>
                        <input type="date" class="form-control form-control-md text-secondary-500" name="created"
                            value="<?php echo $berita->created ?>">
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-md" type="submit" value="Simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>