<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
        
    }
    public function index()
    {
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
          $data['title'] = 'Login Aplikasi Laundry';
        $this->load->view('templates/auth_header');
          $this->load->view('auth/login', $data);
        $this->load->view('templates/auth_footer');

      } else {
          $this->_login();
        }
    }

    private function _login()
    {
  $username = $this->input->post('username');
  $password = $this->input->post('password');

  $user = $this->db->get_where('user', ['username' => $username])->row_array();
  
		//user ada
  if ($user) {
			//cek password
     if (password_verify($password, $user['password'])) {
        $data = [
           'username' => $user['username'],
           'role_user' => $user['role']
       ];
       $datalgn = [];
       if ($user['role'] == 1) {
           $datalgn['username1'] = $data['username'];
           $datalgn['role'] = "Admin";
           $this->session->set_userdata($datalgn);
           redirect('Admin');

       } else if ($user['role'] == 2) {
           $datalgn['username2'] = $data['username'];
           $datalgn['role2'] = "Kasir";
           $this->session->set_userdata($datalgn);
           redirect('Kasir');

       } 
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Anda Salah </div>');
            redirect('auth');
            }
            } else { 

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Username Tidak Terdaftar </div>');
            redirect('auth');
            }
    }
    public function logout($data)
{
    $this->session->unset_userdata($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Berhasil Keluar </div>');
    redirect('auth');
}
    public function registrasi()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/registrasi');
        $this->load->view('templates/auth_footer');
    }
}