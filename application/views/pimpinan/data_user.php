<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">


    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 align='center' style="margin-bottom: 30px" class="display-4">Data User</h1>

            <?= $this->session->flashdata('msg') ?>
            <!-- <a class="btn btn-primary btn-sm" style="margin-bottom: 20px" href="<?= base_url() ?>C_user/data_umkm_tambah">Tambah</a> -->
            <table class="table table-bordered table-hover" id="example">
              <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Username
                </th>
                <th>
                  <center>Status
                </th>
                <!-- <th><center>Pilihan</th> -->
              </tr>
            </thead>

            <?php
            $no=1;
            foreach ($tampil as $row) {
             ?>

              <tr>
                <td><center><?= $no++ ?></td>
                <td><center><?= $row->username; ?></td>
                <td><center><?= $row->status; ?></td>
                <!-- <td><center> -->
                  <!-- <a href="<?php echo site_url('C_user/data_umkm_hapus/'.$row->id_umkm); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menhapus data <?= $row->nama_umkm ?> ?')">Hapus</a>
                  <a href="<?php echo site_url('C_user/data_umkm_edit/'.$row->id_umkm); ?>" class="btn btn-sm btn-info">Edit</a> -->
                  <!-- <a href="<?php echo site_url('C_pimpinan/data_umkm_detail/'.$row->id_umkm); ?>" class="btn btn-sm btn-success">Detail</a> -->
                <!-- </td> -->
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
