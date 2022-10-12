<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tenaga_pendidik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Tenaga Pendidik',
        );

        $data["tenaga_pendidik"] = $this->tenagapendidik_m->getAll();
        $this->template->load('template', 'profil/tenaga_pendidik/tenaga_pendidik', $data);
    }

    public function tambah()
    {
        $tenaga_pendidik = $this->tenagapendidik_m;
        $validation = $this->form_validation;
        $validation->set_rules($tenaga_pendidik->rules());

        if ($validation->run()) {
            $tenaga_pendidik->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('tenaga_pendidik'));
        }

        $data = array(
            'title' => 'Tambah Tenaga Pendidik',
        );

        $this->template->load('template', 'profil/tenaga_pendidik/tambah_tenagapendidik', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->tenagapendidik_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('tenaga_pendidik'));
        }
    }
}