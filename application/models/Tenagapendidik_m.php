<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tenagapendidik_m extends CI_Model
{
    private $_table = "tenaga_pendidik";

    public $id_tenagapendidik;
    public $nama_tenagapendidik;
    public $image = "default.jpg";
    public $jabatan_tenagapendidik;

    public function rules()
    {
        return [
            [
                'field' => 'nama_tenagapendidik',
                'label' => 'nama tenaga pendidik',
                'rules' => 'required'
            ],

            [
                'field' => 'jabatan_tenagapendidik',
                'label' => 'jabatan tenaga pendidik',
                'rules' => 'required|strip_tags'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tenagapendidik" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tenagapendidik = uniqid();
        $this->nama_tenagapendidik = $post["nama_tenagapendidik"];
        $this->image = $this->_uploadImage();
        $this->jabatan_tenagapendidik = $post["jabatan_tenagapendidik"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tenagapendidik" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/profil/';
        $config['allowed_types']        = 'jpg|png|jpeg|svg';
        $config['file_name']            = $this->id_tenagapendidik;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}