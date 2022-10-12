<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Pondok Modern Nurul Hidayah Bantan'
        );

        $data["fasilitas_beranda"] = $this->fasilitas_m->getOne();
        $data["berita_beranda"] = $this->berita_m->getThree();
        $data["kata_sambutan"] = $this->katasambutan_m->getAll();
        $data["carousel"] = $this->carousel_m->getAll();
        $this->template_user->load('template_user', 'user/index', $data);
    }
}