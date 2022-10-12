<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Carousel',
        );

        $data["carousel"] = $this->carousel_m->getAll();
        $this->template->load('template', 'carousel/carousel', $data);
    }

    public function tambah()
    {
        $carousel = $this->carousel_m;
        $validation = $this->form_validation;
        $validation->set_rules($carousel->rules());

        if ($validation->run()) {
            $carousel->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('carousel'));
        }

        $data = array(
            'title' => 'Tambah Carousel',
        );

        $this->template->load('template', 'carousel/tambah_carousel', $data);
    }

    public function edit($id = null)
    {
        $data = array(
            'title' => 'Edit Carousel',
        );

        if (!isset($id)) redirect('carousel');

        $carousel = $this->carousel_m;
        $validation = $this->form_validation;
        $validation->set_rules($carousel->rules());

        if ($validation->run()) {
            $carousel->update();
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect(base_url('carousel'));
        }

        $data["carousel"] = $carousel->getById($id);
        if (!$data["carousel"]) show_404();

        $this->template->load('template', 'carousel/edit_carousel', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->carousel_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('carousel'));
        }
    }
}