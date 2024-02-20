<?php
include "config.php";

$hari = $_POST["hari"];
$latihan = $_POST["latihan"];
$repetisi = $_POST["repetisi"];


$query = "INSERT INTO tb_wo VALUES(null,'$hari','$latihan','$repetisi')";
$sql =mysqli_query($koneksi,$query);

if($sql){
 header("location:index.php");
}
else{
    $query;
}
?>

