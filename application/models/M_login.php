<?php

class M_login extends CI_Model{

  //tampil buku
  function siswa_login($nisn_siswa, $password){
    $login = $this->db->query("SELECT * from tb_siswa where nisn_siswa='$nisn_siswa' AND password=md5('$password') ");
    return $login;
  }

  function admin_login($username, $password){
    $login = $this->db->query("SELECT * from tb_admin where username='$username' AND password=md5('$password') ");
    return $login;
  }


}

 ?>
