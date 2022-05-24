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
				$url = base_url('C_login');
				redirect($url);
			}
	}

//Login User
  public function index()
  {
    $this->load->view('login_tekno');
  }

//Login Tekno
  public function dashboard_tekno()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_siswa->dashboard_tekno($ses_id);

    $this->load->view('siswa_tekno/dashboard', $data);
  }

  public function cetak_tekno($ses_id)
  {
    $data['tampil'] = $this->M_siswa->dashboard_tekno($ses_id);

    $this->load->view('siswa_tekno/print', $data);
  }

  public function logout_tekno()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_login/login_tekno');
  }
  //Login Tekno Akhir


  //Login Bismen awal
    public function dashboard_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_siswa->dashboard_bismen($ses_id);

      $this->load->view('siswa_bismen/dashboard', $data);
    }

    public function cetak_bismen($ses_id)
    {
      $data['tampil'] = $this->M_siswa->dashboard_bismen($ses_id);

      $this->load->view('siswa_bismen/print', $data);
    }

    public function logout_bismen()
    {
      $this->session->sess_destroy();
      $url = base_url();
      redirect('C_login/login_bismen');
    }

}
