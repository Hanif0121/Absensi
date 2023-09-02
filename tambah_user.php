<?php
require 'tambah_user_up.php';
if(isset($_POST["upload"])){
	if( tambah($_POST) < 0){
        echo "
            <script>
                alert  ('no data added!');
                document.location.href = 'data_user.php';
            </script>
        ";
    } else {
        echo "<script>
        alert  ('data has been added!');
        document.location.href = 'data_user.php';
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
          <input type="text" placeholder="Username" name="username"   class="input"> <br>
          <input type="text" placeholder="Jenis Kelamin" name="JK"   class="input"> <br>
          <input type="text" placeholder="Bidang " name="bidang"   class="input"> <br>
          <input type="text" placeholder="Password" name="password"   class="input"> <br>
          <input type="hidden" name="status" value="1" > 
          
          <button type="submit" class="btn" name="upload">Send</button>

        </form>
       </div>
</body>
</html>