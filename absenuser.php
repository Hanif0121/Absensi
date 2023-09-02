<?php
include 'db_conn.php';
function tambah($data){
    global $conn;

    $name = $_POST['name'];


    $tanggal = date('Y-m-d');
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('H:i:s');
    $jam_tepat_waktu = "07:00:00"; // jam tepat waktu absen
    $jam_terlambat = "07:15:00"; // batas akhir terlambat

    if($jam <= $jam_tepat_waktu){
      $status = "Tidak Telat";
    }else{
      $status = "Telat";
    }

    $alasan = "";
    // query insert data
    $sql = "INSERT INTO `absensi` VALUES ('', '$name','$tanggal', '$jam', '$status', '$alasan' )";
    $query = mysqli_query($conn, $sql);    
    return mysqli_affected_rows($conn);

}
?>