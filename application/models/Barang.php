<?php 

class Barang extends CI_Model
{
    private $_table = "transaksi";

    public $id_barang;
    public $nama_barang;
    public $stok;

    public function rules()
    {
        return [
            ['field' => 'nama_barang',
            'label' => 'Name Barang',
            'rules' => 'required'],

            ['field' => 'stok',
            'label' => 'stok',
            'rules' => 'numeric']
        ];
    }
    
    public function getBarang()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getBarangWithLimit($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start);
    }
    
    public function getBarangById($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_barang = $post["nama_barang"];
        $this->stok = $post["stok"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id"];
        $this->nama_barang = $post["nama_barang"];
        $this->stok = $post["stok"];
        $this->db->update($this->_table, $this, array('id_barang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id));
    }
}