<?php
include "connect.php";
$id = $_POST["ID"];
$sql = "delete from tabeldata where ID='".$ID."'";
$hasil = mysqli_query($connect,$sql);
?>