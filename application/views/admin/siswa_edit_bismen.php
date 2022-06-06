  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Edit Data Siswa</h3>

    <?php
    foreach ($tampil as $row) {
    ?>

    <a style="margin-bottom: 20px;" type="button" class="btn btn-warning btn-sm" href="<?= base_url() ?>C_admin/siswa_bismen" >Kembali</a>
    <a style="margin-bottom: 20px;" type="button" class="btn btn-danger btn-sm" href="<?= base_url() ?>C_admin/siswa_pass_bismen/<?= $row->id_siswa ?>" >Ganti Password</a>

    <table class="table table-bordered">
      <?= form_open('C_admin/siswa_edit_up_bismen'); ?>

      <tr>
        <td width="300px">Nama Peserta Didik</td>
        <td >
          <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
          <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" required>
        </td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>
          <input class="form-control" type="text" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" required>
        </td>
      </tr>
      <tr>
        <td>Tanggal Lahir (tgl/bln/thn)</td>
        <td>
          <input class="form-control" type="text" name="tgl_lahir" value="<?= $row->tgl_lahir ?>" required>
        </td>
      </tr>
      <tr>
        <td>Nama Orang Tua / Wali</td>
        <td>
          <input class="form-control" type="text" name="nama_org_tua" value="<?= $row->nama_org_tua ?>" required>
        </td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa</td>
        <td>
          <input class="form-control" type="text" name="nis_siswa" value="<?= $row->nis_siswa ?>" required>
        </td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa Nasional</td>
        <td>
          <input class="form-control" type="text" name="nisn_siswa" value="<?= $row->nisn_siswa ?>"required>
        </td>
      </tr>
      <tr>
        <td>Program Keahlian</td>
        <td>
          <input class="form-control" type="text" name="program_keahlian" value="<?= $row->program_keahlian ?>" required>
        </td>
      </tr>
      <tr>
        <td>Paket Keahlian</td>
        <td>
          <select class="form-control" name="paket_keahlian" required>
            <option value="<?= $row->paket_keahlian ?>">Pilihan Sebelumnya ( <?= $row->paket_keahlian ?> )</option>
            <option value="AKUNTANSI DAN KEUANGAN LEMBAGA">AKUNTANSI DAN KEUANGAN LEMBAGA</option>
            <option value="OTOMATISASI DAN TATA KELOLA PERKANTORAN">OTOMATISASI DAN TATA KELOLA PERKANTORAN</option>
            <option value="TEKNIK KOMPUTER DAN JARINGAN">TEKNIK KOMPUTER DAN JARINGAN</option>
            <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
            <option value="TEKNIK KENDARAAN RINGAN">TEKNIK KENDARAAN RINGAN</option>
            <option value="TEKNIK PEMESINAN">TEKNIK PEMESINAN</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Dinyatakan</td>
        <td>
          <select class="form-control" name="status_kelulusan" required>
            <option value="<?= $row->status_kelulusan ?>">Pilihan Sebelumnya ( <?= $row->status_kelulusan ?>)</option>
            <option value="LULUS">LULUS</option>
            <option value="DITUNDA">DITUNDA</option>
          </select>
        </td>
      </tr>
    </table>


    <h3 align='center' style="margin-top: 30px; margin-bottom: 20px">Edit Nilai Siswa</h3>

    <table class="table table-bordered">
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
        <td>
          <input class="form-control" type="text" name="pai" value="<?= $row->pai ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Pancasila dan Kewarganegaraan</td>
        <td>
          <input class="form-control" type="text" name="pkn" value="<?= $row->pkn ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Bahasa Indonesia</td>
        <td>
          <input class="form-control" type="text" name="b_ind" value="<?= $row->b_ind ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>4</td>
        <td class="pd_col">Matematika</td>
        <td>
          <input class="form-control" type="text" name="mtk" value="<?= $row->mtk ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>5</td>
        <td class="pd_col">Sejarah Indonesia</td>
        <td>
          <input class="form-control" type="text" name="sejindo" value="<?= $row->sejindo ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>6</td>
        <td class="pd_col">Bahasa Inggris</td>
        <td>
          <input class="form-control" type="text" name="b_ing" value="<?= $row->b_ing ?>" required>
        </td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Seni Budaya</td>
        <td>
          <input class="form-control" type="text" name="senbud" value="<?= $row->senbud ?>"required>
        </td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
        <td>
          <input class="form-control" type="text" name="pjok" value="<?= $row->pjok ?>" required>
        </td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Simulasi dan Komunikasi Digital</td>
        <td>
          <input class="form-control" type="text" name="simdig" value="<?= $row->simdig ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">IPA</td>
        <td>
          <input class="form-control" type="text" name="ipa" value="<?= $row->ipa ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Produktif</td>
        <td>
          <input class="form-control" type="text" name="produktif" value="<?= $row->produktif ?>" required>
        </td>
      </tr>
      <tr>
        <td align='center'></td>
        <td class="pd_col">Rata-rata</td>
        <td>
          <input class="form-control" type="text" name="rata_rata" value="<?= $row->rata_rata ?>" required>
        </td>
      </tr>


    </table>

  <?php } ?>
  <center>
<input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info">

    <?= form_close(); ?>

    </div>
</div>
</div>



  </body>
</html>
