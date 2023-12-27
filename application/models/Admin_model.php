<?php
defined('BASEPATH') or exit('No direct Script Allowed');
class Admin_model extends CI_Model
{
    public function get_voucher()
    {
        $query = $this->db->get('voucher');
        return $query->result();
    }
    function tambah_voucher($Data)
    {
        $this->db->insert('voucher', $Data);
    }
    function edit_voucher($id, $Data)
    {
        $this->db->set($Data);
        $this->db->where('id', $id);
        $this->db->update('voucher');
    }
    function hapus_voucher($id)
    {
        $this->db->where('kode_voucher', $id);
        $this->db->delete('voucher');
    }
    //Kasir
    public function get_kasir()
    {
        $this->db->select('*');
         $this->db->from('user');
         $this->db->join('data_cabang', 'user.kode_cabang = data_cabang.kode_cabang');
        $this->db->where('user.role >', 1); 

        $query = $this->db->get();
        return $query->result();
    }
    function tambah_kasir($Data)
    {
        $this->db->insert('user', $Data);
    }
    function detail_kasir($id){
        $this->db->select('*');
         $this->db->from('user');
         $this->db->join('data_cabang', 'user.kode_cabang = data_cabang.kode_cabang');
        $this->db->where('user.id', $id); 

        $query = $this->db->get();
        return $query->row_array();
        
    }
    function edit_kasir($id, $Data)
    {
        $this->db->set($Data);
        $this->db->where('id', $id);
        $this->db->update('user');
    }
    function hapus_kasir($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    //cabang
    public function get_cabang()
    {
        $query = $this->db->get('data_cabang');
        return $query->result();
    }
    function tambah_cabang($Data)
    {
        $this->db->insert('data_cabang', $Data);
    }
    function edit_cabang($id, $Data)
    {
        $this->db->set($Data);
        $this->db->where('kode_cabang', $id);
        $this->db->update('data_cabang');
    }
    function hapus_cabang($id)
    {
        $this->db->where('kode_cabang', $id);
        $this->db->delete('data_cabang');
    }
    public function get_klaim_voucher()
    {
        $this->db->select('klaim_voucher.*,voucher.nominal,user.username,data_cabang.*');
         $this->db->from('klaim_voucher');
         $this->db->join('voucher', 'klaim_voucher.kode_voucher = voucher.kode_voucher');
         $this->db->join('user', 'klaim_voucher.id_kasir = user.id');
         $this->db->join('data_cabang', 'user.kode_cabang = data_cabang.kode_cabang');
        $query = $this->db->get();
        return $query->result();
    }
    // function get_data_customer()
    // {
    //     $this->db->select('*');
    //      $this->db->from('data_customer');
    //      $this->db->join('data_customer', 'klaim_voucher.kode_voucher = voucher.kode_voucher');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}