<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    function insert_data($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    function getAll($table)
    {
        return $this->db->get($table);
    }
}
