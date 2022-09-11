<?php
   error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
   switch ($_GET["aksi"]) {

      default:
   ?>

<!-- isi disini -->
<div class="container">

   <div class="mt-4 p-4 mb-4 bg-light rounded">
      <h1 class="display-4" style="text-align: center;">Halaman Menambahkan Data</h1>
      <hr class="my">
      <p style="text-align: center;">silahkan untuk menambahkan data</p>
   </div>


   <?php

   break;

   case 'tambah':


   ?>
   <!-- bagian tambah data -->
   <form action="" method="POST">
      <div class="mb-3">
         <label class="form-label">Nama</label>
         <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>

      <div class="mb-3">
         <label class="form-label">Alamat</label>
         <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>


      <div class="mb-3">
         <label class="form-label">Jenis Kelamin</label>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
               Laki Laki
            </label>
         </div>

         <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
               Wanita
            </label>
         </div>
      </div>

      <div class="mb-3">
         <label class="form-label">Agama</label>
         <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Salah Satu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
         </select>
      </div>

      <div class="mb-3">
         <label class="form-label">Sekolah Asal</label>
         <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>

      <div class="">
         <a href="?page=siswa" class="btn btn-danger">Batal</a>

         <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

   </form>

   <?php

      break;
   ?>


</div>






<!-- sampai disini -->
<?php
   break;
   }
?>