<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iuran_bulanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Rincian Iuran Bulanan'
        );

        $data["iuran_bulanan"] = $this->iuranbulanan_m->getAll();
        $data['total_iuranbulanan'] =  $this->iuranbulanan_m->getTotal();
        $this->template->load('template', 'pendaftaran/iuran_bulanan/iuran_bulanan', $data);
    }

    public function tambah()
    {
        $iuran_bulanan = $this->iuranbulanan_m;
        $validation = $this->form_validation;
        //Validation Rules
        $validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $validation->set_rules('harga', 'Harga', 'trim|required');

        if ($validation->run()) {
            $iuran_bulanan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('iuran_bulanan'));
        }

        $data = array(
            'title' => 'Tambah Iuran',
        );

        $this->template->load('template', 'pendaftaran/iuran_bulanan/tambah_iuranbulanan', $data);
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->iuranbulanan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('iuran_bulanan'));
        }
    }
}