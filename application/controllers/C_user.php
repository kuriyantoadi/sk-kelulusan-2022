<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_user');
      $this->load->model('M_umkm');

			// session login
			if ($this->session->userdata('user') != true) {
				$url = base_url('C_login/user');
				redirect($url);
			}
	}

	public function index()
	{
    $this->load->view('C_login/user');
  }

  public function dashboard()
  {
    $this->load->view('template/header-user');
    $this->load->view('user/dashboard');
    $this->load->view('template/footer');
  }


  public function profil()
  {
    $ses_id_user = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_user->profil($ses_id_user);

    $this->load->view('template/header-user');
    $this->load->view('user/profil', $data);
    $this->load->view('template/footer');
  }

  public function password()
  {
    $ses_id_user = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_user->profil($ses_id_user);

    $this->load->view('template/header-umkm');
    $this->load->view('user/password', $data);
    $this->load->view('template/footer');
  }

  public function password_up()
  {
    $id_user = $this->input->post('id_user');
    $password_lama = $this->input->post('password_lama');
    $password_baru = $this->input->post('password_baru');
    $password_konfirmasi = $this->input->post('password_konfirmasi');

    $cek_pass = $this->M_user->cek_password($id_user);

    //tampil passowrd lama
    foreach ($cek_pass as $row)
    {
      $cek_password = $row->password;
    }

    if ($password_baru != $password_konfirmasi) {
      $this->session->set_flashdata('msg', '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p>Password konfirmasi anda tidak sesuai</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect('C_umkm/password');
    }


    //cek password lama
    if (md5($password_lama) != $cek_password ) {
      $this->session->set_flashdata('msg', '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p>Password lama anda tidak sesuai dangan Data</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect('C_user/password');
    }else{
      $password_baru = array(
        'password' => md5($password_konfirmasi),
      );

      $this->M_user->passowrd_baru($password_baru, $id_user);

      $this->session->set_flashdata('msg', '
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p>Passowrd berhasil diganti</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect('C_user/profil');

    }

  }

//komoditi awal
  public function komoditi()
  {
    $data['tampil'] = $this->M_user->komoditi();

    $this->load->view('template/header-user');
    $this->load->view('user/komoditi', $data);
    $this->load->view('template/footer');
  }

  public function komoditi_tambah()
  {
    $this->load->view('template/header-user');
    $this->load->view('user/komoditi_tambah');
    $this->load->view('template/footer');
  }

  public function komoditi_tambah_up()
  {
    $nama_komoditi = $this->input->post('nama_komoditi');
    $volume = $this->input->post('volume');
    $harga_satuan = $this->input->post('harga_satuan');
    $satuan_kg = $this->input->post('satuan_kg');

    $tambah_komoditi = array(
      'nama_komoditi' => $nama_komoditi,
      'volume' => $volume,
      'harga_satuan' => $harga_satuan,
      'satuan_kg' => $satuan_kg
    );

      $this->M_user->komoditi_tambah_up($tambah_komoditi);
      $this->session->set_flashdata('msg', '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Berhasil</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/komoditi');
    }

    public function komoditi_hapus($id_komoditi_agro)
    {
      $kode_komoditi = array('id_komoditi_agro' => $id_komoditi_agro);

      $success = $this->M_user->komoditi_hapus($kode_komoditi);
      $this->session->set_flashdata('msg', '
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hapus Data Berhasil</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/komoditi');
    }


    public function komoditi_edit($id_komoditi_agro)
    {
      $data['tampil'] = $this->M_user->komoditi_edit($id_komoditi_agro);

      $this->load->view('template/header-user');
      $this->load->view('user/komoditi_edit', $data);
      $this->load->view('template/footer');
    }

    public function komoditi_edit_up()
    {
      $id_komoditi_agro = $this->input->post('id_komoditi_agro');
      $nama_komoditi = $this->input->post('nama_komoditi');
      $volume = $this->input->post('volume');
      $harga_satuan = $this->input->post('harga_satuan');
      $satuan_kg = $this->input->post('satuan_kg');

      $data_edit = array(
        'nama_komoditi' => $nama_komoditi,
        'volume' => $volume,
        'harga_satuan' => $harga_satuan,
        'satuan_kg' => $satuan_kg
      );

      $this->M_user->komoditi_edit_up($data_edit, $id_komoditi_agro);

      $this->session->set_flashdata('msg', '
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Edit data berhasil</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/komoditi');

    }

  //komoditi akhir


  // Data UMKM awal

  public function data_umkm()
  {
    $data['tampil'] = $this->M_user->umkm();

    $this->load->view('template/header-user');
    $this->load->view('user/data_umkm', $data);
    $this->load->view('template/footer');
  }

  public function data_umkm_password($id_umkm)
  {
    $data['tampil'] = $this->M_umkm->profil($id_umkm);

    $this->load->view('template/header-user');
    $this->load->view('user/data_umkm_password', $data);
    $this->load->view('template/footer');
  }

  public function data_umkm_password_up()
  {
    $id_umkm = $this->input->post('id_umkm');
    $password_baru = $this->input->post('password_baru');
    $password_konfirmasi = $this->input->post('password_konfirmasi');

    if ($password_baru != $password_konfirmasi) {
      $this->session->set_flashdata('msg', '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p>Password konfirmasi anda tidak sesuai</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect('C_umkm/password');
    }

      $password_baru = array(
        'password' => md5($password_konfirmasi),
      );

      $this->M_user->password_umkm($password_baru, $id_umkm);

      $this->session->set_flashdata('msg', '
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p>Passowrd berhasil diganti</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect('C_user/data_umkm');

  }

  public function data_umkm_tambah()
  {
    $this->load->view('template/header-user');
    $this->load->view('user/data_umkm_tambah');
    $this->load->view('template/footer');
  }

  public function data_umkm_tambah_up()
  {
    $nama_umkm = $this->input->post('nama_umkm');
    $kec_umkm = $this->input->post('kec_umkm');
    $alamat_umkm = $this->input->post('alamat_umkm');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $status_umkm = $this->input->post('status_umkm');

    $tambah_umkm = array(
      'nama_umkm' => $nama_umkm,
      'kec_umkm' => $kec_umkm,
      'alamat_umkm' => $alamat_umkm,
      'username' => $username,
      'password' => md5($password),
      'status_umkm' => $status_umkm
    );

      $this->M_user->data_umkm_tambah_up($tambah_umkm);
      $this->session->set_flashdata('msg', '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Berhasil</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/data_umkm');
    }

    public function data_umkm_hapus($id_umkm)
    {
      // $kode_umkm = array('id_komoditi_agro' => $id_umkm);

      $this->M_user->data_umkm_hapus($id_umkm);
      $this->session->set_flashdata('msg', '
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hapus Data Berhasil</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/data_umkm');
    }

    public function data_umkm_edit($id_umkm)
    {
      $data['tampil'] = $this->M_user->data_umkm_edit($id_umkm);

      $this->load->view('template/header-user');
      $this->load->view('user/data_umkm_edit', $data);
      $this->load->view('template/footer');
    }

    public function data_umkm_edit_up()
    {
      $id_umkm = $this->input->post('id_umkm');
      $nama_umkm = $this->input->post('nama_umkm');
      $username = $this->input->post('username');
      $kec_umkm = $this->input->post('kec_umkm');
      $alamat_umkm = $this->input->post('alamat_umkm');
      $status_umkm = $this->input->post('status_umkm');

      $data_edit = array(
        'nama_umkm' => $nama_umkm,
        'kec_umkm' => $kec_umkm,
        'username' => $username,
        'alamat_umkm' => $alamat_umkm,
        'status_umkm' => $status_umkm
      );


      $this->M_user->data_umkm_edit_up($data_edit, $id_umkm);

      $this->session->set_flashdata('msg', '
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Edit data berhasil</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/data_umkm');
    }

    public function data_umkm_detail($id_umkm)
    {
      $data['tampil'] = $this->M_user->data_umkm_detail($id_umkm);

      $this->load->view('template/header-user');
      $this->load->view('user/data_umkm_detail', $data);
      $this->load->view('template/footer');
    }

  // Data UMKM Akhir

  //data pemesanan

    public function data_pemesanan()
    {
      $data['tampil'] = $this->M_user->pemesanan();

      $this->load->view('template/header-user');
      $this->load->view('user/data_pemesanan', $data);
      $this->load->view('template/footer');
    }

    public function data_pemesanan_reset($kode_pesanan)
    {
      $data_reset = array(
        'status_kode' => 'Menunggu Konfirmasi'
      );

      $this->M_user->data_pemesanan_reset($kode_pesanan, $data_reset);
      redirect ('C_user/data_pemesanan_detail/'.$kode_pesanan);
    }

    public function data_pemesanan_hapus($kode_pesanan)
    {
     $this->M_user->data_pemesanan_hapus($kode_pesanan);

     $this->session->set_flashdata('msg', '
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p>Hapus data pemesanan berhasil</p>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect ('C_user/data_pemesanan');
    }

    public function data_pemesanan_detail($kode_pesanan)
    {
      $data['tampil'] = $this->M_user->data_pemesanan_detail($kode_pesanan);
      $data['total_sum'] = $this->M_user->pemesanan_komoditi_harga($kode_pesanan);
      $data['status_kode'] = $this->M_user->data_pemesanan_detail_status($kode_pesanan);
      $data['kode_pesanan'] = $kode_pesanan;

      $this->load->view('template/header-user');
      $this->load->view('user/data_pemesanan_detail', $data);
      $this->load->view('template/footer');
    }


    public function data_pemesanan_tersedia($id_pemesanan, $kode_pesanan)
    {
      $data_tersedia = array(
        'kondisi' => 'Tersedia'
      );

      $this->M_user->data_pemesanan_tersedia($id_pemesanan, $data_tersedia);
      redirect ('C_user/data_pemesanan_detail/'.$kode_pesanan);
    }

    public function data_pemesanan_tidak_tersedia($id_pemesanan, $kode_pesanan)
    {
      $data_tersedia = array(
        'kondisi' => 'Tidak Tersedia'
      );

      $this->M_user->data_pemesanan_tidak_tersedia($id_pemesanan, $data_tersedia);
      redirect ('C_user/data_pemesanan_detail/'.$kode_pesanan);
    }

    public function data_pemesanan_tolak($kode_pesanan)
    {
      $data_tolak = array(
        'status_kode' => 'tidak diterima'
      );

      $this->M_user->data_pemesanan_tolak($kode_pesanan, $data_tolak);
      redirect ('C_user/data_pemesanan/');
    }

    public function data_pemesanan_terima($kode_pesanan)
    {
      $tgl = date('d-m-Y');
      $data_tolak = array(
        'status_kode' => 'Dalam Pengiriman',
        'tgl_pengiriman' => $tgl
      );

      $this->M_user->data_pemesanan_terima($kode_pesanan, $data_tolak);
      redirect ('C_user/data_pemesanan/');
    }


// awal konfirmasi
    public function data_konfirmasi()
    {
      $data['tampil'] = $this->M_user->konfirmasi_pesanan();

      $this->load->view('template/header-user');
      $this->load->view('user/data_konfirmasi', $data);
      $this->load->view('template/footer');
    }

    public function konfirmasi_pesanan_riwayat($kode_pesanan)
    {
      $data['tampil'] = $this->M_user->konfirmasi_pesanan_riwayat($kode_pesanan);
      $data['kode_pesanan'] = $kode_pesanan;

      $this->load->view('template/header-user');
      $this->load->view('user/data_konfirmasi_riwayat', $data);
      $this->load->view('template/footer');
    }

// akhir konfirmasi

    public function bukti_pesanan($kode_pesanan)
    {
      $tampil_kode_pesanan = $this->M_umkm->bukti_pesanan_kode($kode_pesanan);

      foreach ($tampil_kode_pesanan as $row) {
        $id_umkm = $row->id_umkm;
      }

      $data['tampil_umkm'] = $this->M_umkm->bukti_pesanan_umkm($id_umkm);
      $data['tampil_pemesanan'] = $this->M_umkm->bukti_pesanan_pemesanan($kode_pesanan);
      $data['tampil_kode_pesanan'] = $this->M_umkm->bukti_pesanan_kode($kode_pesanan);

      $this->load->view('umkm/bukti_pesanan', $data);
    }

}
