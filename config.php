<?php
$host = 'localhost';
$database = 'db_ruang_siswa';
$username = 'root';
$password = '';
 
$db = mysqli_connect($host, $username, $password, $database);
// $db = mysqli_select_db($koneksi, $database) or die("Koneksi tidak tersedia")

if(!$db){
    die("Connection failed" . mysqli_connect_error());
}
?>