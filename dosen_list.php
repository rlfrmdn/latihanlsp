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
    <title>DATA DOSEN</title>
</head>

<body>
    <h2>DATA LIST DOSEN</h2>
    <hr>
    <table>
        <tr>
            <td><a href="dosen_add.php"> <button> + Tambah Data Dosen </a> </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "select * from tbl_dosen");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['kd_dosen']; ?></td>
                <td><?= $data['nm_dosen']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td>
                    <a href="dosen_edit.php?kd_dosen=<?= $data['kd_dosen']; ?> ">Edit</a>
                    <a href="aksi_dosen_delete.php?kd_dosen=<?= $data['kd_dosen']; ?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <table>
        <tr>
            <a href="index.php"> <button>Kembali Ke Menu Utama</button> </a>
        </tr>
    </table>
</body>

</html>