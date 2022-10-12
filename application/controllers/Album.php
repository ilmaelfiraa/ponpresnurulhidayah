<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Album extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function foto_sejarah()
    {
        $data = array(
            'title' => 'Foto Sejarah'
        );
        $data["foto_sejarah"] = $this->fotosejarah_m->getAll();
        $this->template_user->load('template_user', 'user/album/foto_sejarah', $data);
    }

    public function foto_kegiatan()
    {
        $data = array(
            'title' => 'Foto Kegiatan'
        );

        $data["foto_kegiatan"] = $this->fotokegiatan_m->getAll();
        $this->template_user->load('template_user', 'user/album/foto_kegiatan', $data);
    }

    public function foto_ekstrakurikuler()
    {
        $data = array(
            'title' => 'Foto Ekstrakurikuler'
        );

        $data["foto_ekstrakurikuler"] = $this->fotoekstrakurikuler_m->getAll();
        $this->template_user->load('template_user', 'user/album/foto_ekstrakurikuler', $data);
    }

    public function foto_prestasi_santri()
    {
        $data = array(
            'title' => 'Foto Prestasi Santri'
        );

        $data["foto_prestasi_santri"] = $this->fotoprestasisantri_m->getAll();
        $this->template_user->load('template_user', 'user/album/foto_prestasi_santri', $data);
    }

    public function foto_alumni()
    {
        $data = array(
            'title' => 'Foto Alumni'
        );

        $data["foto_alumni"] = $this->fotoalumni_m->getAll();
        $this->template_user->load('template_user', 'user/album/foto_alumni', $data);
    }
}