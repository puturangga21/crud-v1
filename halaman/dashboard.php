<?php
   error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
   switch ($_GET["aksi"]) {

      default:
   ?>

<!-- isi disini -->
<div class="container">

   <div class="mt-4 p-5 bg-light rounded">
      <h1 class="display-4">Selamat Datang di Website Saya</h1>
      <p class="lead">Halo, nama saya </p>
      <hr class="my-4">
      <p>Silahkan melihat daftar calon peserta</p>
      <a class="btn btn-primary btn-lg" href="index.php?page=peserta" role="button">Calon Peserta</a>
   </div>
</div>


<!-- sampai disini -->
<?php
   break;
   }
?>