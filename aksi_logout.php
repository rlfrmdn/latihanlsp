<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// mengalihkan halaman kembali login
header("location:login.php");
?>