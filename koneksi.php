<?php
//kelas koneksi
class koneksi{
    public function get_koneksi()
    {
        //menghubungkan ke database
        $conn = mysqli_connect("localhost","root","","latlsp");

        //cek koneksi ke database
        if (mysqli_connect_errno()){
            echo "Koneksi Database Gagal : " . mysqli_connect_error();
        }
        return $conn;
    }
}
$konek = new koneksi();
$koneksi = $konek ->get_koneksi();
