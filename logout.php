<?php 

	session_start();
	session_destroy();

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
                    title: 'Logout',
                    text:  'Terima kasih sudah memilih',
                    type: 'success',
                    timer: 4000,
                    showConfirmButton: false
                    });  
                    },10); 
                    window.setTimeout(function(){ 
                     window.location.replace('login');
                     } ,4000); 
            </script>";

 ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
	*{
		font-family: arial;
	}
</style>