
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Surat Keterangan Lulus - SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/bootstrap.min.css">
  <script src="<?= base_url() ?>assets/login/js/bootstrap.min.js"></script>
  <style>
    .margin_p {
      margin-left: 60px;
      margin-right: 80px;
    }
    .pd_col {
      padding-left: 5px;
    }
    .margin_tb{
      margin-left: 150px;
      margin-right: 100px;
    }
  </style>
</head>
<body>

<div class="container">
<center>
  <img src="<?= base_url() ?>/assets/img/cop-surat2.png" />
</center>

  <div class="container">
    <h5 style="margin-top:20px;" align='center'>
      <u>
        SURAT KETERANGAN LULUS
      </u>
    </h5>
    <p align='center'>No. 422/1033/SMKN.1/2022</p>

    <p class="margin_p">
      Kepala SMK Negeri 1 Kragilan Selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran
      2021/2022 Berdasarkan :

      <br>1. Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013 Revisi
      <br>2. Kriteria Kelulusan dari Satuan Pendidikan sesuai dengan peraturan perundang-undangan
      <br>3. Rapat Pleno Dewan Pendidik tentang Kelulusan pada tanggal 01 Mei 2020
      <br>Menerangkan Bahwa :
    </p>

    <?php
    foreach ($tampil as $row) {
    ?>

    <table class="margin_tb" border="0">
      <tr>
        <td width="300px">Nama Peserta Didik</td>
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
    </table><br>
    <p class="margin_p">
      Dengan Nilai Sebagai Berikut :
    </p>

    <table border="1" class="margin_tb">
      <tr>
        <th width="40px"><center>NO.</th>
        <th width="400px"><center>MATA PELAJARAN</th>
        <th width="200px"><center>NILAI UJIAN SEKOLAH</th>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">A. Mata Pelajaran Muatan Nasional</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Pendidikan Agama dan Budi Pekerti</td>
        <td><center><?= $row->pai ?></td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Pancasila dan Kewarganegaraan</td>
        <td><center><?= $row->pkn ?></td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Bahasa Indonesia</td>
        <td><center><?= $row->b_ind ?></td>
      </tr>
      <tr>
        <td align='center'>4</td>
        <td class="pd_col">Matematika</td>
        <td><center><?= $row->mtk ?></td>
      </tr>
      <tr>
        <td align='center'>5</td>
        <td class="pd_col">Sejarah Indonesia</td>
        <td><center><?= $row->sejindo ?></td>

      </tr>
      <tr>
        <td align='center'>6</td>
        <td class="pd_col">Bahasa Inggris</td>
        <td><center><?= $row->b_ing ?></td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Seni Budaya</td>
        <td><center><?= $row->senbud ?></td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
        <td><center><?= $row->pjok?></td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Simulasi dan Komunikasi Digital</td>
        <td><center><?= $row->simdig ?></td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Fisika</td>
        <td><center><?= $row->fisika ?></td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Kimia</td>
        <td><center><?= $row->kimia ?></td>
      </tr>
      <tr>
        <td align='center'>4</td>
        <td class="pd_col">Produktif</td>
        <td><center><?= $row->produktif ?></td>
      </tr>
      <tr>
        <th class="pd_col" colspan="2">Rata-Rata</th>
        <td ><center>
          <?= $row->rata_rata ?>
        </td>
      </tr>

    </table>
    <img width="300px" align="right" src="<?= base_url() ?>assets/img/ttd.png" style="margin-right:  100px; margin-top: 50px"/>

  <?php } ?>

      </div>
    </div>
</div>
</div>

<script>window.print(); </script>


  </body>
</html>
