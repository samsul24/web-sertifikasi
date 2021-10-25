<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Model extends CI_Model
{
    public function read($table, $where = null)
    {
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get($table);
    }
}
