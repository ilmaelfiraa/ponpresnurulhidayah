<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Kata Sambutan</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Profil</li>
                <li class="breadcrumb-item">Kata Sambutan</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('kata_sambutan/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $isi_katasambutan = strip_tags($_POST['isi_katasambutan']);
}
?>

<?php $this->load->view('messages') ?>
<div class="row">
    <?php foreach ($kata_sambutan as $data) { ?>
    <div class="col-12 col-md-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title fw-medium"><?php echo $data->judul_katasambutan ?></h5>
            </div>
            <div class="card-header">
                <img src="<?php echo base_url('upload/profil/' . $data->image) ?>" alt="img-profil"
                    class="thumbnail-table-rounded rounded-100 me-3">
                <span class="fw-bold"><?php echo $data->jabatan ?></span>
            </div>
            <div class="card-body text-secondary-500">
                <?php echo $data->isi_katasambutan ?>
            </div>
            <div class="card-footer text-end">
                <a href="" data-bs-toggle="modal"
                    data-bs-target="#exampleModalConfirm<?php echo ($data->id_katasambutan) ?>"
                    class="btn btn-danger text-bg-danger-100 border-0 btn-md">Hapus</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>


<?php foreach ($kata_sambutan as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_katasambutan) ?>" tabindex="-1"
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
                <a href="<?php echo base_url('kata_sambutan/delete/' . $data->id_katasambutan) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
