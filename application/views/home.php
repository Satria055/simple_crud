<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Home</title>
  </head>
  <body>
    <h1>Data Siswa</h1>

    <a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Siswa</a>
    <br>
    <br>
    <table border="1">
      <tr>
        <td>No</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Jurusan</td>
        <td>Aksi</td>
      </tr>
      <?php
        $count = 0;
        foreach ($queryAllSw as $row){
          $count = $count + 1;
       ?>
      <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $row->nis ?></td>
        <td><?php echo $row->nama ?></td>
        <td><?php echo $row->jurusan ?></td>
        <td><a href="<?php echo base_url('/Home/halaman_edit') ?>/<?php echo $row->nis ?>">Edit</a> |
          <a href="<?php echo base_url('/Home/fungsiDelete') ?>/<?php echo $row->nis ?>">Delete</a></td>
      </tr>
<?php } ?>
    </table>
  </body>
</html>
