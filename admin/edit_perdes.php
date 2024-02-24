<!doctype HTML>
<html>
<head>
    <title>Form Edit perdes</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses_edit_perdes.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from perangkat_desa where id_pegawai='$id'");
                $row=$tampil->fetch_assoc();
                ?>

                    <div class="form-group">
                        <label for="Nama">NAMA</label>
                        <textarea name="Nama" class="form-control"><?php echo $row['Nama']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Jabatan">JABATAN</label>
                        <textarea name="Jabatan" class="form-control"><?php echo $row['Jabatan']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input type="hidden" name="id_pegawai" value="<?php echo $row['id_pegawai']?>" class="form-control">
                        <input type="number" name="nim" value="<?php echo $row['NIP']?>" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>