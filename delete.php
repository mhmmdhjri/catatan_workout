<?php
include "config.php";

$id= $_GET["delete"];
$query= "DELETE FROM tb_wo WHERE id_wo = '$id' ";

$sql = mysqli_query($koneksi,$query);
if($sql){
    header("location:index.php");
}
?>