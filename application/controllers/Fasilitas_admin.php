<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Fasilitas',
        );

        $data["fasilitas"] = $this->fasilitas_m->getAll();
        $this->template->load('template', 'fasilitas/data_fasilitas', $data);
    }

    public function tambah()
    {
        $fasilitas = $this->fasilitas_m;
        $validation = $this->form_validation;
        $validation->set_rules($fasilitas->rules());

        if ($validation->run()) {
            $fasilitas->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('fasilitas_admin'));
        }

        $data = array(
            'title' => 'Tambah Fasilitas',
        );

        $this->template->load('template', 'fasilitas/tambah_fasilitas', $data);
    }

    public function edit($id = null)
    {
        $data = array(
            'title' => 'Edit Fasilitas',
        );

        if (!isset($id)) redirect('fasilitas');

        $fasilitas = $this->fasilitas_m;
        $validation = $this->form_validation;
        $validation->set_rules($fasilitas->rules());

        if ($validation->run()) {
            $fasilitas->update();
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect(base_url('fasilitas_admin'));
        }

        $data["fasilitas"] = $fasilitas->getById($id);
        if (!$data["fasilitas"]) show_404();

        $this->template->load('template', 'fasilitas/edit_fasilitas', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->fasilitas_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('fasilitas_admin'));
        }
    }
}