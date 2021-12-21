<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk_m extends CI_Model
{

    public function get_data()
    {
        $dt = $this->db
            ->select('')
            ->from('master_produksi')
            ->order_by('produk_id', 'ASC')
            ->get()
            ->result_array();
        // echo $this->db->last_query();
        // die;
        return $dt;
    }

    public function get_gambar_delete($id)
    {
        $dt = $this->db
            ->select('gambar')
            ->from('master_produksi')
            ->where('produk_id', $id)
            ->get()
            ->row()->gambar;
        return $dt;
    }

    public function cek_nama($nama)
    {
        $dt = $this->db
            ->select('produk_nama')
            ->from('master_produksi')
            ->where('UPPER(REPLACE(produk_nama," ","")) = ', $nama)
            ->get()
            ->result_array();
        return $dt;
    }

    public function save_add($data)
    {
        $result = $this->db->insert('master_produksi', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                master_produksi
            where 
                produk_id = '" . $id . "'
        ";
        $result = $this->db->query($qy)->row();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('produk_id', $id);
        $result = $this->db->update('master_produksi', $data);
        return $result;
    }

    public function deleted_data($id)
    {
        $this->db->where('produk_id', $id);
        return $this->db->delete('master_produksi');
    }
}
