<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data = array(
            'title' => 'Berita'
        );

        $data["berita"] = $this->berita_m->getByDate();
        $this->template_user->load('template_user', 'user/berita/berita', $data);
    }

    function detail_berita($slug = null)
    {
        $data = array(
            'title' => 'Detail Berita'
        );

        $berita = $this->berita_m;
        $data["berita"] = $berita->getSlug($slug);
        if (!$data["berita"]) show_404();

        $data["berita_lainnya"] = $this->berita_m->get_two();
        if (!$data["berita_lainnya"]) show_404();

        $this->template_user->load('template_user', 'user/berita/detail_berita', $data);
    }

    public function agenda()
    {
        $data = array(
            'title' => 'Agenda'
        );

        $this->load->database();
        $jumlah_data = $this->agenda_m->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'berita/agenda';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 6;
        $config['use_page_numbers'] = true;
        $config['num_links']        = 3;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['agenda'] = $this->agenda_m->data($config['per_page'], $from);
        $this->template_user->load('template_user', 'user/berita/agenda', $data);
    }

    function detail_agenda($slug = null)
    {
        $data = array(
            'title' => 'Detail Agenda'
        );

        $agenda = $this->agenda_m;
        $data["agenda"] = $agenda->getSlug($slug);
        if (!$data["agenda"]) show_404();


        $this->template_user->load('template_user', 'user/berita/detail_agenda', $data);
    }
}