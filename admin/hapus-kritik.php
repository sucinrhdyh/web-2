<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from kritik where id_user='$id'");

if($hapus==true){

    header("location:tampil-kritik.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>