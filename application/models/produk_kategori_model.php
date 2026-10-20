<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_kategori_model extends CI_Model
{
    private $_table = "kategori";

    // Menampilkan semua data kategori
    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->result_array();
    }

    // Menambahkan kategori
    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    // Mengambil kategori berdasarkan ID
    public function get_by_id($id)
    {
        $this->db->where('id_kategori', $id);
        $query = $this->db->get($this->_table);

        return $query->row_array();
    }

    // Menghapus kategori
    public function hapus($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->delete($this->_table);
    }

    // Mengubah kategori
    public function ubah($data, $id)
    {
        $this->db->where('id_kategori', $id);

        if ($this->db->update($this->_table, $data)) {
            return true;
        }

        return false;
    }
}
