<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_calonsantriwali_m extends CI_Model
{
    private $_table = "data_calonsantriwali";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_calonsantriwali" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_calonsantriwali = uniqid();
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->pendidikan_terakhir = $post["pendidikan_terakhir"];
        $this->desa_kelurahan = $post["desa_kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupaten_kota = $post["kabupaten_kota"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->no_hp = $post["no_hp"];
        $this->no_wa = $post["no_wa"];
        $this->riwayat_penyakit = $post["riwayat_penyakit"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_calonsantriwali = uniqid();
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->pendidikan_terakhir = $post["pendidikan_terakhir"];
        $this->desa_kelurahan = $post["desa_kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupaten_kota = $post["kabupaten_kota"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->no_hp = $post["no_hp"];
        $this->no_wa = $post["no_wa"];
        $this->riwayat_penyakit = $post["riwayat_penyakit"];

        return $this->db->update($this->_table, $this, array('id_calonsantriwali' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_calonsantriwali" => $id));
    }
}