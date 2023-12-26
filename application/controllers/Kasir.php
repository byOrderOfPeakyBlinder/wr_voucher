<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Kasir extends CI_Controller
{
    
  public function __construct()
    {
        parent::__construct();

        $this->load->model('Kasir_model');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
        if ($this->session->userdata('username2') == null) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert"> Sesi Anda Berakhir , Silahkan Masuk </div>');
            redirect('auth');
            die;
        }
    }
  public function index()
  {
    $array  = array(
      'info' => $this->session->userdata('role'),
      'title' => 'WAHYU REDJO',
    );
    
    $this->load->view('kasir/header', $array );
    $this->load->view('kasir/dashboard');
    $this->load->view('kasir/footer' );
  }
  public function klaim_voucher()
  {
    $array  = array(
      'info' => $this->session->userdata('role'),
      'title' => 'WAHYU REDJO',
    );
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    if ($this->form_validation->run() == false) {
      $this->load->view('kasir/header', $array );
      $this->load->view('kasir/klaim_voucher');
      $this->load->view('kasir/footer' );
    }else{
      $kode_voucher=$this->input->post('kode_voucher');
      $tanggal_klaim=strtotime($this->input->post('tanggal'));
      $voucher = $this->db->get_where('voucher', ['kode_voucher' => $kode_voucher])->row_array();
      if(!$voucher){
        $this->session->set_flashdata('msgeror', 'Voucher Tidak Terdaftar, Silahkan Cek Lagi');
        redirect('kasir/klaim_voucher');
      
      }else if($voucher['status']==1){
        $this->session->set_flashdata('info', 'Voucher Sudah Terpakai, Gunakan Voucher Lain');
        redirect('kasir/klaim_voucher');
      
      }else if($tanggal_klaim > $voucher['expired']){
        $this->session->set_flashdata('msgeror', 'Voucher Sudah Kadaluarsa, Silahkan Cek Lagi');
      redirect('kasir/klaim_voucher');

      }else if($voucher['status']==0){
        $foto = $_FILES['foto'];
        if (count($foto) == 0) {
        } else {
          $config['upload_path']          = './assets/img/nota/';
          $config['allowed_types']        = 'jpg|png|jpeg';
          $config['file_name'] = $kode_voucher;
          $this->load->library('upload', $config);
          if (!$this->upload->do_upload('foto')) {
            $foto = '';
          } else {
            //jika foto berhasil di upload
            $foto = $this->upload->data('file_name');
          }
        }
        $data = array(
          'nama'=>$this->input->post('nama'),
          'alamat'=>$this->input->post('alamat'),
          'tanggal'=>strtotime($this->input->post('tanggal')),
          'foto'=>$foto,
          'kode_voucher'=>$this->input->post('kode_voucher'),
        );
        $this->Kasir_model->klaim_voucher($data);
        //merubah status voucher menjadi terpakai
        $edit = array(
          'status'=>1,
        );
        $this->Kasir_model->edit_status_voucher($kode_voucher,$edit);
        $this->session->set_flashdata('msg', 'Voucher Berhasil Di Klaim Rp. '.number_format($voucher['nominal'],0));
        redirect('kasir/riwayat_klaim');

      }
      
    }
  }
  public function riwayat_klaim()
  {
    $voucher = $this->Kasir_model->get_klaim_voucher();

    $array  = array(
      'info' => $this->session->userdata('role'),
      'title' => 'WAHYU REDJO',
      'riwayat'=>$voucher
    );
    
    $this->load->view('kasir/header', $array );
    $this->load->view('kasir/riwayat_klaim');
    $this->load->view('kasir/footer' );
  }

  

}


/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */