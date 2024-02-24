<?php

$topik=$_POST['topik'];
$isi_topik=$_POST['isi_topik'];
$Nama=$_POST['Nama'];
$Email=$_POST['Email'];

include "koneksi.php";

$simpan=$koneksi->query("insert into kritik(topik,isi_topik,Nama,Email) 
                        values ('$topik', '$isi_topik', '$Nama', '$Email')");

if($simpan==true){

    header("location:tampil-kritik.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>