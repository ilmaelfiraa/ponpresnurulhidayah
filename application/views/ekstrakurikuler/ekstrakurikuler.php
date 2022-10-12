<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Ekstrakurikuler</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Ekstrakurikuler</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('ekstrakurikuler/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $isi_ekstrakurikuler = strip_tags($_POST['isi_ekstrakurikuler']);
}
?>

<?php $this->load->view('messages') ?>
<div class="row">
    <?php foreach ($ekstrakurikuler as $data) { ?>
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4 p-3">
                    <img src="<?php echo base_url('upload/ekstrakurikuler/' . $data->image) ?>"
                        class="img-fluid rounded-2" alt="thumbnail-blog">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo $data->judul_ekstrakurikuler ?></h5>
                        <p class="card-text text-secondary-500">
                            <?php echo word_limiter($data->isi_ekstrakurikuler, 15) ?></p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="" data-bs-toggle="modal"
                            data-bs-target="#exampleModalConfirm<?php echo ($data->id_ekstrakurikuler) ?>"
                            class="btn btn-danger text-bg-danger-100 border-0 btn-md">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<?php foreach ($ekstrakurikuler as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_ekstrakurikuler) ?>" tabindex="-1"
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
                <a href="<?php echo base_url('ekstrakurikuler/delete/' . $data->id_ekstrakurikuler) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>