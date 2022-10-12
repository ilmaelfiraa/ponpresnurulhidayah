<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biayakeseluruhan_m extends CI_Model
{
    private $_table = "biaya_keseluruhan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_biayakeseluruhan" => $id])->row();
    }

    function getTotalPutra()
    {
        $sql = $this->db->query('SELECT SUM(harga_putra) AS total_hargaputra FROM biaya_keseluruhan');
        return $sql->result();
    }

    function getTotalPutri()
    {
        $sql = $this->db->query('SELECT SUM(harga_putri) AS total_hargaputri FROM biaya_keseluruhan');
        return $sql->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_biayakeseluruhan = uniqid();
        $this->keterangan_putra = $post["keterangan_putra"];
        $this->harga_putra = $post["harga_putra"];
        $this->keterangan_putri = $post["keterangan_putri"];
        $this->harga_putri = $post["harga_putri"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_biayakeseluruhan" => $id));
    }
}