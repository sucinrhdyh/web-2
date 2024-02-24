<!doctype HTML>
<html>
<head>
    <title>Form Input Kritik Saran</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-kritik.php" method="POST">
                    <div class="form-group">
                        <label for="topik">TOPIK</label>
                        <input type="text" name="topik" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="isi_topik">ISI TOPIK</label>
                        <textarea name="isi_topik" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Nama">NAMA</label>
                        <input type="text" name="Nama" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="Email">EMAIL</label>
                    <input type="text" name="Email" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>