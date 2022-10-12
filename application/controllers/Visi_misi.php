<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi_misi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Visi & Misi'
        );
        $data["visi_misi"] = $this->visimisi_m->getAll();
        $this->template->load('template', 'profil/visi_misi/visi_misi', $data);
    }

    public function tambah()
    {
        $data = array(
            'title' => 'Tambah Visi Misi'
        );

        $this->form_validation->set_rules('judul_visimisi', 'Judul Visi Misi', 'trim|required');
        $this->form_validation->set_rules('isi_visimisi', 'Isi Visi Misi', 'trim|required');

        $visi_misi = $this->visimisi_m;
        $validation = $this->form_validation;
        // $validation->set_rules($note->rules());

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'profil/visi_misi/tambah_visimisi', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->visimisi_m->tambah($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil ditambah!');
            }
            redirect('visi_misi');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->visimisi_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('visi_misi'));
        }
    }
}