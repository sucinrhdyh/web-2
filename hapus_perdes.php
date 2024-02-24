<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from perangkat desa where id_pegawai='$id'");

if($hapus==true){

    header("location:tampil_perdes.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>