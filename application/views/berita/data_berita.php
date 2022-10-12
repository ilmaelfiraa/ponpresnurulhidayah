<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Berita</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="index.html" class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Berita</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('berita_admin/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $isi_berita = strip_tags($_POST['isi_berita']);
}
?>

<?php $this->load->view('messages') ?>
<div class="row">
    <?php foreach ($berita as $data) { ?>
    <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="card p-3">
            <img src="<?php echo base_url('upload/berita/' . $data->image) ?>" class="card-img-thumbnail rounded-2"
                alt="thumbnail-blog">
            <div class="card-body p-3">
                <div class="py-2">
                    <i class='bx bx-calendar-week align-middle'></i> <span
                        class="sm-text-rg text-secondary-500"><?php echo changeDateFormat('D d M Y', $data->created) ?></span>
                </div>
                <h5 class="fw-bold text-truncate"><?php echo $data->judul ?></h5>
                <p class="sm-text-rg text-secondary-500"><?php echo word_limiter($data->isi_berita, 25) ?></p>
                <div class="py-2">
                    <i class='bx bx-user-circle align-middle'></i> <span
                        class="sm-text-rg text-secondary-500"><?php echo $data->name ?></span>
                </div>
                <div class="card-footer text-end">
                    <a href="<?php echo base_url('berita_admin/edit/' . $data->id_berita) ?>"
                        class="btn btn-warning text-bg-warning-100 border-0 btn-md">Edit</a>
                    <a href="" data-bs-toggle="modal"
                        data-bs-target="#exampleModalConfirm<?php echo ($data->id_berita) ?>"
                        class="btn btn-danger text-bg-danger-100 border-0 btn-md">Hapus</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>


<?php foreach ($berita as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_berita) ?>" tabindex="-1"
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
                <a href="<?php echo base_url('berita_admin/delete/' . $data->id_berita) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>