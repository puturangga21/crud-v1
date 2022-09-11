<?php 

if (isset($_GET['pesan'])) {
   if ($_GET['pesan'] == "belum login") {
       echo    "<script>
               window.alert('Silahkan Login Terlebih Dahulu!');
               </script>";
   } elseif (($_GET['pesan'] == "username atau password salah")) {
      echo    "<script>
               window.alert('Username atau Password Salah!');
               </script>";
   } elseif (($_GET['pesan'] == "logout")) {
      echo    "<script>
               window.alert('Anda Berhasil Logout!');
               </script>";
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Login</title>
</head>

<body>

   <div class="center">
      <h1>Login</h1>

      <form method="POST" action="cek_login.php">
         <div class="txt_field">
            <input type="text" required name="username">
            <span></span>
            <label>Username</label>
         </div>

         <div class="txt_field">
            <input type="password" required name="password">
            <span></span>
            <label>Password</label>
         </div>

         <div class="pass">Lupa Password?</div>
         <input type="submit" value="Login">

         <div class="signup_link">
         </div>

      </form>
   </div>

</body>

</html>