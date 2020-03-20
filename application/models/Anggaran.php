<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Anggaran extends CI_Model
{

    function getBulan()
    {
        return $this->db->query("SELECT * FROM tbl_bulan ");
    }

    function getPos($idKategori)
    {
        return $this->db->query("SELECT * FROM tbl_pos WHERE id_kategori='$idKategori'");
    }

    function insertData($tableName, $data)
    {
        $this->db->insert($tableName, $data);
        return $this->db->affected_rows();
    }
}
