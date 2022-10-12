<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biaya_keseluruhan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Biaya Keseluruhan Santri Baru'
        );

        $data["biaya_keseluruhan"] = $this->biayakeseluruhan_m->getAll();
        $data['total_hargaputra'] =  $this->biayakeseluruhan_m->getTotalPutra();
        $data['total_hargaputri'] =  $this->biayakeseluruhan_m->getTotalPutri();
        $this->template->load('template', 'pendaftaran/biaya_keseluruhan/biaya_keseluruhan', $data);
    }

    public function tambah()
    {
        $biaya_keseluruhan = $this->biayakeseluruhan_m;
        $validation = $this->form_validation;
        //Validation Rules
        $validation->set_rules('keterangan_putra', 'Keterangan Putra', 'trim|required');
        $validation->set_rules('harga_putra', 'Harga Putra', 'trim|required');
        $validation->set_rules('keterangan_putri', 'Keterangan Putri', 'trim|required');
        $validation->set_rules('harga_putri', 'Harga Putri', 'trim|required');

        if ($validation->run()) {
            $biaya_keseluruhan->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');

            redirect(base_url('biaya_keseluruhan'));
        }

        $data = array(
            'title' => 'Tambah Biaya',
        );

        $this->template->load('template', 'pendaftaran/biaya_keseluruhan/tambah_biayakeseluruhan', $data);
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->biayakeseluruhan_m->delete($id)) {
            $this->session->set_flashdata('success', 'Data telah dihapus');
            redirect(site_url('biaya_keseluruhan'));
        }
    }
}