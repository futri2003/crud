<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('template/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/font/css/all.css') ?>">
    <title>Document</title>
</head>
<body>
    <center>
<table border="1">
 <thead>
 <tr>
 <th>No</th>
 <th>Nama Depan</th>
 <th>Nama Belakang</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Jenis Kelamin</th>
 <th>Alamat</th>
 <th>Jenjang Pendidikan</th>
 <th>Action</th>
 </tr>
 </thead>
<h3>DATA PROFILE – FUTRI NURLAILI - 2022</h3>
<br>
<a href="<?= base_url('profile/tambah_data_profile')?>"> <p class="text-center">Tambah Data Profile</p> </a>
 <tbody>
 <?php $no = 1; foreach($profile as $p) { ?>
 <tr>
 <td><?= $no ?></td>
 <td><?= $p->nama_depan ?></td>
 <td><?= $p->nama_belakang ?></td>
 <td><?= $p->tempat_lahir ?></td>
 <td><?= $p->tanggal_lahir ?></td>
 <td><?= $p->jenis_kelamin ?></td>
 <td><?= $p->alamat ?></td>
 <td><?= $p->jenjang_pendidikan ?></td>
 <td>
 <a href="<?= base_url('profile/update_data/' .$p->id)?>"> Edit </a> II 
 <a href="<?= base_url('profile/hapus_data/' .$p->id)?>"> Hapus </a>
 </td>
 
 </tr>
 <?php $no++; } ?>
 </tbody>
 </table>
 </center>
</body>
</html>