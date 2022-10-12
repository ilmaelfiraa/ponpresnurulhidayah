<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_pendidikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Program Pendidikan',
        );

        $data["program_pendidikan"] = $this->programpendidikan_m->getAll();
        $this->template->load('template', 'profil/program_pendidikan/program_pendidikan', $data);
    }

    public function tambah()
    {
        $program_pendidikan = $this->programpendidikan_m;
        $validation = $this->form_validation;
        $validation->set_rules($program_pendidikan->rules());

        if ($validation->run()) {
            $program_pendidikan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('program_pendidikan'));
        }

        $data = array(
            'title' => 'Tambah Program Pendidikan',
        );

        $this->template->load('template', 'profil/program_pendidikan/tambah_programpendidikan', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->programpendidikan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('program_pendidikan'));
        }
    }
}