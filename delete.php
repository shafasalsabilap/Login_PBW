<?php
include_once("config.php");
$NPM = $_GET['NPM'];
$result = "DELETE FROM mahasiswa WHERE NPM=$NPM";

$hasil=mysqli_query($mysqli,$result);
if ($hasil) {
    echo "<script>alert('Data berhasil di Hapus'); window.location=('index.php');</script>"; 
    exit;
}
else {
    echo "<script>alert('Gagal Menghapus Data'); window.location=('index.php');</script>";
    exit;
}  
?>
