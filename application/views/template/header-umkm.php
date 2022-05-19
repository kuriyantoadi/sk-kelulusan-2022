<?php
$ses_nama = $this->session->userdata('ses_username');
$ses_id = $this->session->userdata('ses_id');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PT. Agro Serang Berkah </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="<?= base_url() ?>C_umkm/dashboard"><img src="<?= base_url() ?>assets/images/logo-dashboard.png" alt=""/></a>

          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url() ?>assets/images/logo-dashboard-2.png" alt=""/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <!-- <img src="images/faces/face5.jpg" alt="profile"/> -->
              <span class="nav-profile-name">UMKM ( <?= $ses_nama ?> ) </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url() ?>C_umkm/profil">
                <i class="mdi mdi-account text-primary"></i>
                Profil UMKM
              </a>
              <a class="dropdown-item" href="<?= base_url() ?>C_login/logout_umkm">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/dashboard">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/kode_pesanan">
              <i class="mdi mdi mdi-cart menu-icon"></i>
              <span class="menu-title">Pemesanan komoditi</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/konfirmasi_pesanan">
              <i class="mdi mdi-comment-check-outline menu-icon"></i>
              <span class="menu-title">Konfirmasi Pemesanan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/data_komoditi">
              <i class="mdi mdi mdi-food-variant menu-icon"></i>
              <span class="menu-title">Data Komoditi</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/masyarakat">
              <i class="mdi mdi-account-card-details menu-icon"></i>
              <span class="menu-title">Data Masyarakat</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/info">
              <i class="mdi mdi mdi-pin menu-icon"></i>
              <span class="menu-title">Info Masyarakat</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>C_umkm/pengambilan">
              <i class="mdi mdi mdi-human-greeting menu-icon"></i>
              <span class="menu-title">Ulasan Pengambilan Komoditi</span>
            </a>
          </li>

        </ul>
      </nav>
