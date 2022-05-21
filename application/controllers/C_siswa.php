<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login');
      $this->load->model('M_siswa');

      // session login
			if ($this->session->userdata('siswa') != true) {
				$url = base_url('C_login/siswa');
				redirect($url);
			}
	}

//Login User
  public function index()
  {
    $this->load->view('login');
  }

  public function user()
  {
    $this->load->view('user/index');
  }

  public function user_login()
  {
    $nisn_siswa = htmlspecialchars($this->input->post('nisn_siswa', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->user_login($nisn_siswa, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status_kelulusan']=='lulus') {
        $this->session->set_userdata('user', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_nisn', $data['nisn_siswa']);
        redirect('C_siswa/dashboard');

      // }elseif ($data['status']=='pimpinan') {
      //   $this->session->set_userdata('pimpinan', true);
      //   $this->session->set_userdata('ses_id', $data['id_user']);
      //   $this->session->set_userdata('ses_username', $data['nisn_siswa']);
      //
      //   redirect('C_pimpinan/dashboard');
      }else {
        $url = base_url('C_siswa');
        echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          NISN atau Password Salah<br> Silahkan Login Kembali
        </div>
        ');
        redirect($url);
      }

    }

    $this->session->set_flashdata('msg', '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      NISN atau Password Salah<br> Silahkan Login Kembali
    </div>
    ');
    $url = base_url('C_siswa');
    redirect($url);
  }


//Login UMKM
  public function dashboard()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_siswa->dashboard($ses_id);

    $this->load->view('siswa/dashboard', $data);
  }

  public function cetak($ses_id)
  {
    $data['tampil'] = $this->M_siswa->dashboard($ses_id);

    $this->load->view('siswa/print', $data);
  }

  public function logout()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_siswa');
  }

}
