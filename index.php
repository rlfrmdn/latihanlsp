<?php
// mengaktifkan session php
session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMIN DASHBOARD</title>
</head>

<body>

    <h1>HALAMAN DASHBOARD</h1>
    <hr><br><br>
    <ul>
        <li> <a href="dosen_list.php">Data Dosen</a> </li>
        <li> <a href="mk_list.php">Data Matakuliah</a> </li>
        <li> <a href="jadwal_list.php">Jadwal</a> </li>
    </ul>
    <ul>
        <li><a href="aksi_logout.php">logout</a></li>
    </ul>
</body>

</html>