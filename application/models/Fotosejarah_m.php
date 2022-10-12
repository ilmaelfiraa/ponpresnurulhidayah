<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fotosejarah_m extends CI_Model
{
    private $_table = "foto_sejarah";

    public $id_fotosejarah;
    public $image = "default.jpg";
    public $keterangan;

    public function rules()
    {
        return [
            [
                'field' => 'keterangan',
                'label' => 'keterangan',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_fotosejarah" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_fotosejarah = uniqid();
        $this->image = $this->_uploadImage();
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_fotosejarah" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/foto_sejarah/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->id_fotosejarah;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}