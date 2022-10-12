<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{
    private $_table = "berita";

    public $id_berita;
    public $judul;
    public $slug;
    public $isi_berita;
    public $image = "default.jpg";
    public $created;

    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required'
            ],

            [
                'field' => 'slug',
                'label' => 'slug',
                'rules' => ''
            ],

            [
                'field' => 'isi_berita',
                'label' => 'isi berita',
                'rules' => 'required'
            ],

            [
                'field' => 'created',
                'label' => 'tanggal',
                'rules' => 'required'
            ]
        ];
    }

    function data($number, $offset)
    {
        return $query = $this->db->get('berita', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('berita')->num_rows();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $id])->row();
    }

    public function getSlug($slug)
    {
        return $this->db->get_where($this->_table, ["slug" => $slug])->row();
    }

    function getByDate()
    {
        $sql = $this->db->query('SELECT * FROM berita ORDER BY created DESC');
        return $sql->result();
    }

    function get_two()
    {
        $sql = $this->db->query('SELECT * FROM berita LIMIT 2');
        return $sql->result();
    }

    function getThree()
    {
        $sql = $this->db->query('SELECT * FROM berita LIMIT 3');
        return $sql->result();
    }

    function getDetail_berita()
    {
        $sql = $this->db->query('SELECT berita.id_berita, berita.isi_berita, berita.image, berita.judul, berita.created, user.name FROM berita, user WHERE berita.id_user = user.id_user');
        return $sql->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_berita = uniqid();
        $this->id_user = $this->fungsi->user_login()->id_user;
        $this->judul = $post["judul"];
        $this->slug = $post["slug"];
        $this->isi_berita = $post["isi_berita"];
        $this->image = $this->_uploadImage();
        $this->created = $post["created"];

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id"];
        $this->judul = $post["judul"];
        $this->slug = $post["slug"];
        $this->isi_berita = $post["isi_berita"];
        $this->image = $this->_uploadImage();
        $this->created = $post["created"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('id_berita' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_berita" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/berita/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = $this->judul;
        $config['overwrite']            = true;
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}