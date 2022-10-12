<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Syaratpenerimaan_m extends CI_Model
{
    private $_table = "syarat_penerimaan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_syaratpenerimaan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_syaratpenerimaan = uniqid();
        $this->isi_syaratpenerimaan = $post["isi_syaratpenerimaan"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_syaratpenerimaan" => $id));
    }
}