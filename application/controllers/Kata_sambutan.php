<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kata_sambutan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Kata Sambutan',
        );

        $data["kata_sambutan"] = $this->katasambutan_m->getAll();
        $this->template->load('template', 'profil/kata_sambutan/kata_sambutan', $data);
    }

    public function tambah()
    {
        $data = array(
            'title' => 'Tambah Kata Sambutan'
        );

        $this->form_validation->set_rules('judul_katasambutan', 'Judul Kata Sambutan', 'trim|required');
        $this->form_validation->set_rules('isi_katasambutan', 'Isi Kata Sambutan', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');

        $katasambutan_m = $this->katasambutan_m;
        $validation = $this->form_validation;
        // $validation->set_rules($note->rules());

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'profil/kata_sambutan/tambah_katasambutan', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->katasambutan_m->tambah($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil ditambah!');
            }
            redirect('kata_sambutan');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->katasambutan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('kata_sambutan'));
        }
    }
}