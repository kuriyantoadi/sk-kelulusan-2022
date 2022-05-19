<?php

class M_umkm extends CI_Model{

  //tampil buku
  function umkm_login($username, $password){
    $login = $this->db->query("SELECT * from tb_umkm where username='$username' AND password=md5('$password') ");
    return $login;
  }

  function tampil_umkm(){
    $tampil = $this->db->get('tb_umkm')->result();
    return $tampil;
  }

  function tampil_masyarakat($ses_id_umkm){
    $this->db->select('*');
    $this->db->from('tb_masyarakat');
    $this->db->join('tb_umkm','tb_umkm.id_umkm = tb_masyarakat.id_umkm');
    $this->db->where('tb_masyarakat.id_umkm',$ses_id_umkm);
    $query = $this->db->get()->result();
    return $query;
  }


  public function tambah_masyarakat_up($tambah_masyarakat)
  {
    $this->db->insert('tb_masyarakat',$tambah_masyarakat);
  }

  public function masyarakat_hapus($id_masyarakat)
  {
    $this->db->where($id_masyarakat);
    $this->db->delete('tb_masyarakat');
  }

  public function masyarakat_edit($id_masyarakat)
  {
    $this->db->select('*');
    $this->db->from('tb_masyarakat');
    $this->db->join('tb_umkm','tb_umkm.id_umkm = tb_masyarakat.id_umkm');
    $this->db->where('tb_masyarakat.id_masyarakat',$id_masyarakat);
    $query = $this->db->get()->result();
    return $query;
  }

  function masyarakat_edit_up($data_edit, $id_komoditi_agro){
    $this->db->where($id_komoditi_agro);
    $this->db->update('tb_masyarakat',$data_edit);
  }

  function masyarakat_detail($id_masyarakat){
    $this->db->select('*');
    $this->db->from('tb_masyarakat');
    $this->db->join('tb_umkm','tb_umkm.id_umkm = tb_masyarakat.id_umkm');
    $this->db->where('tb_masyarakat.id_masyarakat',$id_masyarakat);
    $query = $this->db->get()->result();
    return $query;
  }

  function info_masyarakat($ses_id_umkm){
    $this->db->where('id_umkm', $ses_id_umkm);
    $hasil = $this->db->get('tb_info')->result();
    return $hasil;
  }

  function info_tambah_up($tambah_info){
    $this->db->insert('tb_info',$tambah_info);
  }

  function info_kode_pemesanan($ses_id_umkm){
    $this->db->where('id_umkm', $ses_id_umkm);
    $hasil = $this->db->get('tb_kode_pesanan')->result();
    return $hasil;
  }

  function info_hapus($id_info){
    $this->db->where($id_info);
    $this->db->delete('tb_info');
  }

  function info_edit($id_info){
    $this->db->select('*');
    $this->db->from('tb_info');
    $this->db->where('id_info',$id_info);
    $query = $this->db->get()->result();
    return $query;
  }

  function info_edit_up($data_edit, $kode_info){
    $this->db->where($kode_info);
    $this->db->update('tb_info',$data_edit);
  }

  function info_detail($id_info){
    $this->db->where('id_info', $id_info);
    $hasil = $this->db->get('tb_info')->result();
    return $hasil;
  }

  function profil($ses_id_umkm){
    $this->db->where('id_umkm', $ses_id_umkm);
    $hasil = $this->db->get('tb_umkm')->result();
    return $hasil;
  }

  function cek_password($id_umkm){
    $this->db->where('id_umkm', $id_umkm);
    $hasil = $this->db->get('tb_umkm')->result();
    return $hasil;
  }

  function passowrd_baru($password_baru, $id_umkm){
    $this->db->where('id_umkm', $id_umkm);
    $this->db->update('tb_umkm',$password_baru);
  }

  function masyarakat_password_up($password_baru, $id_masyarakat){
    $this->db->where('id_masyarakat', $id_masyarakat);
    $this->db->update('tb_masyarakat', $password_baru);
  }

  //kode urut
  public function getMax($table = null, $field = null)
  {
    $this->db->select_max($field);
    return $this->db->get($table)->row_array()[$field];
  }

//pemesanan komoditi
  function komoditi_agro(){
    $tampil = $this->db->get('tb_komoditi_agro')->result();
    return $tampil;
  }

  function kode_pesanan($ses_id_umkm){
    $this->db->where('id_umkm', $ses_id_umkm);
    $hasil = $this->db->get('tb_kode_pesanan')->result();
    return $hasil;
  }

  public function kode_pesanan_tambah($tambah_kode_pesanan)
  {
    $this->db->insert('tb_kode_pesanan',$tambah_kode_pesanan);
  }

  public function pemesanan_komoditi($kode_pesanan)
  {
    $this->db->where('kode_pesanan', $kode_pesanan);
    $hasil = $this->db->get('tb_pemesanan')->result();
    return $hasil;
  }

  public function kode_pesanan_cek($kode_pesanan)
  {
    $this->db->where('kode_pesanan', $kode_pesanan);
    $hasil = $this->db->get('tb_kode_pesanan')->result();
    return $hasil;
  }

  public function pemesanan_komoditi_harga($kode_pesanan)
  {
    $this->db->select_sum('sub_total');
    $this->db->where('kode_pesanan', $kode_pesanan);
    $hasil = $this->db->get('tb_pemesanan')->result(); //
    return $hasil;
  }

  public function pemesanan_komoditi_tambah($id_komoditi_agro)
  {
    $this->db->where('id_komoditi_agro', $id_komoditi_agro);
    $hasil = $this->db->get('tb_komoditi_agro')->result();
    return $hasil;
  }

