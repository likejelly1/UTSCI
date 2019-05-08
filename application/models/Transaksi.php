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
    public function getTransaksi()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getSumTransaksi()
    {
        $this->db->select('year, SUM(stok_masuk) AS stok');
        $this->db->group_by("year");
        return $qwer = $this->db->get($this->_table)->result();
    }
}


?>