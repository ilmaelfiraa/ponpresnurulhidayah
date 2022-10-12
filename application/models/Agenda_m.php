<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_m extends CI_Model
{
    private $_table = "agenda";

    public $id_agenda;
    public $judul;
    public $tanggal;
    public $waktu;
    public $lokasi;
    public $slug;

    public function rules()
    {
        return [
            [
                'field' => 'tanggal',
                'label' => 'tanggal',
                'rules' => 'required'
            ],

            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required'
            ],

            [
                'field' => 'slug',
                'label' => 'slug',
                'rules' => ''
            ],

            [
                'field' => 'waktu',
                'label' => 'waktu',
                'rules' => 'required|strip_tags'
            ],

            [
                'field' => 'lokasi',
                'label' => 'lokasi',
                'rules' => 'required|strip_tags'
            ],
        ];
    }

    function data($number, $offset)
    {
        return $query = $this->db->get('agenda', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('agenda')->num_rows();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_agenda" => $id])->row();
    }

    public function getSlug($slug)
    {
        return $this->db->get_where($this->_table, ["slug" => $slug])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_agenda = uniqid();
        $this->tanggal = $post["tanggal"];
        $this->judul = $post["judul"];
        $this->slug = $post["slug"];
        $this->waktu = $post["waktu"];
        $this->lokasi = $post["lokasi"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_agenda" => $id));
    }
}
