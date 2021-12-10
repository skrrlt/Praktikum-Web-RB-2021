<?php
include "connect.php";
$ID = $_POST["ID"];
$nim = $_POST["NIM"];
$nama = $_POST["Nama"];
$prodi = $_POST["Prodi"];
$angkatan = $_POST["Angkatan"];

$sql = "update tabeldata set NIM = '".$NIM."', Nama='".$Nama."', Prodi='".$Prodi."', Angkatan='".$Angkatan."'  where ID = '".$ID."' ";
$hasil = mysqli_query($connect,$sql);
?>