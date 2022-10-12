<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Kata Sambutan | Pondok Modern Nurul Hidayah'
        );

        $data["kata_sambutan"] = $this->katasambutan_m->getAll();
        $this->template_user->load('template_user', 'user/profil/kata_sambutan', $data);
    }

    public function sejarah()
    {
        $data = array(
            'title' => 'Sejarah'
        );

        $data["sejarah"] = $this->sejarah_m->getAll();
        $this->template_user->load('template_user', 'user/profil/sejarah', $data);
    }

    public function visi_misi()
    {
        $data = array(
            'title' => 'Visi & Misi'
        );

        $data["visi_misi"] = $this->visimisi_m->getAll();
        $this->template_user->load('template_user', 'user/profil/visi_misi', $data);
    }

    public function tentang_kami()
    {
        $data = array(
            'title' => 'Tentang Kami'
        );

        $data["tentang_kami"] = $this->tentangkami_m->getAll();
        $this->template_user->load('template_user', 'user/profil/tentang_kami', $data);
    }

    public function program_pendidikan()
    {
        $data = array(
            'title' => 'Program Pendidikan'
        );

        $data["program_pendidikan"] = $this->programpendidikan_m->getAll();
        $this->template_user->load('template_user', 'user/profil/program_pendidikan', $data);
    }

    public function tenaga_pendidik()
    {
        $data = array(
            'title' => 'Tenaga Pendidik'
        );

        $data["tenaga_pendidik"] = $this->tenagapendidik_m->getAll();
        $this->template_user->load('template_user', 'user/profil/tenaga_pendidik', $data);
    }
}