<?php
   error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
   switch ($_GET["aksi"]) {

      default:
   ?>

<!-- isi disini -->
<div class="container">

   <div class="mt-4 p-4 mb-4 bg-light rounded">
      <h1 class="display-4" style="text-align: center;">Selamat Datang di Website Saya</h1>

   </div>

   <div class="mb-4">
      <a href="index.php?page=peserta&aksi=tambah" class="btn btn-primary">Tambah Data</a>
   </div>

   <table class="table table-bordered">
      <thead>
         <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Peserta</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Aksi</th>
         </tr>
      </thead>

      <tbody>
         <tr>

            <?php

            $query  = mysqli_query($koneksi, "SELECT * FROM peserta");
            $no = 1;

            while ($row = mysqli_fetch_array($query)) {
               echo "
                  <tr>
                     <td>" . $no . "</td>
                     <td>" . $row['nama'] . "</td>
                     <td>" . $row['alamat'] . "</td>
                     <td>" . $row['jenkel'] . "</td>
                     <td>" . $row['agama'] . "</td>
                     <td>" . $row['sekolah'] . "</td>
                                                  
                     <td>
                        <a class='btn btn-warning' href='index.php?page=peserta&aksi=edit&id=" . $row['id'] . "'>Edit</a>                                                     
                        <a class='btn btn-danger' href='modules/peserta.php?aksi=hapus&id=" . $row['id'] . "'>Hapus</a>
                     </td>
                  </tr>
            ";
               $no++;
            }
            ?>
         </tr>

      </tbody>

   </table>

</div>

<?php

break;

case 'tambah':

?>

<div class="container">
   <div class="mt-4 p-4 mb-4 bg-light rounded">
      <h1 class="display-4" style="text-align: center;">Halaman Menambahkan Data</h1>
      <hr class="my">
      <p style="text-align: center;">silahkan untuk menambahkan data</p>
   </div>
</div>
<!-- bagian tambah data -->
<div class="container">
   <form action="modules/peserta.php?aksi=tambah" method="POST">

      <div class="hide">

         <input type="hidden" class="form-control" name="id">
      </div>

      <div class="mb-3">
         <label class="form-label">Nama</label>
         <input type="text" class="form-control" name="nama">
      </div>

      <div class="mb-3">
         <label class="form-label">Alamat</label>
         <input type="text" class="form-control" name="alamat">
      </div>


      <div class="mb-3">
         <label class="form-label">Jenis Kelamin</label><br>

         <input class="form-check-input" type="radio" name="jenkel" value="Laki Laki" checked>
         <label>Laki Laki</label><br>

         <input class="form-check-input" type="radio" name="jenkel" value="Perempuan">
         <label>Perempuan</label>

      </div>

      <div class="mb-3">
         <label class="form-label">Agama</label>
         <select class="form-select" aria-label="Default select example" name="agama">
            <option selected>Pilih Salah Satu</option>
            <option value="Hindu">Hindu</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
         </select>
      </div>

      <div class="mb-3">
         <label class="form-label">Sekolah Asal</label>
         <input type="text" class="form-control" name="sekolah">
      </div>

      <div class="">
         <a href="?page=peserta" class="btn btn-danger">Batal</a>

         <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

   </form>
</div>


<?php

break;

case 'edit':

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);

?>

<div class="container">
   <div class="mt-4 p-4 mb-4 bg-light rounded">
      <h1 class="display-4" style="text-align: center;">Halaman Edit Data</h1>
      <hr class="my">
      <p style="text-align: center;">silahkan untuk edit data</p>
   </div>
</div>
<!-- bagian edit data -->
<div class="container">
   <form action="modules/peserta.php?aksi=edit" method="POST">

      <div class="">
         <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>>
      </div>

      <div class=" mb-3">
         <label class="form-label">Nama</label>
         <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
      </div>

      <div class="mb-3">
         <label class="form-label">Alamat</label>
         <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
      </div>


      <div class="mb-3">
         <label class="form-label">Jenis Kelamin</label><br>

         <input class="form-check-input" type="radio" name="jenkel" value="Laki Laki"
            <?= ($row['jenkel'] == "Laki Laki")?'checked':''?>>
         <label>Laki Laki</label><br>

         <input class="form-check-input" type="radio" name="jenkel" value="Perempuan"
            <?= ($row['jenkel'] == 'Perempuan')?'checked':''?>>
         <label>Perempuan</label>



      </div>

      <div class="mb-3">
         <label class="form-label">Agama</label>
         <select class="form-select" aria-label="Default select example" name="agama">
            <option selected><?php echo $row['agama']; ?></option>
            <option value="Hindu">Hindu</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
         </select>
      </div>

      <div class="mb-3">
         <label class="form-label">Sekolah Asal</label>
         <input type="text" class="form-control" name="sekolah" value="<?php echo $row['sekolah']; ?>">
      </div>

      <div class="">
         <a href="?page=peserta" class="btn btn-danger">Batal</a>

         <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

   </form>
</div>


<!-- sampai disini -->
<?php
   break;
   }
?>