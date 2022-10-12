<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel_m extends CI_Model
{
    private $_table = "carousel";

    public $id_carousel;
    public $judul_carousel;
    public $image = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'judul_carousel',
                'label' => 'judul carousel',
                'rules' => 'required'
            ],

            [
                'field' => 'paragraf_carousel',
                'label' => 'paragraf carousel',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    function carouselGetAll()
    {
        $query = "SELECT * FROM carousel";
        return $this->db->query($query)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_carousel" => $id])->row();
    }

    function getOne()
    {
        $sql = $this->db->query('SELECT * FROM carousel LIMIT 1');
        return $sql->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_carousel = uniqid();
        $this->judul_carousel = $post["judul_carousel"];
        $this->paragraf_carousel = $post["paragraf_carousel"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_carousel = $post["id"];
        $this->judul_carousel = $post["judul_carousel"];
        $this->paragraf_carousel = $post["paragraf_carousel"];
        $this->image = $this->_uploadImage();

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('id_carousel' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_carousel" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/carousel/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->id_carousel;
        $config['overwrite']            = true;
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}