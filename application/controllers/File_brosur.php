<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_brosur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'download'));
    }

    public function index()
    {
        $data = array(
            'title' => 'File Brosur'
        );

        $data["file_brosur"] = $this->filebrosur_m->getAll();
        $this->template->load('template', 'pendaftaran/file_brosur/file_brosur', $data);
    }

    public function tambah()
    {
        $file_brosur = $this->filebrosur_m;
        $validation = $this->form_validation;
        //Validation Rules
        $validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($validation->run()) {
            $file_brosur->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('file_brosur'));
        }

        $data = array(
            'title' => 'Tambah File',
        );

        $this->template->load('template', 'pendaftaran/file_brosur/tambah_filebrosur', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->filebrosur_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('file_brosur'));
        }
    }

    public function download()
    {
        force_download('upload/file/file_brosur.pdf', NULL);
    }
}