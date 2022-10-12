<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto_prestasi_santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Foto Prestasi Santri',
        );

        $data["foto_prestasi_santri"] = $this->fotoprestasisantri_m->getAll();
        $this->template->load('template', 'album/foto_prestasi_santri', $data);
    }

    public function tambah()
    {
        $foto_prestasi_santri = $this->fotoprestasisantri_m;
        $validation = $this->form_validation;
        $validation->set_rules($foto_prestasi_santri->rules());

        if ($validation->run()) {
            $foto_prestasi_santri->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('foto_prestasi_santri'));
        }

        $data = array(
            'title' => 'Tambah Foto Prestasi Santri',
        );

        $this->template->load('template', 'album/tambah_fotoprestasisantri', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->fotoprestasisantri_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('foto_prestasi_santri'));
        }
    }
}