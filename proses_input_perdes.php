<?php

$nim=$_POST['Nama'];
$nama=$_POST['Jabatan'];
$alamat=$_POST['NIP'];

include "koneksi.php";

$simpan=$koneksi->query("insert into perangkat desa(Nama,Jabatan,NIP,) 
                    values ('$Nama', '$Jabatan', '$NIP')");

if($simpan==true){

    header("location:tampil-perdes.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>