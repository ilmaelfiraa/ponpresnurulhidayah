<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_sejarah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Foto Sejarah',
        );

        $data["foto_sejarah"] = $this->fotosejarah_m->getAll();
        $this->template->load('template', 'album/foto_sejarah', $data);
    }

    public function tambah()
    {
        $foto_sejarah = $this->fotosejarah_m;
        $validation = $this->form_validation;
        $validation->set_rules($foto_sejarah->rules());

        if ($validation->run()) {
            $foto_sejarah->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('foto_sejarah'));
        }

        $data = array(
            'title' => 'Tambah Foto Sejarah',
        );

        $this->template->load('template', 'album/tambah_fotosejarah', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->fotosejarah_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('foto_sejarah'));
        }
    }
}