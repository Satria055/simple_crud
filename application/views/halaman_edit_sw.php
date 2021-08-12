<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Edit Siswa</title>
  </head>
  <body>
    <h3>Halaman Edit Siswa</h3>
    <form action="<?php echo base_url('Home/fungsiEdit') ?>" method="post">
    <table>
      <tr>
        <td>NIS</td>
        <td>:</td>
        <td><input type="text" name="nis" value="<?php echo $querySwDetail->nis ?>" readonly></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo $querySwDetail->nama ?>"></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><input type="text" name="jurusan" value="<?php echo $querySwDetail->jurusan ?>"></td>
      </tr>
      <tr>
        <td colspan="3"><button type="submit">Update Siswa</button></td>
      </tr>
    </table>
  </form>
  </body>
</html>
