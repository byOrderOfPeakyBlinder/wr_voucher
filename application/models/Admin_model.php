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
        $this->db->where('id', $id);
        $this->db->delete('voucher');
    }
}