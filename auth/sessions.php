<?php 
	if (!isset($_SESSION['loginUser'])) {
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
                    title: 'Opppss',
                    text:  'Silahkan login terlebih dahulu',
                    type: 'info',
                    timer: 2000,
                    showConfirmButton: false
                    });  
                    },10); 
                    window.setTimeout(function(){ 
                     window.location.replace('login');
                     } ,2000); 
            </script>";
	}

 ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
	*{
		font-family: arial;
	}
</style>