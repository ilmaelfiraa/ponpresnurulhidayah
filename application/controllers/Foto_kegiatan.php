<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Foto Kegiatan',
        );

        $data["foto_kegiatan"] = $this->fotokegiatan_m->getAll();
        $this->template->load('template', 'album/foto_kegiatan', $data);
    }

    public function tambah()
    {
        $foto_kegiatan = $this->fotokegiatan_m;
        $validation = $this->form_validation;
        $validation->set_rules($foto_kegiatan->rules());

        if ($validation->run()) {
            $foto_kegiatan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('foto_kegiatan'));
        }

        $data = array(
            'title' => 'Tambah Foto Kegiatan',
        );

        $this->template->load('template', 'album/tambah_fotokegiatan', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->fotokegiatan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('foto_kegiatan'));
        }
    }
}