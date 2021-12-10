<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "prakjs2";

$connect = mysqli_connect($host,$user,$password,$db);
if(!$connect){
    die("koneksi gagal : ".mysqli_connect_error());
}
?>