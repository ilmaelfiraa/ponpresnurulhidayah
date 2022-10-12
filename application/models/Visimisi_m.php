<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi_m extends CI_Model
{
    private $_table = "visi_misi";

    public $id_visimisi;
    public $judul_visimisi;
    public $isi_visimisi;

    public function rules()
    {
        return [
            [
                'field' => 'judul_visimisi',
                'label' => 'judul visi misi',
                'rules' => 'required'
            ],

            [
                'field' => 'isi_visimisi',
                'label' => 'isi visi misi',
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
        return $this->db->get_where($this->_table, ["id_visimisi" => $id])->row();
    }

    public function tambah($post)
    {
        $params['judul_visimisi'] = $post['judul_visimisi'];
        $params['isi_visimisi'] = $post['isi_visimisi'];

        $this->db->insert('visi_misi', $params);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_visimisi" => $id));
    }
}