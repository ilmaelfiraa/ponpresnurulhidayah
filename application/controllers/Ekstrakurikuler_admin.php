<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekstrakurikuler_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Ekstrakurikuler',
        );

        $data["ekstrakurikuler"] = $this->ekstrakurikuler_m->getAll();
        $this->template->load('template', 'ekstrakurikuler/ekstrakurikuler', $data);
    }

    public function tambah()
    {
        $ekstrakurikuler = $this->ekstrakurikuler_m;
        $validation = $this->form_validation;
        $validation->set_rules($ekstrakurikuler->rules());

        if ($validation->run()) {
            $ekstrakurikuler->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('ekstrakurikuler'));
        }

        $data = array(
            'title' => 'Tambah Ekstrakurikuler',
        );

        $this->template->load('template', 'ekstrakurikuler/tambah_ekstrakurikuler', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->ekstrakurikuler_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('ekstrakurikuler'));
        }
    }
}