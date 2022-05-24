<?php

class M_siswa extends CI_Model{

  function dashboard_tekno($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function dashboard_bismen($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

}

 ?>
