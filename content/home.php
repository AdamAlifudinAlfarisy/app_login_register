<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <nav class="navbar navbar-dark bg-dark mr-auto">
      <a class="navbar-brand" href="beranda.php">
        <img src="assets/img/home.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Beranda
      </a>
    </nav>

    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
  </nav>

  <a href="index.php?page=tambah" class="btn btn-dark">Tambah</a>
  <div class="content">
    <table class="table" width="100%" cellpadding="0" cellspacing="0">
      <thead class="thead-dark">
        <tr align="center">
          <th width="1%" align="left">No</th>
          <th width="15%">Nama</th>
          <th width="10%">Alamat</th>
          <th width="10%">No. Hp</th>
          <th width="10%">Email</th>
          <th width="15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $anggota = mysqli_query($connect, "SELECT * FROM anggota ORDER BY ID DESC");
        $no = 1;
        while($data = mysqli_fetch_array($anggota)) { ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td align="center"><?php echo $data['no_hp']; ?></td>
            <td align="center"><?php echo $data['email']; ?></td>
            <td align="center"><a href="index.php?page=detail&id=<?php echo $data['ID']; ?>">Lihat</a> | <a href="index.php?page=update&id=<?php echo $data['ID']; ?>">Edit</a> | <a href="index.php?page=hapus&id=<?php echo $data['ID']; ?>">Hapus</a></td>
          </tr>
          <?php $no++;
        } ?>
      </tbody>
    </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>