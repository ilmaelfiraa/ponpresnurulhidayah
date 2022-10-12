<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Biaya Keseluruhan</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php echo base_url('beranda'); ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item">Biaya Keseluruhan</li>
                <li class="breadcrumb-item">Tambah</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('biaya_keseluruhan') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="<?php echo base_url() . 'biaya_keseluruhan/tambah'; ?>" method="post">
            <div class="card-header">
                <h5 class="fw-medium">Tambah Biaya Keseluruhan</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="keterangan_putra">Keterangan Biaya Santri Putra</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500"
                            name="keterangan_putra" required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="harga_putra">Harga Pendaftaran Santri Putra</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" name="harga_putra"
                            required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="keterangan_putri">Keterangan Biaya Santri Putri</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500"
                            name="keterangan_putri" required>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="harga_putri">Harga Pendaftaran Santri Putri</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" name="harga_putri"
                            required>
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