<?php
include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = MD5($_POST['password']);

$row = mysqli_query($koneksi, "SELECT * FROM admin WHERE username ='$username' and password ='$password'");

$cek = mysqli_num_rows($row);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    echo    "<script>
            window.alert('Anda Berhasil Login!');
            window.location.href='index.php';
            </script>";
} else {
    header('location:login.php?pesan=username atau password salah');
}