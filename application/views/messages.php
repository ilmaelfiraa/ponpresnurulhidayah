<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible fade show hide-it" role="alert">
    <strong><i class='bx bxs-check-circle'></i></strong> <?php echo $this->session->flashdata('success'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>