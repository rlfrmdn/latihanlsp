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
    <title>EDIT DOSEN</title>
</head>

<body>
    <h2>Edit Dosen</h2>
    <hr><br>

    <?php
    $kd_dosen = $_GET['kd_dosen'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_dosen where kd_dosen = '$kd_dosen'");
    while ($data = mysqli_fetch_array($sqr)) {

    ?>

        <form method="post" action="aksi_edit_dosen.php">
            <table>
                <tr>
                    <td><label for="kd_dosen">kode dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="kd_dosen" value="<?php echo $data['kd_dosen']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nm_dosen">nama dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="nm_dosen" value="<?php echo $data['nm_dosen']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="alamat">alamat dosen</label></td>
                    <td>:</td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $data['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"> </input> <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>