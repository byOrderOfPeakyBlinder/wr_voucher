<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }
   
    public function index()
    {
        
        $data['title'] = 'Wahyu Redjo';
        $data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username1')])->row_array();
        $this->load->view('admin/header' , $data );
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer' );
    }
    public function voucher()
    {
        
        $data['title'] = 'Wahyu Redjo';
        $data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username1')])->row_array();

        $voucher = $this->Admin_model->get_voucher();
        $array  = array(
            'info' => $data['user'],
            // 'data_voucher' => $voucher,
        );
        $this->load->view('admin/header' , $data );
        $this->load->view('admin/voucher');
        $this->load->view('admin/footer' );
    }
    public function tambah_voucher()
    {
      $data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username1')])->row_array();
  
        $array  = array(
            'info' => $data['user'],
            // 'role' => $role,
            // 'foto' => $data['user']['foto'],
        );
        $this->form_validation->set_rules('kode_voucher', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $array);
            $this->load->view('admin/tambah_voucher');
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'kode_voucher' => $this->input->post('kode_voucher'),
                'nominal' => $this->input->post('nominal'),
                'status' => $this->input->post('status'),
            );
            $this->Admin_model->tambah_voucher($data);
            $this->session->set_flashdata('msg', 'Ditambah');
            redirect('admin/voucher');
        }
    }
    }