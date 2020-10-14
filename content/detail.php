  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<?php 
$ID = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM anggota WHERE ID = $ID");
$data = mysqli_fetch_array($query);
?>
<h3>Detail Anggota</h3>
<div class="content">
    <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%">Nama Lengkap</td>
            <td width="1%">:</td>
            <td><?php echo $data['nama_lengkap']; ?></td>
        </tr>
        <tr>
            <td>Tempat/Tgl. Lahir</td>
            <td width="1%">:</td>
            <td><?php echo $data['tempat_lahir']; ?>, <?php echo date('j F Y', strtotime($data['tanggal_lahir'])); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td width="1%">:</td>
            <td><?php echo $data['alamat']; ?>, <?php echo $data['kota']; ?>, <?php echo $data['negara']; ?> <?php echo $data['kode_pos']; ?></td>
        </tr>
        <tr>
            <td>No. Hp</td>
            <td width="1%">:</td>
            <td><?php echo $data['no_hp']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td width="1%">:</td>
            <td><?php echo $data['email']; ?></td>
        </tr>
        <tr>
            <td>Tinggi Badan</td>
            <td width="1%">:</td>
            <td><?php echo $data['tinggi_badan']; ?> cm</td>
        </tr>
        <tr>
            <td>Berat Badan</td>
            <td width="1%">:</td>
            <td><?php echo $data['berat_badan']; ?> kg</td>
        </tr>
    </table>
</div>
<a href="index.php" class="btn btn-dark">Kembali</a>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>