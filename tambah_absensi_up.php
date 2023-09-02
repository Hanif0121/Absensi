<?php
include 'db_conn.php';
function tambah($data){
    global $conn;
    $nama = $_POST['nama'];

    $tanggal = date('Y-m-d');
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('H:i:s');
    $status = $_POST['status'];
    $alasan = $_POST['alasan'];
    



    // query insert data
    $sql = "INSERT INTO `absensi` VALUES ('', '$nama', '$tanggal' ,'$jam', '$status', '$alasan')";
    $query=mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>