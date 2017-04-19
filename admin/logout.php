<?PHP
SESSION_START();
include("../koneksi.php");
unset($_SESSION['admin_login']); #kosongkan session my_name
session_destroy(); #session di hancurkan
header("location:index.php"); #alihkan ke index.php
?>