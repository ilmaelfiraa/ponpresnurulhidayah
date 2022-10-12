<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $data_berita = $this->db->count_all('berita');
        $data_fasilitas = $this->db->count_all('fasilitas');
        $data_pendaftaran = $this->db->count_all('data_calonsantriwali');

        $data = array(
            'jml_berita' => $data_berita,
            'jml_fasilitas' => $data_fasilitas,
            'jml_pendaftaran' => $data_pendaftaran,
            'title' => 'Dashboard'
        );
        $this->template->load('template', 'dashboard', $data);
    }
}