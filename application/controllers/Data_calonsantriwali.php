<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_calonsantriwali extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Calon Santri & Wali'
        );

        $data["data_calonsantriwali"] = $this->data_calonsantriwali_m->getAll();
        $this->template_table->load('template_table', 'pendaftaran/data_calonsantriwali/data_calonsantriwali', $data);
    }

    public function tambah()
    {
        $data_calonsantriwali = $this->data_calonsantriwali_m;
        $validation = $this->form_validation;
        //Validation Rules
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
            $data_calonsantriwali->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('data_calonsantriwali'));
        }

        $data = array(
            'title' => 'Tambah Calon Santri Wali',
        );

        $this->template_table->load('template_table', 'pendaftaran/data_calonsantriwali/tambah_calonsantriwali', $data);
    }

    public function edit($id = null)
    {
        $data = array(
            'title' => 'Edit Calon Santri Wali',
        );

        if (!isset($id)) redirect('data_calonsantriwali');

        $data_calonsantriwali = $this->data_calonsantriwali_m;
        $validation = $this->form_validation;
        //Validation Rules
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
            $data_calonsantriwali->update();
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect(base_url('data_calonsantriwali'));
        }

        $data["data_calonsantriwali"] = $data_calonsantriwali->getById($id);
        if (!$data["data_calonsantriwali"]) show_404();

        $this->template_table->load('template_table', 'pendaftaran/data_calonsantriwali/edit_calonsantriwali', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->data_calonsantriwali_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('data_calonsantriwali'));
        }
    }
}