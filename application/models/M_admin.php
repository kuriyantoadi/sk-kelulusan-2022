<?php

class M_admin extends CI_Model{

  function dashboard($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  function tampil_siswa(){
    $tampil = $this->db->get('tb_siswa')->result();
    return $tampil;
  }

  public function siswa_hapus($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa');
  }

  function siswa_detail($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  public function siswa_edit($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  function siswa_edit_up($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa',$data_edit);
  }

  public function siswa_print($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  public function siswa_pass($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  function siswa_pass_up($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa',$data_edit);
  }


}

 ?>
