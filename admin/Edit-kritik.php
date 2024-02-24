<!doctype HTML>
<html>
<head>
    <title>Form Edit Kritik Saran</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-kritik.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from kritik where id_user='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="topik">TOPIK</label>
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']?>" class="form-control">
                        <input type="text" name="topik" value="<?php echo $row['topik']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="isi_topik">ISI TOPIK</label>
                        <textarea name="isi_topik" class="form-control"><?php echo $row['isi_topik']?></textarea>
                    </div>


                    <div class="form-group">
                        <label for="Nama">NAMA</label>
                        <input type="text" name="Nama" value="<?php echo $row['Nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Email">EMAIL</label>
                        <input type="text" name="Email" class="form-control"><?php echo $row['Email']?>
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