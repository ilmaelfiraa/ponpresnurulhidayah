<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filebrosur_m extends CI_Model
{
    private $_table = "file_brosur";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_filebrosur" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_filebrosur = uniqid();
        $this->keterangan = $post["keterangan"];
        $this->file = $this->_uploadFile();
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_filebrosur" => $id));
    }

    function _uploadFile()
    {
        $config['upload_path']          = './upload/file/';
        $config['allowed_types']        = 'pdf';
        $config['overwrite']            = true;
        $config['max_size']             = 500000;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
    }
}