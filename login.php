<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'db_conn.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$bidang = $_POST['bidang'];

 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['status']=="0"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
        $_SESSION['bidang'] = $bidang;
        $_SESSION['status'] = "0";
		// alihkan ke halaman dashboard admin
		header("location:admin_lobby.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['status']=="1"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "1";
        $_SESSION['bidang'] = $bidang;
		// alihkan ke halaman dashboard pegawai
		header("location:user_lobby.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>