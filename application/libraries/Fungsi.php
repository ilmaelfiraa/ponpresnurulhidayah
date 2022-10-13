<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $iduser = $this->ci->session->userdata('iduser');
        $user_data = $this->ci->user_m->get($iduser)->row();
        return $user_data;
    }
}
