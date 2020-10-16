  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <nav class="navbar navbar-dark bg-dark mr-auto">
      <a class="navbar-brand" href="beranda.php">
        <img src="assets/img/home.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Beranda
    </a>
</nav>

<a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
</nav>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<?php 
$ID         = $_GET['id'];
$query      = mysqli_query($connect, "SELECT * FROM anggota WHERE ID = $ID");
$data       = mysqli_fetch_array($query);
$tgl_lahir  = date('d', strtotime($data['tanggal_lahir']));
$bln_lahir  = date('m', strtotime($data['tanggal_lahir']));
$thn_lahir  = date('Y', strtotime($data['tanggal_lahir']));
?>

<h3>Edit Anggota</h3>
<form action="aksi/aksi_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $ID; ?>">
    <div class="content">
        <div class="form-group">                
            <label for="nama">Nama Lengkap</label></td>
            <td><input name="nama" id="nama" type="text" class="form-control col-5" value="<?php echo $data['nama_lengkap']; ?>">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control col-5" value="<?php echo $data['tempat_lahir']; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
            </div>                
            <div class="form-row">
                <div class="col-auto">                    
                    <select name="tgl_lahir" class="form-control">
                        <?php 
                        for($tanggal = 1; $tanggal <= 31; $tanggal++) {
                           if($tanggal < 10) {
                               echo '<option value="0'. $tanggal .'"'. ($tgl_lahir == 0 . $tanggal ? ' selected="selected"' : '') .'>0'. $tanggal .'</option>';
                           }
                           else {
                               echo '<option value="'. $tanggal .'"'. ($tgl_lahir == $tanggal ? ' selected="selected"' : '') .'>'. $tanggal .'</option>';
                           }
                       }
                       ?>
                   </select>
               </div>
               <div class="col-auto">                 
                   <select name="bln_lahir" class="form-control">
                    <?php 
                    for($bulan = 1; $bulan <= 12; $bulan++) {
                        if($bulan < 10) {
                            echo '<option value="0'. $bulan .'"'. ($bln_lahir == 0 . $bulan ? ' selected="selected"' : '') .'>0'. $bulan .'</option>';
                        }
                        else {
                            echo '<option value="'. $bulan .'"'. ($bln_lahir == $bulan ? ' selected="selected"' : '') .'>'. $bulan .'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-auto">                
                <select name="thn_lahir" class="form-control">
                    <?php 
                    for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
                        echo '<option value="'. $tahun .'"'. ($thn_lahir == $tahun ? ' selected="selected"' : '') .'>'. $tahun .'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group mt-2">            
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control col-5" rows="5"><?php echo $data['alamat']; ?></textarea>
        </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" name="kota" id="kota" class="form-control col-2" value="<?php echo $data['kota']; ?>">
            </div>
            <div>
                <label for="negara">Negara</label>
                <input type="text" name="negara" id="negara" class="form-control col-2" value="<?php echo $data['negara']; ?>">
            </div class="form-group">
            <div>
                <label for="kode_pos">Kode Pos</label>
                <input type="number" name="kode_pos" id="kode_pos" class="form-control col-2" value="<?php echo $data['kode_pos']; ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td><label for="hp">No. HP</label></td>
        <td colspan="3"><input name="hp" id="hp" type="number" class="form-control col-2" value="<?php echo $data['no_hp']; ?>"></td>
    </tr>
    <tr>
        <td><label for="email">Email</label></td>
        <td colspan="3"><input name="email" id="email" type="text" class="form-control col-3" value="<?php echo $data['email']; ?>"></td>
    </tr>
    <tr>
        <td><label for="tinggi_badan">Tinggi Badan</label></td>
        <td colspan="3"><input name="tinggi_badan" id="tinggi_badan" type="number" class="form-control col-1" value="<?php echo $data['tinggi_badan']; ?>"></td>
    </tr>
    <tr>
        <td><label for="berat_badan">Berat Badan</label></td>
        <td colspan="3"><input name="berat_badan" id="berat_badan" type="number" class="form-control col-1" value="<?php echo $data['berat_badan']; ?>"></td>
    </tr>
</div>
<input type="submit" class="btn btn-dark mb-2" value="Simpan">
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>