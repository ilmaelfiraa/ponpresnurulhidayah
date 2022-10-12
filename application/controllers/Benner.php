<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Benner',
        );

        $data["benner"] = $this->benner_m->getAll();
        $this->template->load('template', 'benner/benner', $data);
    }

    public function tambah()
    {
        $benner = $this->benner_m;

        if ($benner->save()) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }

        $this->template->load('template', 'benner', redirect('benner'));
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->benner_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('benner'));
        }
    }
}