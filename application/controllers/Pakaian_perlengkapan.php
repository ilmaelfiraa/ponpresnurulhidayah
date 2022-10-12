<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakaian_perlengkapan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array(
            'title' => 'Pakaian dan Perlengkapan'
        );

        $data["pakaian_perlengkapan"] = $this->pakaianperlengkapan_m->getAll();
        $data['total_hargaputra'] =  $this->pakaianperlengkapan_m->getTotalPutra();
        $data['total_hargaputri'] =  $this->pakaianperlengkapan_m->getTotalPutri();
        $this->template->load('template', 'pendaftaran/pakaian_perlengkapan/pakaian_perlengkapan', $data);
    }

    public function tambah()
    {
        $pakaian_perlengkapan = $this->pakaianperlengkapan_m;
        $validation = $this->form_validation;
        //Validation Rules
        $validation->set_rules('isi_pakaianputra', 'Isi Pakaian Putra', 'trim|required');
        $validation->set_rules('keterangan_putra', 'Keterangan Perlengkapan Putra', 'trim|required');
        $validation->set_rules('harga_putra', 'Harga Perlengkapan Putra', 'trim|required');
        $validation->set_rules('isi_pakaianputri', 'Isi Pakaian Putri', 'trim|required');
        $validation->set_rules('keterangan_putri', 'Keterangan Perlengkapan Putri', 'trim|required');
        $validation->set_rules('harga_putri', 'Harga Perlengkapan Putri', 'trim|required');

        if ($validation->run()) {
            $pakaian_perlengkapan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('pakaian_perlengkapan'));
        }

        $data = array(
            'title' => 'Tambah Pakaian Perlengkapan',
        );

        $this->template->load('template', 'pendaftaran/pakaian_perlengkapan/tambah_pakaianperlengkapan', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pakaianperlengkapan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('pakaian_perlengkapan'));
        }
    }
}