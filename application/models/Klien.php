<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Klien extends CI_Model
{

    public function getAll()
    {
        return $this->db->get("tbl_klien")->result();
    }

    public function getById($id)
    {
        return $this->db->get_where("tbl_klien", ["id_klien" => $id])->row();
    }

    function getKlien()
    {
        return $this->db->query("SELECT * FROM tbl_klien");
    }

    function insertData($tableName, $data)
    {
        $this->db->insert($tableName, $data);
        return $this->db->affected_rows();
    }

    function updateData($tableName, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($tableName, $data);
        return  $this->db->affected_rows();
    }

    function deleteData($tableName, $where)
    {
        $this->db->where($where);
        $this->db->delete($tableName);
        return $this->db->affected_rows();
    }   
    
}

/* End of file ModelName.php */
