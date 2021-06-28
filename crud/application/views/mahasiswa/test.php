<html>
  <head>
    <title>Form Ubah - CRUD Codeigniter</title>
  </head>
  <body>
    <h1>Form Ubah Data Mahasiswa</h1>
    <hr>

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <?php echo form_open("mahasiswa/ubah/".$mahasiswa->nim); ?>
    <div class="card">  
        <tr>
          <td>NRP</td>
          <td><input type="text" name="input_nim" value="<?php echo set_value('input_nim', $mahasiswa->nim); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($mahasiswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($mahasiswa->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="input_kontak" value="<?php echo set_value('input_kontak', $mahasiswa->kontak); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea></td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td><input type="text" name="input_jurusan" value="<?php echo set_value('input_jurusan', $mahasiswa->jurusan); ?>"></td>
        </tr>
    </div>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>