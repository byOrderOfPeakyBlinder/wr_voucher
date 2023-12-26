<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');

    }
   
    public function index()
    {
        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO'
            // 'data_voucher' => $voucher,
        );
        $this->load->view('admin/header' , $array );
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer' );
    }
    public function voucher()
    { 
        $voucher = $this->Admin_model->get_voucher();
        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO',
            'data_voucher' => $voucher,
        );
        $this->load->view('admin/header' , $array );
        $this->load->view('admin/voucher');
        $this->load->view('admin/footer' );
    }
    public function tambah_voucher()
    {

        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO',
        );
        $this->form_validation->set_rules('kode_voucher', 'Kode_Voucher', 'required|trim|is_unique[voucher.kode_voucher]',[
            'is_unique' => 'Kode Voucher Sudah Ada !, Silahkan Generate Ulang']);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $array);
            $this->load->view('admin/tambah_voucher');
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'kode_voucher' => strtoupper($this->input->post('kode_voucher')),
                'nominal' => $this->input->post('nominal'),
                'created' => time(),
                'expired' => strtotime($this->input->post('expired')),
            );
            $this->Admin_model->tambah_voucher($data);
            $this->session->set_flashdata('msg', 'Ditambah');
            redirect('admin/voucher');
        }
    }
    public function hapus_voucher($id)
    {
        
        $this->Admin_model->hapus_voucher($id);
        $this->session->set_flashdata('msg', 'Data Produk Berhasil Di Hapus');
        redirect('admin/voucher');
    }
    public function kasir()
    { 
        $kasir = $this->Admin_model->get_kasir();

        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO',
            'data_kasir' => $kasir,
        );
        $this->load->view('admin/header' , $array );
        $this->load->view('admin/kasir');
        $this->load->view('admin/footer' );
    }
    public function tambah_kasir()
    {
        $cabang = $this->Admin_model->get_cabang();
        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO',
            'cabang'=>$cabang,
        );
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]',[
            'is_unique' => 'Username Sudah Ada !, Gunakan Username yang lain']);
       
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $array);
            $this->load->view('admin/tambah_kasir');
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'username'=>$this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role'=> 2 ,
                'kode_cabang' => $this->input->post('kode_cabang'),
            );
            $this->Admin_model->tambah_kasir($data);
            $this->session->set_flashdata('msg', 'Ditambah');
            redirect('admin/kasir');
        }
    }
    public function edit_kasir($id=null)
    {   
        $this->form_validation->set_rules('id', 'Id', 'required|trim');
        if($this->input->post('username')!=$this->input->post('username_lama')){
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]',[
                'is_unique' => 'Username Sudah Ada !, Gunakan Username yang lain']);
        }
        if ($this->form_validation->run() == false) {
        $edit = $this->Admin_model->detail_kasir($id);
        $cabang = $this->Admin_model->get_cabang();

            $array  = array(
                'info' => $this->session->userdata('role'),
                'title' => 'WAHYU REDJO',
                'edit'=>$edit,
                'cabang'=>$cabang,
            );
            $this->load->view('admin/header', $array);
            $this->load->view('admin/edit_kasir');
            $this->load->view('admin/footer');
        } else {
            $id=$this->input->post('id');
            $kode = strtoupper($this->input->post('kode_cabang'));
            $edit = array(
                'username'=>$this->input->post('username'),
                'kode_cabang' => strtoupper($this->input->post('kode_cabang')),
            );
            $this->Admin_model->edit_kasir($id,$edit);
            $this->session->set_flashdata('msg', 'Diedit');
            redirect('admin/kasir');
        }
    }
    public function hapus_kasir($id)
    {
        
        $this->Admin_model->hapus_kasir($id);
        $this->session->set_flashdata('msg', 'Data Kasir Berhasil Di Hapus');
        redirect('admin/kasir');
    }
    //cabang
    public function cabang()
    { 
        $cabang = $this->Admin_model->get_cabang();
        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO',
            'data_cabang' => $cabang,
        );
        $this->load->view('admin/header' , $array );
        $this->load->view('admin/cabang');
        $this->load->view('admin/footer' );
    }
    public function tambah_cabang()
    {

        $array  = array(
            'info' => $this->session->userdata('role'),
            'title' => 'WAHYU REDJO',
        );
        $this->form_validation->set_rules('kode_cabang', 'Kode_cabang', 'required|trim|is_unique[data_cabang.kode_cabang]',[
            'is_unique' => 'Kode Toko Sudah Ada !, Silahkan Koreksi Data']);
        $this->form_validation->set_rules('cabang', 'Cabang', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $array);
            $this->load->view('admin/tambah_cabang');
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'kode_cabang' => strtoupper($this->input->post('kode_cabang')),
                'cabang' => strtoupper($this->input->post('cabang')),
            );
        
            $this->Admin_model->tambah_cabang($data);
            $this->session->set_flashdata('msg', 'Ditambah');
            redirect('admin/cabang');
        }
    }
    public function edit_cabang($kode=null)
    {
        
        $this->form_validation->set_rules('kode_cabang', 'Kode_cabang', 'required|trim');
        $this->form_validation->set_rules('cabang', 'Cabang', 'required|trim');
        if ($this->form_validation->run() == false) {
            $edit = $this->db->get_where('data_cabang', ['kode_cabang' => $kode])->row_array();
            $array  = array(
                'info' => $this->session->userdata('role'),
                'title' => 'WAHYU REDJO',
                'edit'=>$edit
            );
            $this->load->view('admin/header', $array);
            $this->load->view('admin/edit_cabang');
            $this->load->view('admin/footer');
        } else {
            $kode = strtoupper($this->input->post('kode_cabang'));
            $edit = array(
                'cabang' => strtoupper($this->input->post('cabang')),
            );
            $this->Admin_model->edit_cabang($kode,$edit);
            $this->session->set_flashdata('msg', 'Diedit');
            redirect('admin/cabang');
        }
    }
    public function hapus_cabang($id)
    {
        
        $this->Admin_model->hapus_cabang($id);
        $this->session->set_flashdata('msg', 'Data Cabang Berhasil Di Hapus');
        redirect('admin/cabang');
    }
}