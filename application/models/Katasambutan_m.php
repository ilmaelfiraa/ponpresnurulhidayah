<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katasambutan_m extends CI_Model
{
    private $_table = "kata_sambutan";

    public $id_katasambutan;
    public $judul_katasambutan;
    public $image = "default.jpg";
    public $isi_katasambutan;
    public $nama;
    public $jabatan;

    public function rules()
    {
        return [
            [
                'field' => 'judul_katasambutan',
                'label' => 'judul kata sambutan',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_katasambutan',
                'label' => 'isi kata sambutan',
                'rules' => 'required|strip_tags'
            ],

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required|strip_tags'
            ],

            [
                'field' => 'jabatan',
                'label' => 'jabatan',
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
        return $this->db->get_where($this->_table, ["id_katasambutan" => $id])->row();
    }

    public function tambah($post)
    {
        $this->id_katasambutan = uniqid();
        $this->judul_katasambutan = $post["judul_katasambutan"];
        $this->image = $this->_uploadImage();
        $this->isi_katasambutan = $post["isi_katasambutan"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_katasambutan" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/profil/';
        $config['allowed_types']        = 'jpg|png|jpeg|svg';
        $config['file_name']            = $this->judul_katasambutan;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}