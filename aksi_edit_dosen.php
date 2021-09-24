<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form edit
$kd_dosen       = $_POST['kd_dosen'];
$nm_dosen       = $_POST['nm_dosen'];
$alamat         = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE tbl_dosen SET kd_dosen='$kd_dosen', nm_dosen='$nm_dosen', alamat='$alamat' WHERE kd_dosen='$kd_dosen'");
 
 
// mengalihkan halaman kembali ke daftar dosen
header("location:dosen_list.php");
?>