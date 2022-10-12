<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold"><?php echo $title; ?></h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item">Data Calon Santri & Wali</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('data_calonsantriwali/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $nama_lengkap = strip_tags($_POST['nama_lengkap']);
}
?>

<?php $this->load->view('messages') ?>
<div class="card mb-4">
    <div class="card-header">
        <h5 class="card-title fw-medium"><?php echo $title; ?></h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTableExport" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Desa/Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten/Kota</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No HP</th>
                        <th>No WA</th>
                        <th>Riwayat Penyakit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_calonsantriwali as $data) { ?>
                    <tr>
                        <td><?php echo $no++; ?>.</td>
                        <td><?php echo ($data->nama_lengkap) ?></td>
                        <td><?php echo ($data->jenis_kelamin) ?></td>
                        <td><?php echo ($data->tempat_lahir) ?></td>
                        <td><?php echo ($data->tanggal_lahir) ?></td>
                        <td><?php echo ($data->pendidikan_terakhir) ?></td>
                        <td><?php echo ($data->desa_kelurahan) ?></td>
                        <td><?php echo ($data->kecamatan) ?></td>
                        <td><?php echo ($data->kabupaten_kota) ?></td>
                        <td><?php echo ($data->nama_ayah) ?></td>
                        <td><?php echo ($data->nama_ibu) ?></td>
                        <td><?php echo ($data->no_hp) ?></td>
                        <td><?php echo ($data->no_wa) ?></td>
                        <td><?php echo ($data->riwayat_penyakit) ?></td>
                        <td>
                            <a href="<?php echo base_url('data_calonsantriwali/edit/' . $data->id_calonsantriwali) ?>"
                                class="btn btn-warning text-bg-warning-100 border-0 btn-md">Edit</a>
                            <a href="" data-bs-toggle="modal"
                                data-bs-target="#exampleModalConfirm<?php echo ($data->id_calonsantriwali) ?>"
                                class="btn btn-danger text-bg-danger-100 border-0 btn-md mt-3">Hapus</a>
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($data_calonsantriwali as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_calonsantriwali) ?>" tabindex="-1"
    aria-labelledby="exampleModalConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content custom p-2">
            <div class="modal-body">
                <div class="d-flex">
                    <div class="float-start">
                        <i class="bi bi-exclamation-circle text-danger pe-4"></i>
                    </div>
                    <div class="float-end">
                        <h5 class="fw-bold text-secondary-700">Anda yakin ingin menghapus data ini?</h5>
                        <span class="md-text-rg text-secondary-500">Hati-hati! data yang dihapus tidak bisa
                            dikembalikan</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light btn-md text-secondary-500"
                    data-bs-dismiss="modal">Cancel</button>
                <a href="<?php echo base_url('data_calonsantriwali/delete/' . $data->id_calonsantriwali) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
