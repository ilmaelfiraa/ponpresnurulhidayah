<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Data Calon Santri & Wali</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php base_url('dashboard'); ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item">Data Calon Santri & Wali</li>
                <li class="breadcrumb-item">Edit</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('data_calonsantriwali') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-left-arrow-alt pe-2"></i>Batal</a>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-12 mb-4">
    <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $data_calonsantriwali->id_calonsantriwali ?>" />
            <div class="card-header">
                <h5 class="fw-medium">Edit Data Calon Santri & Wali</h5>
            </div>
            <div class="card-body">
                <div class="col-md-12 offset-md-12">
                    <div class="form-grup mb-3">
                        <label-sm for="nama_lengkap">Nama Lengkap Santri</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="nama_lengkap" value="<?php echo $data_calonsantriwali->nama_lengkap ?>"
                            required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="jenis_kelamin">Jenis Kelamin</label-sm>
                        <select
                            class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="jenis_kelamin" value="<?php echo $data_calonsantriwali->jenis_kelamin ?>">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="tempat_lahir">Tempat Lahir</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="tempat_lahir" value="<?php echo $data_calonsantriwali->tempat_lahir ?>" required>
                        </input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="tanggal_lahir">Tanggal Lahir</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="tanggal_lahir" value="<?php echo $data_calonsantriwali->tanggal_lahir ?>" required>
                        </input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="pendidikan_terakhir">Pendidikan Terakhir</label-sm>
                        <select
                            class="form-control <?php echo form_error('pendidikan_terakhir') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="pendidikan_terakhir" value="<?php echo $data_calonsantriwali->pendidikan_terakhir ?>">
                            <option>SD/MI Sederajat</option>
                            <option>SMP/Mts Sederajat</option>
                            <option>SMA/MA Sederajat</option>
                        </select>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="desa_kelurahan">Desa/Kelurahan</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" rows="4"
                            name="desa_kelurahan" value="<?php echo $data_calonsantriwali->desa_kelurahan ?>" required>
                        </input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="kecamatan">Kecamatan</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" rows="4"
                            name="kecamatan" value="<?php echo $data_calonsantriwali->kecamatan ?>" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="kabupaten_kota">Kabupaten/Kota</label-sm>
                        <input type="text" class="form-control form-control-md text-secondary-500" rows="4"
                            name="kabupaten_kota" value="<?php echo $data_calonsantriwali->kabupaten_kota ?>"
                            required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="nama_ayah">Nama Ayah</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('nama_ayah') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="nama_ayah" value="<?php echo $data_calonsantriwali->nama_ayah ?>" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="nama_ibu">Nama Ibu</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('nama_ibu') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="nama_ibu" value="<?php echo $data_calonsantriwali->nama_ibu ?>" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="no_hp">No HP</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="no_hp" value="<?php echo $data_calonsantriwali->no_hp ?>" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="no_wa">No WA</label-sm>
                        <input type="text"
                            class="form-control <?php echo form_error('no_wa') ? 'is-invalid' : '' ?> form-control-md text-secondary-500"
                            name="no_wa" value="<?php echo $data_calonsantriwali->no_wa ?>" required></input>
                    </div>
                    <div class="form-grup mb-3">
                        <label-sm for="riwayat_penyakit">Riwayat Penyakit</label-sm>
                        <textarea type="text" class="form-control form-control-md text-secondary-500" rows="4"
                            name="riwayat_penyakit"
                            value=""><?php echo $data_calonsantriwali->riwayat_penyakit ?></textarea>
                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-success btn-md" type="submit" value="Simpan">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>