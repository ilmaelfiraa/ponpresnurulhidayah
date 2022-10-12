<div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4">
    <div>
        <h2 class="fw-bold">Foto Prestasi Santri</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb sm-text-rg">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>"
                        class="text-success-700">Dashboard</a></li>
                <li class="breadcrumb-item">Foto Prestasi Santri</li>
            </ol>
        </nav>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <a href="<?= base_url('foto_prestasi_santri/tambah') ?>" class="btn text-bg-white btn-md mb-2"><i
                class="bx bx-plus pe-2"></i>Tambah</a>
    </div>
</div>
<?php $this->load->view('messages') ?>
<div class="row">
    <?php foreach ($foto_prestasi_santri as $data) { ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active p-1">
                            <img src="<?php echo base_url('upload/foto_prestasi_santri/' . $data->image) ?>"
                                class="d-block w-100 rounded-5" alt="thumbnail-img">
                        </div>
                    </div>
                </div>
                <h6 class="fw-reguler text-truncate mt-3"><?php echo $data->keterangan ?></h6>
            </div>
            <div class="card-footer text-end">
                <a href="" data-bs-toggle="modal"
                    data-bs-target="#exampleModalConfirm<?php echo ($data->id_fotoprestasisantri) ?>"
                    class="btn btn-danger text-bg-danger-100 border-0 btn-md">Hapus</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>


<?php foreach ($foto_prestasi_santri as $data) { ?>
<!-- Modal confirm-->
<div class="modal fade" id="exampleModalConfirm<?php echo ($data->id_fotoprestasisantri) ?>" tabindex="-1"
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
                <a href="<?php echo base_url('foto_prestasi_santri/delete/' . $data->id_fotoprestasisantri) ?>"
                    class="btn btn-danger btn-md">Delete</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>