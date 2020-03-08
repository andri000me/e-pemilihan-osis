<?php 
	session_start();
	include 'auth/sessions.php';
	include 'auth/config.php';
	
	//Security Url
	if (!isset($_SESSION['notData'])) {
		echo '<script src="assets/libs/sweetalert/sweetalert.min.js"></script>';
		 echo "<script type='text/javascript'>
            setTimeout(function () {  
                swal({
                    icon: 'info',
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    dangerMode: true,
                    className: 'red-bg',
                    buttons: false,
                    title: 'Oppsss',
                    text:  'Pilih ketos terlebih dahulu, Redirecting to page vote ketos...',
                    type: 'info',
                    timer: 2000,
                    showConfirmButton: false
                    });  
                    },10); 
                    window.setTimeout(function(){ 
                     window.location.replace('vote-ketos');
                     } ,2000); 
            </script>";
	}

	if (isset($_POST['btnWaketos']) === true) {
	$namaOsis = mysqli_real_escape_string($link, $_POST['namaOsis']);
	$namaSiswa = mysqli_real_escape_string($link, $_POST['namaSiswa']);
	$nisSiswa = mysqli_real_escape_string($link, $_POST['nisSiswa']);
	$kelasSiswa = mysqli_real_escape_string($link, $_POST['kelasSiswa']);


	$insertData = mysqli_query($link, "INSERT INTO data_total_waketos (nis_siswa, nama_siswa, kelas_siswa, nama_waketos) VALUES ('$nisSiswa', '$namaSiswa', '$kelasSiswa', '$namaOsis')");

	if (mysqli_affected_rows($link) > 0) {

	$sessionSecurity = $_SESSION['vote-ketos'] = true;
	$sessionSecurityRedirect = $_SESSION['notData'] = true;

		echo '<script src="assets/libs/sweetalert/sweetalert.min.js"></script>';
		 echo "<script type='text/javascript'>
            setTimeout(function () {  
                swal({
                    icon: 'success',
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    dangerMode: true,
                    className: 'red-bg',
                    buttons: false,
                    title: 'Vote Berhasil',
                    text:  'Redirecting to page login... ',
                    type: 'success',
                    timer: 4000,
                    showConfirmButton: false
                    });  
                    },10); 
                    window.setTimeout(function(){ 
                     window.location.replace('logout');
                     } ,4000); 
            </script>";

	}else{
		echo '<script src="assets/libs/sweetalert/sweetalert.min.js"></script>';
		 echo "<script type='text/javascript'>
            setTimeout(function () {  
                swal({
                    icon: 'error',
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    dangerMode: true,
                    className: 'red-bg',
                    buttons: false,
                    title: 'Data not valid...',
                    text:  'Redirecting to page vote waketos...',
                    type: 'error',
                    timer: 2000,
                    showConfirmButton: false
                    });  
                    },10); 
                    window.setTimeout(function(){ 
                     window.location.replace('vote-waketos');
                     } ,2000); 
            </script>";
	}


}


 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<link rel="shortcut icon" href="assets/libs/images/smkn5.jpg">

	<!-- Title Page-->
	<title>Vote Wakil Ketua Osis</title>

	<!-- Fontfaces CSS-->

	<link href="assets/libs/css/font-face.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<!-- Captcha -->

	<script src="https://www.google.com/recaptcha/api.js"></script>

	<!-- Bootstrap CSS-->
	<link href="assets/libs/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="assets/libs/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="assets/libs/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!--  Toastr -->

	<link rel="stylesheet" type="text/css" href="assets/libs/vendor/toastr/toastr.css">
	<link rel="stylesheet" type="text/css" href="assets/libs/vendor/toastr/toastr.min.css">

	<!-- Main CSS-->
	<link href="assets/libs/css/theme.css" rel="stylesheet" media="all">

<style type="text/css">
	.card{
		width: 30%
	}
</style>
</head>

