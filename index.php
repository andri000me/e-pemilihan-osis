<?php 

session_start();
include 'auth/config.php';
include 'auth/sessions.php';

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
	<title>Home</title>

	<!-- Fontfaces CSS-->
	<style type="text/css">
		.card{
			width: 40%;
		}
	</style>

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

</head>

<body class="bg-dark">

	<div class="container" style="margin-top: 100px;">
		<div class="col-md-12">
		<div class="card m-auto">
			<div class="card-header">
				<i class="fa fa-user"></i>
				<strong class="card-title pl-2">Biodata Anda</strong>
			</div>
			<div class="card-body">
				<div class="mx-auto d-block">
					<img class="rounded-circle mx-auto d-block" src="assets/libs/images/avatar.png" alt="Card image cap" style="height: 100px; ">
					<h5 class="text-sm-center mt-2 mb-1"><?= $_SESSION['nama_siswa'] ?></h5>
					<div class="location text-sm-center">
						<p>Nis : <?= $_SESSION['nis'] ?></p>
						<p>Kelas : <?= $_SESSION['kelas'] ?></p>
					</div>
					<hr>
					<div class="card-text text-sm-center">
						<a href="vote-ketos" class="btn btn-success">Lanjutkan Memilih</a>
					</div>
				</div>
			</div>
		</div>
	</div>


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





