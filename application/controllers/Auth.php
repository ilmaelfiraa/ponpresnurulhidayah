<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        $data = array(
            'title' => 'Login Ponpres Nurul Hidayah'
        );
        check_already_login();
        $this->load->view('auth/login', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'iduser' => $row->id_user,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
            }
        }
        echo '<script>alert("Login Anda Berhasil!");window.location.href="' . site_url('dashboard') . '";</script>';
    }

    public function logout()
    {
        $params = array('iduser', 'level');
        $this->session->unset_userdata($params);

        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
       Anda berhasil logout!
    </div>');
        redirect('auth/login');
    }
}