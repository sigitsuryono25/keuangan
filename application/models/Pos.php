<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pos extends CI_Model
{

    function getPos()
    {
        return $this->db->query("SELECT * FROM tbl_pos");
    }
}

/* End of file ModelName.php */
