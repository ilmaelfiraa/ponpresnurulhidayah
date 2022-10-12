<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waktu_tempat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Waktu dan Tempat Pendaftaran'
        );
        $data["waktu_tempat"] = $this->waktutempat_m->getAll();
        $this->template->load('template', 'pendaftaran/waktu_tempat/waktu_tempat', $data);
    }

    public function tambah()
    {
        $waktu_tempat = $this->waktutempat_m;
        $validation = $this->form_validation;
        $validation->set_rules($waktu_tempat->rules());

        if ($validation->run()) {
            $waktu_tempat->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('waktu_tempat'));
        }

        $data = array(
            'title' => 'Tambah Waktu dan Tempat',
        );

        $this->template->load('template', 'pendaftaran/waktu_tempat/tambah_waktutempat', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->waktutempat_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('waktu_tempat'));
        }
    }
}