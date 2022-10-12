<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'title' => 'Fasilitas'
        );

        $data["fasilitas"] = $this->fasilitas_m->getAll();
        $this->template_user->load('template_user', 'user/fasilitas/fasilitas', $data);
    }
}