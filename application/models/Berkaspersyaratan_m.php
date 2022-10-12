<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkaspersyaratan_m extends CI_Model
{
    private $_table = "berkas_persyaratan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_berkaspersyaratan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_berkaspersyaratan = uniqid();
        $this->isi_berkaspersyaratan = $post["isi_berkaspersyaratan"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_berkaspersyaratan" => $id));
    }
}