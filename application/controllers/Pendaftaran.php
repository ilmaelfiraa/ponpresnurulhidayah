<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Informasi Pendaftaran'
        );

        $data["pendaftaran"] = $this->data_calonsantriwali_m->getAll();
        $data["benner"] = $this->benner_m->getAll();
        $data['total_hargaputra'] =  $this->pakaianperlengkapan_m->getTotalPutra();
        $data['total_hargaputri'] =  $this->pakaianperlengkapan_m->getTotalPutri();
        $data["pakaian_perlengkapan"] = $this->pakaianperlengkapan_m->getAll();
        $data['total_hargaputra'] =  $this->biayakeseluruhan_m->getTotalPutra();
        $data['total_hargaputri'] =  $this->biayakeseluruhan_m->getTotalPutri();
        $data["biaya_keseluruhan"] = $this->biayakeseluruhan_m->getAll();
        $data["total_iuranbulanan"] = $this->iuranbulanan_m->getTotal();
        $data["iuran_bulanan"] = $this->iuranbulanan_m->getAll();
        $data["berkas_persyaratan"] = $this->berkaspersyaratan_m->getAll();
        $data["waktu_tempat"] = $this->waktutempat_m->getAll();
        $data["file_brosur"] = $this->filebrosur_m->getAll();
        $data["syarat_penerimaan"] = $this->syaratpenerimaan_m->getAll();
        $this->template_user->load('template_user', 'user/pendaftaran', $data);
    }

    // function pendaftaran_sukses()
    // {
    //     $data = array(
    //         'title' => 'Pendaftaran Sukses'
    //     );
    //     $this->load->view('user/data_formulirpendaftaransukses', $data);
    // }

    // public function submit()
    // {
    //     $pendaftaran = $this->data_formulirpendaftaran_m;
    //     $validation = $this->form_validation;

    //     $validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
    //     $validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
    //     $validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
    //     $validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
    //     $validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
    //     $validation->set_rules('desa_kelurahan', 'Desa/Kelurahan', 'trim|required');
    //     $validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
    //     $validation->set_rules('kabupaten_kota', 'Kabupaten/Kota', 'trim|required');
    //     $validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required');
    //     $validation->set_rules('nama_ibu', 'Nama Ibu', 'trim|required');
    //     $validation->set_rules('no_hp', 'No HP', 'trim|required');
    //     $validation->set_rules('no_wa', 'No WA', 'trim|required');
    //     $validation->set_rules('riwayat_penyakit', 'Riwayat Penyakit', 'trim');

    //     if ($validation->run()) {
    //         $pendaftaran->save();

    //         redirect(base_url('pendaftaran/pendaftaran_sukses'));
    //     }

    //     $data = array(
    //         'title' => 'Pendaftaran',
    //     );

    //     $data["pendaftaran"] = $this->data_calonsantriwali_m->getAll();
    //     $data["benner"] = $this->benner_m->getAll();
    //     $data['total_hargaputra'] =  $this->pakaianperlengkapan_m->getTotalPutra();
    //     $data['total_hargaputri'] =  $this->pakaianperlengkapan_m->getTotalPutri();
    //     $data["pakaian_perlengkapan"] = $this->pakaianperlengkapan_m->getAll();
    //     $data["total_iuranbulanan"] = $this->iuranbulanan_m->getTotal();
    //     $data["iuran_bulanan"] = $this->iuranbulanan_m->getAll();
    //     $data["berkas_persyaratan"] = $this->berkaspersyaratan_m->getAll();
    //     $data["waktu_tempat"] = $this->waktutempat_m->getAll();
    //     $data["syarat_penerimaan"] = $this->syaratpenerimaan_m->getAll();

    //     $this->template_user->load('template_user', 'user/pendaftaran', $data);
    // }

    function pendaftaran_user_sukses()
    {
        $data = array(
            'title' => 'Pendaftaran Sukses'
        );
        $this->load->view('user/data_formulirpendaftaransukses', $data);
    }

    public function add()
    {
        $data_formulirpendaftaran = $this->data_calonsantriwali_m;
        $validation = $this->form_validation;
        // Validation Rules
        $validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
        $validation->set_rules('desa_kelurahan', 'Desa/Kelurahan', 'trim|required');
        $validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
        $validation->set_rules('kabupaten_kota', 'Kabupaten/Kota', 'trim|required');
        $validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required');
        $validation->set_rules('nama_ibu', 'Nama Ibu', 'trim|required');
        $validation->set_rules('no_hp', 'No HP', 'trim|required');
        $validation->set_rules('no_wa', 'No WA', 'trim|required');
        $validation->set_rules('riwayat_penyakit', 'Riwayat Penyakit', 'trim');

        if ($validation->run()) {
            $data_formulirpendaftaran->save();

            redirect(base_url('pendaftaran/pendaftaran_user_sukses'));
        }

        $data = array(
            'title' => 'Pendaftaran Online',
        );

        $data["pendaftaran"] = $this->data_calonsantriwali_m->getAll();
        $data["benner"] = $this->benner_m->getAll();
        $data['total_hargaputra'] =  $this->pakaianperlengkapan_m->getTotalPutra();
        $data['total_hargaputri'] =  $this->pakaianperlengkapan_m->getTotalPutri();
        $data["pakaian_perlengkapan"] = $this->pakaianperlengkapan_m->getAll();
        $data["total_iuranbulanan"] = $this->iuranbulanan_m->getTotal();
        $data["iuran_bulanan"] = $this->iuranbulanan_m->getAll();
        $data["berkas_persyaratan"] = $this->berkaspersyaratan_m->getAll();
        $data["waktu_tempat"] = $this->waktutempat_m->getAll();
        $data["syarat_penerimaan"] = $this->syaratpenerimaan_m->getAll();
        $this->template_user->load('template_user', 'user/pendaftaran', $data);

        // $this->template_user->load('template_user', 'user/pendaftaran', $data);
    }

    function cetak()
    {
        $data = array(
            'title' => 'Cetak Bukti Pendaftaran'
        );

        $data["singledata_calonsantriwali"] = $this->data_formulirpendaftaran_m->getOne();
        $this->load->view('user/cetak_buktipendaftaran', $data);
    }
}