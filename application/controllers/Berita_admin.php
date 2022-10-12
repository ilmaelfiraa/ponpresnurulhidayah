<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Berita',
        );

        $data["berita"] = $this->db->query("SELECT * FROM berita join user where berita.id_user = user.id_user")->result();
        $this->template->load('template', 'berita/data_berita', $data);
    }

    public function tambah()
    {
        $berita = $this->berita_m;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('berita_admin'));
        }

        $data = array(
            'title' => 'Tambah Berita',
        );

        $this->template->load('template', 'berita/tambah_berita', $data);
    }

    public function edit($id = null)
    {
        $data = array(
            'title' => 'Edit Berita',
        );

        if (!isset($id)) redirect('berita');

        $berita = $this->berita_m;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->update();
            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect(base_url('berita_admin'));
        }

        $data["berita"] = $berita->getById($id);
        if (!$data["berita"]) show_404();

        $this->template->load('template', 'berita/edit_berita', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->berita_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('berita_admin'));
        }
    }
}