  public function pemesanan_komoditi_tambah_up($tambah_pesanan)
  {
    $this->db->insert('tb_pemesanan',$tambah_pesanan);
  }

  public function pemesanan_komoditi_cek($id_komoditi_agro)
  {
    $this->db->where('id_komoditi', $id_komoditi_agro);
    $hasil = $this->db->get('tb_pemesanan')->result();
    return $hasil;
  }

  public function pemesanan_komoditi_jumlah($id_pemesanan)
  {
    $this->db->where('id_pemesanan', $id_pemesanan);
    $hasil = $this->db->get('tb_pemesanan')->result();
    return $hasil;
  }

  public function pemesanan_komoditi_jumlah_up($tambah_jumlah, $id_pemesanan)
  {
    $this->db->where('id_pemesanan',$id_pemesanan);
    $this->db->update('tb_pemesanan',$tambah_jumlah);
  }

  public function pemesanan_komoditi_jumlah_hapus($id_pemesanan)
  {
    $this->db->where('id_pemesanan',$id_pemesanan);
    $this->db->delete('tb_pemesanan');
  }

  public function pemesanan_selesai($tambah_pemesanan, $kode_pesanan)
  {
    $this->db->where('kode_pesanan',$kode_pesanan);
    $this->db->update('tb_kode_pesanan',$tambah_pemesanan);
  }

  public function bukti_pesanan_kode($kode_pesanan)
  {
    $this->db->where('kode_pesanan', $kode_pesanan);
    $hasil = $this->db->get('tb_kode_pesanan')->result();
    return $hasil;
  }

  public function bukti_pesanan_umkm($id_umkm)
  {
    $this->db->where('id_umkm', $id_umkm);
    $hasil = $this->db->get('tb_umkm')->result();
    return $hasil;
  }

  public function bukti_pesanan_pemesanan($kode_pesanan)
  {
    $this->db->where('kode_pesanan', $kode_pesanan);
    $hasil = $this->db->get('tb_pemesanan')->result();
    return $hasil;
  }

  public function konfirmasi_pesanan($ses_id_umkm)
  {
    $this->db->where('id_umkm', $ses_id_umkm);
    $hasil = $this->db->get('tb_kode_pesanan')->result();
    return $hasil;
  }

  public function konfirmasi_pesanan_diterima($kode_pesanan)
  {
    $this->db->where('kode_pesanan', $kode_pesanan);
    $hasil = $this->db->get('tb_pemesanan')->result();
    return $hasil;
  }

  public function konfirmasi_pesanan_diterima_up($pesanan_diterima, $id_pemesanan)
  {
    $this->db->where('id_pemesanan',$id_pemesanan);
    $this->db->update('tb_pemesanan',$pesanan_diterima);
  }

  public function konfirmasi_pesanan_belum_diterima($pesanan_diterima, $id_pemesanan)
  {
    $this->db->where('id_pemesanan',$id_pemesanan);
    $this->db->update('tb_pemesanan',$pesanan_diterima);
  }

  public function konfirmasi_pesanan_selesai($pesanan_selesai, $kode_pesanan)
  {
    $this->db->where('kode_pesanan',$kode_pesanan);
    $this->db->update('tb_kode_pesanan',$pesanan_selesai);
  }

  public function konfirmasi_pesanan_riwayat($kode_pesanan)
  {
    $this->db->select('*');
    $this->db->from('tb_kode_pesanan');
    $this->db->join('tb_pemesanan','tb_pemesanan.kode_pesanan = tb_kode_pesanan.kode_pesanan');
    $this->db->where('tb_pemesanan.kode_pesanan',$kode_pesanan);
    $query = $this->db->get()->result();
    return $query;
  }

  public function data_komoditi($ses_id_umkm)
  {
    $this->db->where('id_umkm', $ses_id_umkm);
    $hasil = $this->db->get('tb_komoditi_umkm')->result();
    return $hasil;
  }

  public function pesanan_diterima($id_pemesanan)
  {
    $this->db->where('id_pemesanan', $id_pemesanan);
    $hasil = $this->db->get('tb_pemesanan')->result();
    return $hasil;
  }

  public function pesanan_diterima_db($pesanan_diterima_db)
  {
    $this->db->insert('tb_komoditi_umkm',$pesanan_diterima_db);
  }

  public function pengambilan($id_umkm)
  {
    $this->db->where('id_umkm', $id_umkm);
    $hasil = $this->db->get('tb_info')->result();
    return $hasil;
  }

  public function pengambilan_detailbc($id_info)
  {
    $this->db->where('id_info', $id_info);
    $hasil = $this->db->get('tb_pengambilan')->result();
    return $hasil;
  }

  function pengambilan_detail($id_info){
    $this->db->select('*');
    $this->db->from('tb_pengambilan');
    $this->db->join('tb_masyarakat','tb_masyarakat.id_masyarakat = tb_pengambilan.id_masyarakat');
    $this->db->where('tb_pengambilan.id_info',$id_info);
    $query = $this->db->get()->result();
    return $query;
  }

  function masyarakat_detail1($id_masyarakat){
    $this->db->select('*');
    $this->db->from('tb_masyarakat');
    $this->db->join('tb_umkm','tb_umkm.id_umkm = tb_masyarakat.id_umkm');
    $this->db->where('tb_masyarakat.id_masyarakat',$id_masyarakat);
    $query = $this->db->get()->result();
    return $query;
  }

}

 ?>
