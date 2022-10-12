<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_m extends CI_Model
{
    private $_table = "fasilitas";

    public $id_fasilitas;
    public $judul_fasilitas;
    public $image = "default.jpg";
    public $isi_fasilitas;

    public function rules()
    {
        return [
            [
                'field' => 'judul_fasilitas',
                'label' => 'judul fasilitas',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_fasilitas',
                'label' => 'isi fasilitas',
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
        return $this->db->get_where($this->_table, ["id_fasilitas" => $id])->row();
    }

    function getOne()
    {
        $sql = $this->db->query('SELECT * FROM fasilitas LIMIT 1');
        return $sql->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_fasilitas = uniqid();
        $this->judul_fasilitas = $post["judul_fasilitas"];
        $this->image = $this->_uploadImage();
        $this->isi_fasilitas = $post["isi_fasilitas"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_fasilitas = $post["id"];
        $this->judul_fasilitas = $post["judul_fasilitas"];
        $this->image = $this->_uploadImage();
        $this->isi_fasilitas = $post["isi_fasilitas"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('id_fasilitas' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_fasilitas" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/fasilitas/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->id_fasilitas;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}