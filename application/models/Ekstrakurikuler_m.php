<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekstrakurikuler_m extends CI_Model
{
    private $_table = "ekstrakurikuler";

    public $id_ekstrakurikuler;
    public $image = "default.jpg";
    public $judul_ekstrakurikuler;
    public $isi_ekstrakurikuler;

    public function rules()
    {
        return [
            [
                'field' => 'judul_ekstrakurikuler',
                'label' => 'judul ekstrakurikuler',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_ekstrakurikuler',
                'label' => 'isi ekstrakurikuler',
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
        return $this->db->get_where($this->_table, ["id_ekstrakurikuler" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_ekstrakurikuler = uniqid();
        $this->image = $this->_uploadImage();
        $this->judul_ekstrakurikuler = $post["judul_ekstrakurikuler"];
        $this->isi_ekstrakurikuler = $post["isi_ekstrakurikuler"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_ekstrakurikuler" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/ekstrakurikuler/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->id_ekstrakurikuler;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}