<?php
include 'koneksi.php';
$query = "SELECT * FROM tb_unesa;";
$sql = mysqli_query($conn, $query);
$nomor = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    
    <title> CRUD Sederhana - R.Gading Utama A.P</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    <!-- Judul -->
    <div class="container">
     <h2 class="mt-3">Data Mahasiswa UNESA</h2>
         <blockquote class="blockquote">
          <p>Create, Read, Update, dan Delete.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Oleh <cite title="Source Title">R.Gading Utama A.P (20051214050)</cite>
        </figcaption>
      </figure>
      <!--Tabel-->
      <a href="kelola.php" type="button" class="btn btn-primary mb-4">Tambah Data</a>
      <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Email</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
while ($result = mysqli_fetch_assoc($sql))
{
?>
            <tr>
              <td><?php echo ++$nomor; ?>. </td>
              <td><?php echo $result['nim_mhs']; ?></td>
              <td><?php echo $result['nama_mhs']; ?></td>
              <td><?php echo $result['jenis_kelamin']; ?></td>
              <td><?php echo $result['alamat']; ?></td>
              <td><?php echo $result['kota']; ?></td>
              <td><?php echo $result['email']; ?></td>
              <td>
                <img src="img/<?php echo $result['foto']; ?>" style="width: 70px">
              </td>
              <td><a href="kelola.php?ubah=<?php echo $result['id_mhs']; ?>" type="button" class="btn btn-success btn-sm">Ubah</a>
              <a href="proses.php?hapus=<?php echo $result['id_mhs']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></td>
              <?php
}
?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>
