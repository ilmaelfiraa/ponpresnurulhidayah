<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Tentang Kami'
        );
        $data["tentang_kami"] = $this->tentangkami_m->getAll();
        $this->template->load('template', 'profil/tentang_kami/tentang_kami', $data);
    }

    public function tambah()
    {
        $tentang_kami = $this->tentangkami_m;
        $validation = $this->form_validation;
        $validation->set_rules($tentang_kami->rules());

        if ($validation->run()) {
            $tentang_kami->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('tentang_kami'));
        }

        $data = array(
            'title' => 'Tambah Tentang Kami',
        );

        $this->template->load('template', 'profil/tentang_kami/tambah_tentangkami', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->tentangkami_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('tentang_kami'));
        }
    }
}