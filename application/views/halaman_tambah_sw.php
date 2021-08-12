<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Tambah Siswa</title>
  </head>
  <body>
    <h3>Halaman Tambah Siswa</h3>
    <form action="<?php echo base_url('Home/fungsiTambah') ?>" method="post">
    <table>
      <tr>
        <td>NIS</td>
        <td>:</td>
        <td><input type="text" name="nis"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><input type="text" name="jurusan"></td>
      </tr>
      <tr>
        <td colspan="3"><button type="submit">Tambah Siswa</button></td>
      </tr>
    </table>
  </form>
  </body>
</html>
