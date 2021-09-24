<?php
// mengaktifkan session php
session_start();
include "koneksi.php";

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM TAMBAH DOSEN</title>
</head>

<body>
    <h2>Tambah Dosen</h2><br>
    <form method="post" action="aksi_add_dosen.php">
        <table>
            <tr>
                <td><label for="kd_dosen">Kode Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="kd_dosen" placeholder="Masukkan Kode Dosen" required></td>
            </tr>
            <tr>
                <td><label for="nm_dosen">Nama Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="nm_dosen" placeholder="Masukkan Nama Dosen" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat Dosen</label></td>
                <td>:</td>
                <td> <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'"></td>
            </tr>
        </table>
    </form>
</body>

</html>