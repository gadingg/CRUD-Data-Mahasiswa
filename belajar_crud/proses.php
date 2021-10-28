<?php
include 'koneksi.php';

//Perkondisian
if (isset($_POST['aksi']))
{
    if ($_POST['aksi'] == "add")
    {
        $nim_mhs = $_POST['nim_mhs'];
        $nama_mhs = $_POST['nama_mhs'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $email = $_POST['email'];
        $foto = "img3.jpg";

        $query = "INSERT INTO tb_unesa VALUES(null, '$nim_mhs', '$nama_mhs', '$jenis_kelamin', '$alamat', '$kota', '$email', '$foto')";
        $sql = mysqli_query($conn, $query);
        if ($sql)
        {
            header("location: index.php");
        }
        else
        {
            echo $query;
        }

    }
    else if ($_POST['aksi'] == "edit")
    {
       $id_mhs = $_POST['id_mhs'];
       $nim_mhs = $_POST['nim_mhs'];
       $nama_mhs = $_POST['nama_mhs'];
       $jenis_kelamin = $_POST['jenis_kelamin'];
       $alamat = $_POST['alamat'];
       $kota = $_POST['kota'];
       $email = $_POST['email'];

       $query = "UPDATE tb_unesa SET nim_mhs='$nim_mhs', nama_mhs='$nama_mhs', jenis_kelamin ='$jenis_kelamin', alamat='$alamat', alamat='$kota', email='$email' WHERE id_mhs='$id_mhs';";
       $sql = mysqli_query($conn, $query);
       if ($sql)
       {
           header("location: index.php");
       }
       else
       {
           echo $query;
       }

    if (isset($_GET['hapus']))
    {
        $id_mhs = $_GET['hapus'];
        $query = "DELETE FROM tb_unesa WHERE id_mhs = '$id_mhs';";
        $sql = mysqli_query($conn, $query);
        if ($sql)
        {
            header("location: index.php");
        }
        else
        {
            echo $query;
        }
    }
}
}
?>
