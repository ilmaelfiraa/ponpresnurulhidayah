<!-- Benner Section -->
<section class="benner">
    <div class="container">
        <div class="row">
            <?php foreach ($benner as $data) : ?>
            <div class="col-lg-12">
                <div class="card bg-img">
                    <img src="<?php echo base_url('upload/benner/' . $data->image) ?>" alt="img">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="informasi-pendaftaran">
    <div class="container">
        <h3>Informasi Pendaftaran</h3>

        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#syaratPenerimaan">Syarat Penerimaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#waktuTempatPendaftaran">Waktu & Tempat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#berkasPersyaratan">Berkas Persyaratan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#iuranBulanan">Iuran Bulanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#pakaianPerlengkapan">Pakaian dan Perlengkapan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#fileBrosur">File Brosur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#biayaKeseluruhan">Biaya Keseluruhan Santri Baru</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="syaratPenerimaan" class="container tab-pane active"><br>
                <div class="row">
                    <?php $no = 1; ?>
                    <?php foreach ($syarat_penerimaan as $data) : ?>
                    <div class="col-lg-12">
                        <p><?php echo $no++; ?>. <?php echo ($data->isi_syaratpenerimaan) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="waktuTempatPendaftaran" class="container tab-pane fade"><br>
                <?php $no = 1; ?>
                <?php foreach ($waktu_tempat as $data) : ?>
                <div class="row">
                    <div class="col-lg-12">
                        <p><?php echo $no++; ?>. <?php echo ($data->judul_waktutempat) ?> </p>
                        <p>
                            <?php echo $data->isi_waktutempat ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div id="berkasPersyaratan" class="container tab-pane fade"><br>
                <?php $no = 1; ?>
                <?php foreach ($berkas_persyaratan as $data) : ?>
                <div class="row">
                    <div class="col-lg-12">
                        <p><?php echo $no++; ?>. <?php echo ($data->isi_berkaspersyaratan) ?> </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div id="iuranBulanan" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($iuran_bulanan as $data) { ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?>.</td>
                                    <td><?php echo ($data->keterangan) ?></td>
                                    <td>
                                        <m>Rp.</m> <?php echo ($data->harga) ?>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php foreach ($total_iuranbulanan as $data) { ?>
                                <td></td>
                                <td>JUMLAH</td>
                                <td>
                                    <m>Rp.</m> <?php echo ($data->total) ?>
                                </td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="pakaianPerlengkapan" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb-4">Pakaian dan Perlengkapan Harian Santri Putra</h4>
                        <?php $no = 1; ?>
                        <?php foreach ($pakaian_perlengkapan as $data) : ?>
                        <p>
                            <?php echo $no++; ?>. <?php echo ($data->isi_pakaianputra) ?>
                        </p>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mt-4">Perlengkapan Santri Putra</h4>
                        <table class="table table-striped mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($pakaian_perlengkapan as $data) : ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?>.</td>
                                    <td><?php echo ($data->keterangan_putra) ?></td>
                                    <td>
                                        <m>Rp.</m> <?php echo ($data->harga_putra) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php foreach ($total_hargaputra as $data) { ?>
                                <td></td>
                                <td>JUMLAH</td>
                                <td>
                                    <m>Rp.</m> <?php echo ($data->total_hargaputra) ?>
                                </td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mb-4">Pakaian dan Perlengkapan Harian Santri Putri</h4>
                        <?php $no = 1; ?>
                        <?php foreach ($pakaian_perlengkapan as $data) : ?>
                        <p>
                            <?php echo $no++; ?>. <?php echo ($data->isi_pakaianputri) ?>
                        </p>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mt-4">Perlengkapan Santri Putri</h4>
                        <table class="table table-striped mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($pakaian_perlengkapan as $data) : ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?>.</td>
                                    <td><?php echo ($data->keterangan_putri) ?></td>
                                    <td>
                                        <m>Rp.</m> <?php echo ($data->harga_putri) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php foreach ($total_hargaputri as $data) { ?>
                                <td></td>
                                <td>JUMLAH</td>
                                <td>
                                    <m>Rp.</m> <?php echo ($data->total_hargaputri) ?>
                                </td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="fileBrosur" class="container tab-pane fade"><br>
                <div class="row">
                    <?php foreach ($file_brosur as $data) : ?>
                    <div class="col-lg-12">
                        <p><?php echo ($data->keterangan) ?>
                            <a href="<?php echo base_url('file_brosur/download') ?>" alt="file" ?><button
                                    class="btn btn-outline-secondary">Download File <i class='bx bxs-download'></i>
                                </button>
                            </a>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div id="biayaKeseluruhan" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mt-4">Total Biaya Keseluruhan Santri Baru (Putra)</h4>
                        <table class="table table-striped mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($biaya_keseluruhan as $data) : ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?>.</td>
                                    <td><?php echo ($data->keterangan_putra) ?></td>
                                    <td>
                                        <m>Rp.</m> <?php echo ($data->harga_putra) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php foreach ($total_hargaputra as $data) { ?>
                                <td></td>
                                <td>JUMLAH</td>
                                <td>
                                    <m>Rp.</m> <?php echo ($data->total_hargaputra) ?>
                                </td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mt-4">Total Biaya Keseluruhan Santri Baru (Putri)</h4>
                        <table class="table table-striped mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($biaya_keseluruhan as $data) : ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?>.</td>
                                    <td><?php echo ($data->keterangan_putri) ?></td>
                                    <td>
                                        <m>Rp.</m> <?php echo ($data->harga_putri) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php foreach ($total_hargaputri as $data) { ?>
                                <td></td>
                                <td>JUMLAH</td>
                                <td>
                                    <m>Rp.</m> <?php echo ($data->total_hargaputri) ?>
                                </td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="formulir-pendaftaran">
    <div class="container">
        <h3>Formulir Pendaftaran</h3>
        <h4 class="mt-4">Data Calon Santri & Wali</h4>
        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo base_url() . 'pendaftaran/add'; ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="form-grup mt-3">
                        <label class="control-label requiredField" for="nama_lengkap">Nama Lengkap Santri <span
                                class="asteriskField">
                                *
                            </span></label>
                        <input type="text"
                            class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid' : '' ?>"
                            name="nama_lengkap" required></input>
                    </div>
                    <div class="form-grup mt-3">
                        <label class="control-label requiredField" for="jenis_kelamin">Jenis Kelamin <span
                                class="asteriskField">
                                *
                            </span></label>
                        <select class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>"
                            name="jenis_kelamin" required>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-grup mt-3">
                        <label class="control-label requiredField" for="tempat_lahir">Tempat Lahir
                            <span class="asteriskField">
                                *
                            </span></label>
                        <input type="text"
                            class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?>"
                            name="tempat_lahir" required></input>
                    </div>
                    <div class="form-grup mt-3">
                        <label class="control-label requiredField" for="tanggal_lahir">Tanggal Lahir
                            <span class="asteriskField">
                                *
                            </span></label>
                        <input type="text"
                            class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid' : '' ?>"
                            name="tanggal_lahir" required></input>
                    </div>
                    <div class="form-grup mt-3">
                        <label class="control-label requiredField" for="pendidikan_terakhir">Pendidikan Terakhir <span
                                class="asteriskField">
                                *
                            </span></label>
                        <select class="form-control <?php echo form_error('pendidikan_terakhir') ? 'is-invalid' : '' ?>"
                            name="pendidikan_terakhir" required>
                            <option>SD/MI Sederajat</option>
                            <option>SMP/MTs Sederajat</option>
                            <option>SMA/MA Sederajat</option>
                        </select>
                    </div>
                    <div class="form-grup mt-3">
                        <label class="control-label requiredField" for="desa_kelurahan">Desa/Kelurahan <span
                                class="asteriskField">
                                *
                            </span></label>
                        <input type="text"
                            class="form-control <?php echo form_error('desa_kelurahan') ? 'is-invalid' : '' ?>" rows="2"
                            name="desa_kelurahan" required></input>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-grup mt-3">
                    <label class="control-label requiredField" for="kecamatan">Kecamatan <span class="asteriskField">
                            *
                        </span></label>
                    <input type="text" class="form-control <?php echo form_error('Kecamatan') ? 'is-invalid' : '' ?>"
                        rows="2" name="kecamatan" required></input>
                </div>
                <div class="form-grup mt-3">
                    <label class="control-label requiredField" for="kabupaten_kota">Kabupatan/Kota <span
                            class="asteriskField">
                            *
                        </span></label>
                    <input type="text"
                        class="form-control <?php echo form_error('kabupaten_kota') ? 'is-invalid' : '' ?>" rows="2"
                        name="kabupaten_kota" required></input>
                </div>
                <div class="form-grup mt-3">
                    <label class="control-label requiredField" for="nama_ayah">Nama Wali (Ayah) <span
                            class="asteriskField">
                            *
                        </span></label>
                    <input type="text" class="form-control <?php echo form_error('nama_ayah') ? 'is-invalid' : '' ?>"
                        name="nama_ayah" required></input>
                </div>
                <div class="form-grup mt-3">
                    <label class="control-label requiredField" for="nama_ibu">Nama Wali (Ibu) <span
                            class="asteriskField">
                            *
                        </span></label>
                    <input type="text" class="form-control <?php echo form_error('nama_ibu') ? 'is-invalid' : '' ?>"
                        name="nama_ibu" required></input>
                </div>
                <div class="form-grup mt-3">
                    <label class="control-label requiredField" for="no_hp">No Handphone I (HP) <span
                            class="asteriskField">
                            *
                        </span></label>
                    <input type="text" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>"
                        name="no_hp" required></input>
                </div>
                <div class="form-grup mt-3">
                    <label class="control-label requiredField" for="no_wa">No Handphone II (WA)<span
                            class="asteriskField">
                            *
                        </span></label>
                    <input type="text" class="form-control <?php echo form_error('no_wa') ? 'is-invalid' : '' ?>"
                        name="no_wa" required></input>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-grup mt-3">
                    <label class="control-label" for="riwayat_penyakit">Riwayat Penyakit</label>
                    <textarea type="text" row="3"
                        class="form-control <?php echo form_error('riwayat_penyakit') ? 'is-invalid' : '' ?>"
                        name="riwayat_penyakit" rows="3"></textarea>
                    <p class="text-danger"><small>Isi riwayat penyakit yang diderita calon santri. Jika tidak
                            ada tidak perlu diisi.</small></p>
                </div>
                <div class="form-grup mt-3">
                    <h4 class="mt-5">Informasi</h4>
                    <textarea class="form-control mt-3" type="text" rows="4"
                        placeholder="Terima kasih telah mengisi formulir pendaftaran online ini, pastikan semua data telah benar dan klik tombol dibawah. Untuk informasi, biaya Administrasi Pendaftaran sebesar Rp. 150.000, melalui rekening pendaftaran Pondok Modern Nurul Hidayah, Bank Syariah Mandiri (BSM). No. Rek : 7148701789  a/n. Pendaftaran PM. Nurul Hidayah. (Konfirmasi biaya pendaftaran ko nomor berikut: Usth. Anis Fitria : 0822-8477-4904). Terima kasih!"
                        readonly></textarea>
                </div>
                <button class="btn btn-third mt-5" type="submit" value="Simpan">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</section>