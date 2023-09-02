<?php
include 'db_conn.php';
function tambah($data){
    global $conn;
    $username = $_POST['username'];
    $JK = $_POST['JK'];
    $bidang = $_POST['bidang'];
    $password = $_POST['password'];
    $status = $_POST['status'];

 


    // query insert data
    $sql = "INSERT INTO `login` VALUES ('', '$username', '$JK' ,'$bidang', '$password','$status')";
    $query=mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>