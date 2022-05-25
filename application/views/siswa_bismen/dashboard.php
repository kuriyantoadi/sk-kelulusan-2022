<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tampil dan Download Surat Keputusan Kelulusan </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/bootstrap.min.css">

  <script src="<?= base_url() ?>assets/login/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/login/js/jquery-latest.js"></script>
</head>

<body>



  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center>
          <h5 style="margin-top:  25px;"><b>TAHUN PELAJARAN 2019/2020</b></h5>
        </center>
        <center>
          <h5><b>SMKN 1 KRAGILAN</b></h5>
        </center>
        <center>
          <h5><b>Download File Surat Keputusan Kelulusan</b></h5>
        </center>
        <br>
        <!-- font ganti jenis -->
      </div>

    </div>
    <?php
    foreach ($tampil as $row) {
    ?>
    <a style="margin-bottom: 20px;" type="button" class="btn btn-danger btn-sm" href="<?= base_url() ?>C_siswa/logout_bismen" >Logout</a>

    <?php if ($row->status_kelulusan == "LULUS") { ?>
      <a style="margin-bottom: 20px;" type="button" class="btn btn-success btn-sm" href="<?php echo site_url('C_siswa/cetak_bismen/'.$row->id_siswa); ?>" >Download Surat Kelulusan</a>
    <?php }else { ?>
      <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan</p>
    <?php } ?>

    <table class="table table-bordered">
      <tr>
        <td>Nama Peserta Didik</td>
        <td>: <?= $row->nama_siswa ?></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>: <?= $row->tempat_lahir; echo ", "; echo $row->tgl_lahir ?></td>
      </tr>
      <tr>
        <td>Nama Orang Tua / Wali</td>
        <td>: <?= $row->nama_org_tua ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa</td>
        <td>: <?= $row->nis_siswa ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa Nasional</td>
        <td>: <?= $row->nisn_siswa ?></td>
      </tr>
      <tr>
        <td>Program Keahlian</td>
        <td>: <?= $row->program_keahlian ?></td>
      </tr>
      <tr>
        <td>Paket Keahlian</td>
        <td>: <?= $row->paket_keahlian ?></td>
      </tr>
      <tr>
        <td>Dinyatakan</td>
        <td>
          <b>: <?= $row->status_kelulusan ?></b>
        </td>
      </tr>
    </table>
  <?php } ?>
  </div>


</body>

</html>
