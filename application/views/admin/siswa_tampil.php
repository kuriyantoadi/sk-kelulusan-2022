<!DOCTYPE html>
<html lang="en">

<head>
    <title>SKL SMK Negeri 1 Kragilan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='#' rel='shortcut icon' type='image/x-icon' />
    <link href="<?= base_url() ?>assets/login/css/bootstrap.css" rel="stylesheet">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <center>
                    <h3 style="margin-top:  25px;"><b>Data SKL SMK Negeri 1 Kragilan</b></h3>
                </center>
            </div>
        </div>

        <a style="margin-bottom: 20px;" type="button" class="btn btn-danger btn-sm" href="<?= base_url() ?>C_login/admin_logout" >Logout</a>


        <table class="table table-bordered table-hover" id="tabel_js">
            <thead>
                <tr>
                    <th>
                        <center>No
                    </th>
                    <th>
                        <center>Nama
                    </th>
                    <th>
                      <center>Kompetensi Keahlian
                    </th>
                    <th>
                        <center>Opsi
                    </th>

                </tr>
            </thead>
            <?php
            $no=1;
            foreach ($tampil_siswa as $row) {
            ?>
                <tr>
                    <td>
                        <center><?php echo $no++ ?>
                    </td>
                    <td>
                      <?= $row->nama_siswa ?>
                    </td>
                    <td>
                      <?= $row->program_keahlian  ?>
                    </td>
                    <td>
                        <center>
                          <a href="<?php echo site_url('C_admin/siswa_hapus/'.$row->id_siswa); ?>" class="btn btn-sm btn-danger rounded-pill"
                            onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')">Hapus</a>
                          <a href="<?= site_url('C_admin/siswa_edit/'.$row->id_siswa); ?>" class="btn btn-sm btn-info">Edit</a>
                          <a href="<?= site_url('C_admin/siswa_detail/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary">Detail</a>
                          <!-- <a href="<?= site_url('C_admin/siswa_download/'.$row->id_siswa); ?>" class="btn btn-sm btn-success">Download</a> -->
                    </td>
                </tr>


            <?php
            } ?>
        </table>
    </div>

    </div>

    <script src="<?= base_url() ?>assets/login/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/dataTable/jquery.js"></script>
    <script src="<?= base_url() ?>assets/dataTable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/dataTable/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel_js').DataTable();
        });
    </script>
</body>

</html>
