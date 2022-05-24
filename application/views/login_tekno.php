<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SKL 2022</title>
</head>

<body>
  <link href="<?= base_url() ?>assets/login/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="<?= base_url() ?>assets/login/js/jquery-latest.js"></script>
  <script src="" charset="utf-8"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/login.css">
  <!-- Include the above in your HEAD tag ---------->

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="<?= base_url() ?>assets/img/logo-smk.png" style="margin-top: 20px; margin-bottom: 10px" height="130px" alt="logo SMK Negeri 1 Kragilan">
        <h5 style="">SMK Negeri 1 Kragilan</h5>
        <h5 style="">Download Surat Kelulusan Tahun 2022</h5>
        <h6 style="margin-bottom: 20px;">Jurusan TPM, TKR, TKJ dan RPL</h6>

        <?= $this->session->flashdata('msg') ?>


      </div>

      <!-- Login Form -->

      <?= form_open('C_login/login_tekno'); ?>
        <input type="text" id="login" class="fadeIn second" name="nisn_siswa" placeholder="NISN" required>
        <input type="password" id="login" class="fadeIn second" name="password" placeholder="Password" required>
        <input type="submit" class="fadeIn fourth" >
        <br><a type="button" class="btn btn-info" href="<?= base_url() ?>C_login/siswa_bismen" style="margin-bottom: 20px">Login AKL dan OTKP</a>

      <?= form_close() ?>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a onclick="lupa_pass()" class="underlineHover" href="#">Tidak Tau Password?</a>

        <script>
        function lupa_pass() {
          alert("Untuk password sudah dibagikan ke wali kelas masing-masing.");
        }
        </script>

      </div>



    </div>
  </div>
</body>

</html>
