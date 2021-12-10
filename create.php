<?php
include "connect.php";

$ID=$_POST["ID"];
$nim=$_POST["NIM"];
$nama=$_POST["Nama"];
$programstudi=$_POST["Prodi"];
$angkatan=$_POST["Angkatan"];

$sql="insert into tabeldata (ID,NIM,Nama,Prodi,Angkatan) values('$ID','$NIM','$Nama','$Prodi','$Angkatan')";

$hasil=mysqli_query($connect,$sql);
?>