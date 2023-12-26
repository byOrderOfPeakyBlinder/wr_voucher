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
  public function get_klaim_voucher()
    {
        $this->db->select('*');
         $this->db->from('klaim_voucher');
         $this->db->join('voucher', 'klaim_voucher.kode_voucher = voucher.kode_voucher');
        $query = $this->db->get();
        return $query->result();
    }
  // ------------------------------------------------------------------------

}

/* End of file Kasir_model.php */
/* Location: ./application/models/Kasir_model.php */