<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Iuran Bulanan</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Pendaftaran</li>
                <li class="breadcrumb-item">Iuran Bulanan</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('iuran_bulanan/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $keterangan = strip_tags($_POST['keterangan']);
}
?>

<?php $this->load->view('messages') ?>
<div class="card mb-4">
    <div class="card-header">
        <h5 class="card-title fw-medium"><?php echo $title; ?></h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    <?php foreach ($iuran_bulanan as $data) { ?>
                    <tr>
                        <td><?php echo $no++; ?>.</td>
                        <td><?php echo ($data->keterangan) ?></td>
                        <td><?php echo ($data->harga) ?></td>
                        <td>
                            <a href="" data-bs-toggle="modal"
                                data-bs-target="#exampleModalConfirm<?php echo ($data->id_iuranbulanan) ?>"
                                class="btn btn-danger text-bg-danger-100 border-0 btn-md">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($total_iuranbulanan as $data) { ?>
                    <td></td>
                    <td>JUMLAH</td>
                    <td><?php echo ($data->total) ?></td>
                    <td></td>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($iuran_bulanan as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_iuranbulanan) ?>" tabindex="-1"
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
                <a href="<?php echo base_url('iuran_bulanan/delete/' . $data->id_iuranbulanan) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
