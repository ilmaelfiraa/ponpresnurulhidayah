<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Sejarah',
        );

        $data["sejarah"] = $this->sejarah_m->getAll();
        $this->template->load('template', 'profil/sejarah/sejarah', $data);
    }

    public function tambah()
    {
        $sejarah = $this->sejarah_m;
        $validation = $this->form_validation;
        $validation->set_rules($sejarah->rules());

        if ($validation->run()) {
            $sejarah->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('sejarah'));
        }

        $data = array(
            'title' => 'Tambah Kata Sambutan',
        );

        $this->template->load('template', 'profil/sejarah/tambah_sejarah', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->sejarah_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('sejarah'));
        }
    }
}