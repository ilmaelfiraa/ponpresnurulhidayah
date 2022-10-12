<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Pakaian & Perlengkapan</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item">Pakaian & Perlengkapan</li>
                <li class="breadcrumb-item">Tambah</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('pakaian_perlengkapan') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="<?php echo base_url() . 'pakaian_perlengkapan/tambah'; ?>" method="post"
            enctype="multipart/form-data">
            <div class="card-header">
                <h5 class="fw-medium">Tambah Pakaian & Perlengkapan</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="isi_pakaianputra">Isi Pakaian Putra</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('isi_pakaianputra') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            rows="5" name="isi_pakaianputra" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="keterangan_putra">Keterangan Putra</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('keterangan_putra') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            rows="5" name="keterangan_putra" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="harga_putra">Harga Putra</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('harga_putra') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            rows="5" name="harga_putra" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="isi_pakaianputri">Isi Pakaian Putri</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('isi_pakaianputri') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            rows="5" name="isi_pakaianputri" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="keterangan_putri">Keterangan Putri</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('keterangan_putri') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            rows="5" name="keterangan_putri" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="harga_putri">Harga Putri</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('harga_putri') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            rows="5" name="harga_putri" required></input>
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