<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Agenda',
        );

        $data["agenda"] = $this->agenda_m->getAll();
        $this->template->load('template', 'berita/agenda', $data);
    }

    public function tambah()
    {
        $agenda = $this->agenda_m;
        $validation = $this->form_validation;
        $validation->set_rules($agenda->rules());

        if ($validation->run()) {
            $agenda->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('agenda_admin'));
        }

        $data = array(
            'title' => 'Tambah Agenda',
        );

        $this->template->load('template', 'berita/tambah_agenda', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->agenda_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('agenda_admin'));
        }
    }
}
