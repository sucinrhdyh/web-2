<?php

include "koneksi.php";

$id=$_POST['id_pegawai'];
$Nama=$_POST['Nama'];
$Jabatan=$_POST['Jabatan'];
$NIP=$_POST['NIP'];


$ubah=$koneksi->query("update perangkat_desa set Nama='$Nama', Jabatan='$Jabatan', NIP='$NIP' where id_pegawai='$id'");

if($ubah==true){

    header("location:tampil_perdes.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>