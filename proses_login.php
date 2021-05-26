<?php
session_start();

include "config.php";

$Username = $_POST["Username"];
$Pass = md5($_POST["Pass"]);

$sql = "select * from mahasiswa where Username='".$Username."' and Pass='".$Pass."' limit 1";
$hasil = mysqli_query ($mysqli,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["NPM"]=$row["NPM"];
		$_SESSION["Nama"]=$row["Nama"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Username"]=$row["Username"];
		$_SESSION["Pass"]=$row["Pass"];
	

		header("Location:index.php");
		
	}else {
		echo "<script>alert('Maaf username dan password salah, harap cek kembali!'); window.location=('form_login.php');</script>";
    	exit;
	}
?>