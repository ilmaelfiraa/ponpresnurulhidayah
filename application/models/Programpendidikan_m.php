<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Programpendidikan_m extends CI_Model
{
    private $_table = "program_pendidikan";

    public $id_programpendidikan;
    public $judul_programpendidikan;
    public $keterangan;

    public function rules()
    {
        return [
            [
                'field' => 'judul_programpendidikan',
                'label' => 'judul program pendidikan',
                'rules' => 'required'
            ],

            [
                'field' => 'keterangan',
                'label' => 'keterangan',
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
        return $this->db->get_where($this->_table, ["id_programpendidikan" => $id])->row();
    }

    function getOne()
    {
        $sql = $this->db->query('SELECT * FROM program_pendidikan LIMIT 1');
        return $sql->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_programpendidikan = uniqid();
        $this->judul_programpendidikan = $post["judul_programpendidikan"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_programpendidikan" => $id));
    }
}