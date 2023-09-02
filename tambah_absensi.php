<?php
require 'tambah_absensi_up.php';
if(isset($_POST["upload"])){
	if( tambah($_POST) < 0){
        echo "
            <script>
                alert  ('no data added!');
                document.location.href = 'admin_lobby.php';
            </script>
        ";
    } else {
        echo "<script>
        alert  ('data has been added!');
        document.location.href = 'admin_lobby.php';
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
    <link rel="stylesheet" href="tambah_user.css">
    <title>Absen</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
      
      <div class="signup">Absen</div>
       <div class="signup-form">
        <form action="" method="POST">
          <input type="text" placeholder="Nama" name="nama"   class="input"> <br>
          <select name="status" id="" class="input">
            <option value="Sakit">Sakit</option>
            <option value="Izin">Izin</option>
            <option value="Alpha">Alpha</option>
          </select>
          <br>
          <input type="text" placeholder="Alasan" name="alasan"   class="input"> <br>          
          <button type="submit" class="btn" name="upload">Send</button>

        </form>
       </div>
</body>
</html>