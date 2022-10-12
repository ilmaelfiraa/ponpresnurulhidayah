<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Agenda</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Berita</li>
                <li class="breadcrumb-item">Agenda</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('agenda_admin/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $judul_agenda = strip_tags($_POST['judul_agenda']);
}
?>

<?php $this->load->view('messages') ?>
<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            Agenda
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Judul Agenda</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($agenda as $data) { ?>
                        <tr>
                            <td><?php echo $no++; ?>.</td>
                            <td><?php echo changeDateFormat('D d M Y', $data->tanggal) ?></td>
                            <td><?php echo $data->waktu ?></td>
                            <td><?php echo $data->judul ?></td>
                            <td><?php echo $data->lokasi ?></td>
                            <td>
                                <a href="" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalConfirm<?php echo ($data->id_agenda) ?>"
                                    class="btn btn-danger text-bg-danger-100 border-0 btn-md mt-3">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php foreach ($agenda as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_agenda) ?>" tabindex="-1"
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
                <a href="<?php echo base_url('agenda_admin/delete/' . $data->id_agenda) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
