<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iuranbulanan_m extends CI_Model
{
    private $_table = "iuran_bulanan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_iuranbulanan" => $id])->row();
    }

    function getTotal()
    {
        $sql = $this->db->query('SELECT keterangan, SUM(harga) AS total FROM iuran_bulanan');
        return $sql->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_iuranbulanan = uniqid();
        $this->keterangan = $post["keterangan"];
        $this->harga = $post["harga"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_iuranbulanan" => $id));
    }
}