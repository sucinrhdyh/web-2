<?php

include "koneksi.php";

$id=$_POST['id_user'];
$topik=$_POST['topik'];
$isi_topik=$_POST['isi_topik'];
$Nama=$_POST['Nama'];
$Email=$_POST['Email'];

$ubah=$koneksi->query("update kritik set topik='$topik', isi_topik='$isi_topik', Nama='$Nama', Email='$Email' where id_user='$id'");

if($ubah==true){

    header("location:tampil-kritik.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>