<body class="bg-dark">
<div class="container">
	<h3 class="text-white text-sm-center m-3">Pemilihan Wakil Ketua Osis</h3>
	<div class="row" style="margin-top: 25px;">
		<div class="col-sm-12" style="margin: auto; display: flex; justify-content: space-between; max-width: 1200px;">
			<?php 
				$resultData = mysqli_query($link, "SELECT * FROM data_waketos");
				while ($rowData = mysqli_fetch_array($resultData)) {
				
				
			 ?>
			
			
			<div class="card float-left mr-3">
			<div class="card-header">
				<i class="fa fa-user"></i>
				<strong class="card-title pl-2"><?= $rowData['kelas'] ?></strong>
			</div>
			<div class="card-body">
				<div class="mx-auto d-block">
					<img class="rounded-circle mx-auto d-block" src="assets/libs/images/avatar.png" alt="Card image cap" style="height: 100px; ">
					<h5 class="text-sm-center mt-2 mb-1"><?= $rowData['nama_waketos'] ?></h5>
					<div class="location text-sm-center">
						<p>NIS : <?= $rowData['nis'] ?></p>
						<p>TTL : <?= $rowData['ttl'] ?></p>
						
					</div>

					<div class="text-sm-center m-3 ">
						 <a class="btn btn-primary" data-toggle="collapse" href="#visi<?=$rowData['nis']?>" role="button" aria-expanded="false" aria-controls="visi">Visi</a>
						 <a class="btn btn-primary" data-toggle="collapse" href="#misi<?=$rowData['nis']?>" role="button" aria-expanded="false" aria-controls="misi">Misi</a>
						 <a class="btn btn-primary" data-toggle="collapse" href="#motto<?=$rowData['nis']?>" role="button" aria-expanded="false" aria-controls="motto">Motto</a>
					</div>
					<hr>
					<div class="card-text text-sm-center">
						<form method="post" action="">

							<!-- Form Data -->
 							<input type="hidden" name="namaOsis" value="<?= $rowData['nama_waketos'] ?>">
 							<input type="hidden" name="namaSiswa" value="<?= $_SESSION['nama_siswa'] ?>">
 							<input type="hidden" name="nisSiswa" value="<?= $_SESSION['nis'] ?>">
 							<input type="hidden" name="kelasSiswa" value="<?= $_SESSION['kelas'] ?>">
							<?php $namaOsis = $rowData['nama_waketos']; ?>
							 <button type="submit" name="btnWaketos" class="btn btn-success" onclick="return confirm('Apakah anda yakin ingin memilih <?= $namaOsis ?> sebagai wakil ketua Osis?') "><i class="fas fa-check"></i> Vote</button>
						 </form>
					</div>
				</div>
			</div>
		</div>


			<?php } ?>
		</div>
		<div class="card" style="margin: auto; min-width: 1000px;">
			<div class="card-body">
				<?php
					$resultDataOsis = mysqli_query($link, "SELECT * FROM data_waketos");
					while ($rowDataOsis = mysqli_fetch_array($resultDataOsis)) {
						
				 ?>
					
				<div class="collapse multi-collapse" id="visi<?=$rowDataOsis['nis']?>">
					<h4>Visi - <?= $rowDataOsis['nama_waketos'] ?></h4><br>
					<?= $rowDataOsis['visi'] ?>
				</div>
				<div class="collapse multi-collapse" id="misi<?=$rowDataOsis['nis']?>">
					<h4>Misi - <?= $rowDataOsis['nama_waketos'] ?></h4><br>
					<?= $rowDataOsis['misi'] ?>
				</div>
				<div class="collapse multi-collapse" id="motto<?=$rowDataOsis['nis']?>">
					<h4>Motto - <?= $rowDataOsis['nama_waketos'] ?></h4><br>
					<?= $rowDataOsis['motto'] ?>
				</div>

				<?php } ?>
			</div>
		</div>	
	</div>
</div>

<p>
 
 


	<!-- Jquery JS-->
	<script src="assets/libs/vendor/jquery-3.2.1.min.js"></script>
	<script src="assets/libs/vendor/toastr/toastr.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="assets/libs/vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="assets/libs/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="assets/libs/vendor/slick/slick.min.js">
	</script>

	<script src="assets/libs/vendor/wow/wow.min.js"></script>
	<script src="assets/libs/vendor/animsition/animsition.min.js"></script>
	<script src="assets/libs/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="assets/libs/vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="assets/libs/vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="assets/libs/vendor/circle-progress/circle-progress.min.js"></script>
	<script src="assets/libs/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="assets/libs/vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="assets/libs/vendor/select2/select2.min.js">
	</script>
	<script src="assets/libs/vendor/bootstrap-validate/bootstrap-validate.js"></script>
</body>
</html>