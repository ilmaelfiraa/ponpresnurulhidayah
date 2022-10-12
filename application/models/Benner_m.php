<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Benner_m extends CI_Model
{
    private $_table = "benner";

    public $id_benner;
    public $image = "default.jpg";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_benner" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_benner = uniqid();
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_benner" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/benner/';
        $config['allowed_types']        = 'jpg|png|jpeg|svg';
        $config['file_name']            = $this->id_benner;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}