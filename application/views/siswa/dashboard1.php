<?php
  session_start();
  if ($_SESSION['status']!="LULUS") {
      header("location:index.php?pesan=belum_login");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tampil dan Download Surat Keputusan Kelulusan </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-latest.js"></script>
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

<a style="margin-bottom: 20px;" type="button" class="btn btn-danger btn-sm" href="logout.php" >Logout</a>
    <table class="table table-bordered table-hover" id="domainsTable">
      <thead>
        <tr>
          <th>
            <center>No
          </th>
          <th>
            <center>NISN Siswa
          </th>
          <th>
            <center>Nama Siswa
          </th>
          <th>
            <center>Kompetentsi Keahlian
          </th>
          <th>
            <center>Status
          </th>
          <th>
            <center>Surat Kelulusan
          </th>

        </tr>
      </thead>
      <tbody>
        <?php
      include 'koneksi.php';
      $nisn = $_GET['nisn'];
      $no=1;
    $data = mysqli_query($koneksi, "SELECT
      nisn,
      nama_siswa,
      kelas,
      kode_kelas,
      nama_file,
      status
      from login where nisn='$nisn' ");
    while ($d = mysqli_fetch_array($data)) {
        ?>

        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <td>
            <center><?php echo $d['nisn']; ?>
          </td>
          <td>
            <?php echo $d['nama_siswa']; ?>
          </td>
          <td>
            <center><?php echo $d['kelas']; ?>
          </td>
          <td>
            <center><?php echo $d['status']; ?>
          </td>
          <td>
            <center><a type="button" class="btn btn-info btn-sm" href="pdf/<?php echo $d['kode_kelas']; ?>/<?php echo $d['nama_file']; ?>" >Download</a>
          </td>
        </tr>

        <?php
    } ?>
      </tbody>
    </table>
  </div>


</body>

</html>
