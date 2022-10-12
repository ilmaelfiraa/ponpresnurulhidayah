<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_alumni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Foto Alumni',
        );

        $data["foto_alumni"] = $this->fotoalumni_m->getAll();
        $this->template->load('template', 'album/foto_alumni', $data);
    }

    public function tambah()
    {
        $foto_alumni = $this->fotoalumni_m;
        $validation = $this->form_validation;
        $validation->set_rules($foto_alumni->rules());

        if ($validation->run()) {
            $foto_alumni->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('foto_alumni'));
        }

        $data = array(
            'title' => 'Tambah Foto Alumni',
        );

        $this->template->load('template', 'album/tambah_fotoalumni', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->fotoalumni_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('foto_alumni'));
        }
    }
}