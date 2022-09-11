<?php

include("../koneksi.php");

switch ($_GET['aksi']) {
   case 'tambah':

        $id                   = $_POST['id'];
        $nama                 = $_POST['nama'];
        $alamat               = $_POST['alamat'];
        $jenkel               = $_POST['jenkel'];
        $agama                = $_POST['agama'];
        $sekolah              = $_POST['sekolah'];
        // Data sudah ditangkap namun belum dimasukan ke database

        $query = mysqli_query($koneksi, "INSERT INTO peserta( id,nama,alamat,jenkel,agama,sekolah ) VALUES
        ('',
        '$nama',
        '$alamat',
        '$jenkel',
        '$agama',
        '$sekolah')");


   echo "<script>
         window.alert('Data Berhasil Ditambahkan');
         window.location.href='../index.php?page=peserta';
         </script>";

        break;

    case 'edit':

        $id                   = $_POST['id'];
        $nama                 = $_POST['nama'];
        $alamat               = $_POST['alamat'];
        $jenkel               = $_POST['jenkel'];
        $agama                = $_POST['agama'];
        $sekolah              = $_POST['sekolah'];
        // Data sudah ditangkap namun belum dimasukan ke database

        mysqli_query($koneksi, "UPDATE peserta SET
        nama                ='$nama',
        alamat              ='$alamat',
        jenkel              ='$jenkel',
        agama               ='$agama',
        sekolah             ='$sekolah'
        WHERE id            ='$id'");

    echo "<script>
        window.alert('Data Berhasil Diedit');
        window.location.href='../index.php?page=peserta';
        </script>";

        break;

    case 'hapus':

        $id = $_GET['id'];

        $query = mysqli_query($koneksi, "DELETE FROM peserta WHERE id = '$id' ");
        var_dump($id);
        var_dump($query);
        
    echo "<script>
        window.alert('Data Berhasil Dihapus');
        window.location.href='../index.php?page=peserta';
        </script>";


        break;
}