<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Syarat_penerimaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Syarat Penerimaan',
        );

        $data["syarat_penerimaan"] = $this->syaratpenerimaan_m->getAll();
        $this->template->load('template', 'pendaftaran/syarat_penerimaan/syarat_penerimaan', $data);
    }

    public function tambah()
    {
        $syarat_penerimaan = $this->syaratpenerimaan_m;
        $validation = $this->form_validation;
        //Validation Rules
        $validation->set_rules('isi_syaratpenerimaan', 'Isi Syarat Penerimaan', 'trim|required');

        if ($validation->run()) {
            $syarat_penerimaan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('syarat_penerimaan'));
        }

        $data = array(
            'title' => 'Tambah Syarat',
        );

        $this->template->load('template', 'pendaftaran/syarat_penerimaan/tambah_syaratpenerimaan', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->syaratpenerimaan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('syarat_penerimaan'));
        }
    }
}