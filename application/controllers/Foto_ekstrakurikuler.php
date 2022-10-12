<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_ekstrakurikuler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Foto Ekstrakurikuler',
        );

        $data["foto_ekstrakurikuler"] = $this->fotoekstrakurikuler_m->getAll();
        $this->template->load('template', 'album/foto_ekstrakurikuler', $data);
    }

    public function tambah()
    {
        $foto_ekstrakurikuler = $this->fotoekstrakurikuler_m;
        $validation = $this->form_validation;
        $validation->set_rules($foto_ekstrakurikuler->rules());

        if ($validation->run()) {
            $foto_ekstrakurikuler->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('foto_ekstrakurikuler'));
        }

        $data = array(
            'title' => 'Tambah Foto Ekstrakurikuler',
        );

        $this->template->load('template', 'album/tambah_fotoekstrakurikuler', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->fotoekstrakurikuler_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('foto_ekstrakurikuler'));
        }
    }
}