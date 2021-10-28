<!DOCTYPE html>

<?php
include 'koneksi.php';
$id_mhs = '';
$nim_mhs = '';
$nama_mhs = '';
$jenis_kelamin = '';
$alamat = '';
$kota = '';
$email = '';

if (isset($_GET['ubah']))
{
    $id_mhs = $_GET['ubah'];
    $query = "SELECT * FROM tb_unesa WHERE id_mhs = '$id_mhs';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nim_mhs = $result['nim_mhs'];
    $nama_mhs = $result['nama_mhs'];
    $jenis_kelamin = $result['jenis_kelamin'];
    $alamat = $result['alamat'];
    $kota = $result['kota'];
    $email = $result['email'];
}
?>


<html>
<head>
	<meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    
    <title> CRUD Sederhana - R.Gading Utama A.P</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
        <img src="img/logo.png" style="width: 30px">&nbsp;&nbsp;<a class="navbar-brand" href="#">CRUD Data Mahasiswa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Made with <span style="color: #e25555;">&hearts;</span> by Gading Utama </a>
            </div>
          </div>
        </div>
      </nav>
      <!--Form-->
      <div class="container">
         <form method="POST" action="proses.php">
           <input type="hidden" value="<?php echo $id_mhs; ?>" name="id_mhs">
         <div class="mb-3 row">
    <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" name="nim_mhs" class="form-control" id="NIM" placeholder="Contoh : 20051214050" value="<?php echo $nim_mhs; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Nama Mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
    <div class="col-sm-10">
      <input type="text" name="nama_mhs" class="form-control" id="Nama Mahasiswa" placeholder="Contoh : R.Gading Utama A.P" value="<?php echo $nama_mhs; ?>">
    </div>
  </div>
  <div class="mb-3 row">
  <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
  <select class="form-select" name="jenis_kelamin" aria-label="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>">
  <option <?php if ($jenis_kelamin == 'Laki=Laki')
{
    echo "selected";
} ?> value="Laki-laki">Laki-laki</option>
  <option <?php if ($jenis_kelamin == 'Perempuan')
{
    echo "selected";
} ?> value="Perempuan">Perempuan</option>
</select>
</div>
</div>
  <div class="mb-3 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text"  name="alamat" class="form-control" id="Alamat" placeholder="Contoh : Jl.Dharmahusada 12C" value="<?php echo $alamat; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Kota" class="col-sm-2 col-form-label">Kota</label>
    <div class="col-sm-10">
      <input type="text" name="kota" class="form-control" id="Kota" placeholder="Contoh : Surabaya" value="<?php echo $kota; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="Email" placeholder="Contoh : unesa@ac.id" value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Foto Mahasiswa</label>
  <input class="form-control" type="file" name="foto" id="formFile">
</div>
</div>
<div class="container" class="mb-3 row">
    <div class ="col">
      <?php
if (isset($_GET['ubah']))
{
?>
    <button type="submit" name="aksi" value="edit" class="btn btn-success btn-sm">Simpan</button>
    <?php
}
else
{
?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary btn-sm">Tambah</button>  
   <?php
}
?>
    <a href="index.php" type="button" class="btn btn-danger btn-sm">Batal</a>
    </div>
</div>
</form>
</div>
</body>
</html>
