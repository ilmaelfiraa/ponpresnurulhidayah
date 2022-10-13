<section class="container title">
    <!-- Breadcrumb Start-->
    <nav aria-label="Breadcrumb" class="breadcrumb">
        <ul>
            <li><a href="<?php echo base_url('beranda') ?>">Beranda</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Agenda</a></li>
            <li><span aria-current="page">Detail Agenda</span></li>
        </ul>
    </nav>
    <!-- Breadcrumb End-->
    <h3 class="mb-4"><?php echo $agenda->judul ?></h3>
    <table class="table table-bordered" width="100%">
        <tbody>
            <tr>
                <td width="25%">Tanggal</td>
                <td width="1%">:</td>
                <td width="74%"><?php echo changeDateFormat('D d M Y', $agenda->tanggal) ?></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><?php echo $agenda->waktu ?></td>
            </tr>
            <tr>
                <td>Agenda</td>
                <td>:</td>
                <td>
                    <?php echo $agenda->judul ?>
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td><?php echo $agenda->lokasi ?></td>
            </tr>
        </tbody>
    </table>
</section>