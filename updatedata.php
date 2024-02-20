<?php

include "config.php";
$id=$_POST['id'];
$hari = $_POST["hari"];
$latihan = $_POST["latihan"];
$repetisi = $_POST["repetisi"];
// var_dump($hari);
$query = "UPDATE tb_wo SET hari_wo='$hari',latihan_wo='$latihan',rep_wo='$repetisi' WHERE id_wo='$id' ";
$sql = mysqli_query($koneksi,$query);

if($sql){
   header("location:index.php");
}else{
    echo $query;
};

?>