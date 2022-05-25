
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <center>
                    <h3 style="margin-top:  25px;"><b>Data SKL SMK Negeri 1 Kragilan</b></h3>
                    <h3 style=""><b>Jurusan Bismen</b></h3>
                    <!-- <h3 style="margin-top:  25px;"><b>TPM, TKR, TKJ dan RPL</b></h3> -->
                </center>
            </div>
        </div>


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
                        <center>NISN
                    </th>
                    <th>
                        <center>Tanggal Lahir
                    </th>
                    <th>
                      <center>Kelas
                    </th>
                    <th>
                      <center>Kondisi
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
                      <?= $row->nisn_siswa ?>
                    </td>
                    <td>
                      <?= $row->tgl_lahir ?>
                    </td>
                    <td>
                      <?= $row->kelas  ?>
                    </td>
                    <td>
                      <?= $row->status_kelulusan  ?>
                    </td>
                    <td>
                        <center>
                          <a href="<?php echo site_url('C_admin/siswa_hapus_bismen/'.$row->id_siswa); ?>" class="btn btn-sm btn-danger rounded-pill"
                            onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')">Hapus</a>
                          <a href="<?= site_url('C_admin/siswa_edit_bismen/'.$row->id_siswa); ?>" class="btn btn-sm btn-info">Edit</a>
                          <a href="<?= site_url('C_admin/siswa_detail_bismen/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>


            <?php
            } ?>
        </table>
    </div>

    </div>

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
