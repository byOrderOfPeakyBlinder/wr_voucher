<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }
  //cekvoucer
  public function cek_klaim_voucher($id)
  {
      $this->db->select('klaim_voucher.*,voucher.nominal,user.username,data_cabang.*');
       $this->db->from('klaim_voucher');
      $this->db->where('klaim_voucher.kode_voucher', $id);
       $this->db->join('voucher', 'klaim_voucher.kode_voucher = voucher.kode_voucher');
       $this->db->join('user', 'klaim_voucher.id_kasir = user.id');
       $this->db->join('data_cabang', 'user.kode_cabang = data_cabang.kode_cabang');
      $query = $this->db->get();
      return $query->row_array();
  }
  function klaim_voucher($Data)
  {
      $this->db->insert('klaim_voucher', $Data);
  }
  function edit_status_voucher($id, $Data)
  {
      $this->db->set($Data);
      $this->db->where('kode_voucher', $id);
      $this->db->update('voucher');
  }
  //riwayat klaim
  public function get_klaim_voucher($id)
  {
      $this->db->select('klaim_voucher.*,voucher.nominal,user.username,data_cabang.*');
       $this->db->from('klaim_voucher');
      $this->db->where('klaim_voucher.id_kasir', $id);
       $this->db->join('voucher', 'klaim_voucher.kode_voucher = voucher.kode_voucher');
       $this->db->join('user', 'klaim_voucher.id_kasir = user.id');
       $this->db->join('data_cabang', 'user.kode_cabang = data_cabang.kode_cabang');
      $query = $this->db->get();
      return $query->result();
  }
  // ------------------------------------------------------------------------

}

/* End of file Kasir_model.php */
/* Location: ./application/models/Kasir_model.php */