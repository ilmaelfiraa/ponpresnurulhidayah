<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah_m extends CI_Model
{
    private $_table = "sejarah";

    public $id_sejarah;
    public $judul_sejarah;
    public $isi_sejarah;

    public function rules()
    {
        return [
            [
                'field' => 'judul_sejarah',
                'label' => 'judul sejarah',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_sejarah',
                'label' => 'isi sejarah',
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
        return $this->db->get_where($this->_table, ["id_sejarah" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_sejarah = uniqid();
        $this->judul_sejarah = $post["judul_sejarah"];
        $this->isi_sejarah = $post["isi_sejarah"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_sejarah" => $id));
    }
}