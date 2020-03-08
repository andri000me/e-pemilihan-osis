<?php 

	session_start();
	if (!isset($_SESSION['secure'])) {
		header("Location: secure");
	}

 ?>