<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Waktu & Tempat</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item">Waktu & Tempat</li>
                <li class="breadcrumb-item">Tambah</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('waktu_tempat') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="<?php echo base_url() . 'waktu_tempat/tambah'; ?>" method="post" enctype="multipart/form-data">
            <div class="card-header">
                <h5 class="fw-medium">Tambah Waktu & Tempat</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="judul_waktutempat">Judul Waktu & Tempat</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500"
                            name="judul_waktutempat" required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="isi_waktutempat">Isi Waktu Tempat</label-sm>
                        <textarea name="isi_waktutempat" id="Myeditor"
                            class="form-control form-control-md text-secondary-500" rows="3"></textarea>
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