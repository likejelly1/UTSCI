<?php

class Transaksi extends CI_Model
{
    private $_table = "transaksi";

    public function getTransaksiWithLimit($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start);
    }

    public function getTransaksiId($id)
    {
        $this->db->where('id',$id);
        return $this->db->get($this->_table)->result();
    }
}


?>