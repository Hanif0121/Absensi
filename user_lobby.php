<?php
require 'absenuser.php';
if(isset($_POST["upload"])){
	if( tambah($_POST) < 0){
        echo "
            <script>
                alert  ('no data added!');
                document.location.href = 'terimakasih.php';
            </script>
        ";
    } else {
        echo "<script>
        alert  ('data has been added!');
        document.location.href = 'terimakasih.php';
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
    <link rel="stylesheet" href="lobby_user.css">
    <title>Absen</title>
</head>
<body>

<?php 
	session_start();
    
        include 'db_conn.php';
        $name = $_SESSION['username']; 
        $sql = "SELECT * FROM login where username = '$name'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($query);


	// cek apakah yang mengakses halaman ini sudah login
 
	?>
<div class="wrapper">
    <div class="container">
      
      <div class="signup">Absen</div>
       <div class="signup-form">
        <form action="" method="POST">
          <input type="text" placeholder="Username" name="name" value="<?php $name ?>"   class="input" > <br>
          
          <button type="submit" class="btn" name="upload">Send</button>

        </form>
       </div>
</body>
</html>