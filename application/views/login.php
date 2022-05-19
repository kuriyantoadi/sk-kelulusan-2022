<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>
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
        <h5 style="margin-bottom: 20px;">Download Surat Kelulusan Tahun 2022</h5>
      </div>

      <!-- Login Form -->

      <?= form_open('C_siswa/user_login'); ?>
        <input type="text" id="login" class="fadeIn second" name="nisn_siswa" placeholder="NISN">
        <input type="password" id="login" class="fadeIn second" name="password" placeholder="Password">
        <input type="submit" class="fadeIn fourth" >
      <?= form_close() ?>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
</body>

</html>
