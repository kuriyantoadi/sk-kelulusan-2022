<!DOCTYPE html>
<html lang="en">

<head>
    <title>SKL SMK Negeri 1 Kragilan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='#' rel='shortcut icon' type='image/x-icon' />
    <link href="<?= base_url() ?>assets/login/css/bootstrap.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/login/js/bootstrap.js"></script>


</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin SKL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>C_admin/siswa_tekno">Teknologi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>C_admin/siswa_bismen">Bismen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="<?= base_url() ?>C_login/admin_logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
