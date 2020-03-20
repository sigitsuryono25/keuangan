<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Staf extends CI_Model
{

    function getStaf()
    {
        return $this->db->query("SELECT * FROM tbl_staf");
    }
}

/* End of file ModelName.php */
