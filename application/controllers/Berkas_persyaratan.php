<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas_persyaratan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Berkas Persyaratan'
        );

        $data["berkas_persyaratan"] = $this->berkaspersyaratan_m->getAll();
        $this->template->load('template', 'pendaftaran/berkas_persyaratan/berkas_persyaratan', $data);
    }

    public function tambah()
    {
        $berkas_persyaratan = $this->berkaspersyaratan_m;
        $validation = $this->form_validation;
        //Validation Rules
        $validation->set_rules('isi_berkaspersyaratan', 'Isi Berkas Persyaratan', 'trim|required');

        if ($validation->run()) {
            $berkas_persyaratan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('berkas_persyaratan'));
        }

        $data = array(
            'title' => 'Tambah Berkas',
        );

        $this->template->load('template', 'pendaftaran/berkas_persyaratan/tambah_berkaspersyaratan', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->berkaspersyaratan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('berkas_persyaratan'));
        }
    }
}