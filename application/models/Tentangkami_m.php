<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentangkami_m extends CI_Model
{
    private $_table = "tentang_kami";

    public $id_tentangkami;
    public $judul_tentangkami;
    public $isi_tentangkami;

    public function rules()
    {
        return [
            [
                'field' => 'judul_tentangkami',
                'label' => 'judul tentang kami',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_tentangkami',
                'label' => 'isi tentang kami',
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
        return $this->db->get_where($this->_table, ["id_tentangkami" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tentangkami = uniqid();
        $this->judul_tentangkami = $post["judul_tentangkami"];
        $this->isi_tentangkami = $post["isi_tentangkami"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tentangkami" => $id));
    }
}