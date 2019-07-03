<?php

class Barang_model extends CI_Model{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();

    }

    public function tambahDataBarang()
    {

    $data = array(  
        "id" => $_POST['id'],
        "nama_barang" => $_POST['nama_barang'],
        "harga_barang" => $_POST['harga_barang'],
        "satuan_barang" => $_POST['satuan_barang']

    );

    $this->db->insert('barang',$data);

    }

    public function hapusDataBarang($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('barang');
    }
    
    public function getBarangById($id)
    {
        return $this->db->get_where('barang',['id' => $id])->row_array();
    }

    public function ubahDataBarang()
    {

    $data = array(  
        "nama_barang" => $_POST['nama_barang'],
        "harga_barang" => $_POST['harga_barang'],
        "satuan_barang" => $_POST['satuan_barang']

    );

    $this->db->where('id',$this->input->post('id'));
    $this->db->update('barang',$data);

    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('id',$keyword);
        $this->db->or_like('nama_barang',$keyword);
        $this->db->or_like('harga_barang',$keyword);
        return $this->db->get('barang')->result_array();

    }


}