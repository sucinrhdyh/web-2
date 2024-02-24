<?php

$Nama=$_POST['Nama'];
$Jabatan=$_POST['Jabatan'];
$NIP=$_POST['NIP'];

include "koneksi.php";

$simpan=$koneksi->query("insert into perangkat_desa(Nama,Jabatan,NIP,) 
                    values ('$Nama', '$Jabatan', '$NIP')");

if($simpan==true){

    header("location:tampil_perdes.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>