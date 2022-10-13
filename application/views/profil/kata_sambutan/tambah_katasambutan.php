<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Profil</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Profil</li>
                <li class="breadcrumb-item">Kata Sambutan</li>
                <li class="breadcrumb-item">Tambah</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('kata_sambutan') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="<?php echo base_url() . 'kata_sambutan/tambah'; ?>" method="post" enctype="multipart/form-data">
            <div class="card-header">
                <h5 class="fw-medium"><?= $title ?></h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="judul_katasambutan">Judul Kata Sambutan</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('judul_katasambutan') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="judul_katasambutan" required>
                    </div>
                    <div class="form-group mb-3">
                        <label-sm for="image">Gambar</label-sm>
                        <input type="file" name="image"
                            class="form-control <?php echo form_error('image') ? 'is-invalid' : '' ?> form-control-md">
                    </div>

                    <!-- <div class="form-grup mb-3">
                        <label-sm for="isi_katasambutan">Isi Kata Sambutan</label-sm>
                        <textarea type="text"
                            class="form-control <?php echo form_error('isi_katasambutan') ? 'is-invalid' : '' ?> form-control-sm text-secondary-500"
                            rows="7" name="isi_katasambutan" required></textarea>
                    </div> -->

                    <div class="form-grup mb-3">
                        <label-sm for="isi_katasambutan">Isi Visi Misi</label-sm>
                        <textarea name="isi_katasambutan" id="Myeditor"
                            class="form-control form-control-md text-secondary-500" rows="3"></textarea>
                    </div>

                    <div class="form-grup mb-3">
                        <label-sm for="nama">Nama</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?> form-control-sm text-secondary-500"
                            rows="7" name="nama" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="jabatan">Jabatan</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('jabatan') ? 'is-invalid' : '' ?> form-control-sm text-secondary-500"
                            rows="7" name="jabatan" required></input>
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