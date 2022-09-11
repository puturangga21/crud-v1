<?php 
include "koneksi.php";

session_start();

if ($_SESSION['username'] == "") {
   header('location:login.php?pesan=belum login');
 }

?>


<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Digital Talent</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

   <!-- bagian navbar -->
   <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
         <a class="navbar-brand" href="index.php">Digital Talent</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php?page=peserta">Calon Peserta</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="index.php?page=peserta&aksi=tambah">Daftar Baru</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
               </li>


            </ul>

         </div>
      </div>


   </nav>

   <!-- isi -->
   <?php
    //Mengecek apabula folder halaman berisi sesuatu
    if (!empty($_GET["page"])) {
        //Memanggil folder halaman
        include("halaman/" . $_GET['page'] . ".php");
    } else {
        include("halaman/dashboard.php");
    };
    ?>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
   </script>
</body>

</html>