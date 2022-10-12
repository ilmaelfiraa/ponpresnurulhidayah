<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benner_tambah extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Tambah Benner'
        );
        $this->template->load('template', 'benner/tambah_benner', $data);
    }
}