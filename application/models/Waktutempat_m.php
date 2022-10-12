<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waktutempat_m extends CI_Model
{
    private $_table = "waktu_tempat";

    public $id_waktutempat;
    public $judul_waktutempat;
    public $isi_waktutempat;

    public function rules()
    {
        return [
            [
                'field' => 'judul_waktutempat',
                'label' => 'judul waktu tempat',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_waktutempat',
                'label' => 'isi waktu tempat',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_waktutempat" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_waktutempat = uniqid();
        $this->judul_waktutempat = $post["judul_waktutempat"];
        $this->isi_waktutempat = $post["isi_waktutempat"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_waktutempat" => $id));
    }
}