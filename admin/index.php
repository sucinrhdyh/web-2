<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<?php
					include "carousel.php";
					include "jumbotron.php";
					include "Foto.php";
					
					?>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>