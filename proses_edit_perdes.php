<?php

include "koneksi.php";

$id=$_POST['id_pegawai'];
$nim=$_POST['Nama'];
$nama=$_POST['Jabatan'];
$jenis_kelamin=$_POST['NIP'];


$ubah=$koneksi->query("update perangkat desa set Nama='$Nama', Jabatan='$Jabatan', NIP='$NIP', where id_pegawai='$id'");

if($ubah==true){

    header("location:tampil-perdes.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>