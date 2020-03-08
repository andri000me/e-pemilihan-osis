<?php 
    
    session_start();
    include 'auth/config.php';

    if (isset($_SESSION['loginUser'])) {
        header("Location: index");
    }


    if (isset($_POST['login']) === true) {
        $nama_siswa = mysqli_real_escape_string($link, $_POST['nama']);
        $nis = mysqli_real_escape_string($link, $_POST['nis']);

        $selectData = mysqli_query($link, "SELECT * FROM data_siswa WHERE nama_siswa = '$nama_siswa'");

        $rowData = mysqli_fetch_array($selectData);

        if (mysqli_num_rows($selectData) === 1) {
            if ($rowData['nis'] === $nis) {
                echo '<script src="assets/libs/vendor/jquery-3.2.1.min.js"></script>';
                    echo '<script>

                        $(document).ready(function(){
                            toastr.options = {
                              "closeButton": true,
                              "newestOnTop": false,
                              "progressBar": true,
                              "positionClass": "toast-top-right",
                              "showDuration": "1000",
                              "hideDuration": "1000",
                              "timeOut": "5000",
                              "extendedTimeOut": "1000",
                        }

                        toastr.success("Succesfully Login", "Success")
                    });

                    </script>';

                    $_SESSION['loginUser'] = true;
                    $_SESSION['nis'] = $rowData['nis'];
                    $_SESSION['id'] = $rowData['id_siswa'];
                    $_SESSION['nama_siswa'] = $rowData['nama_siswa'];
                    $_SESSION['kelas'] = $rowData['kelas'];

                 echo '<meta http-equiv="refresh" content="5; url=index">';

            }else{
                echo '<script src="assets/libs/vendor/jquery-3.2.1.min.js"></script>';
                    echo '<script>

                        $(document).ready(function(){
                            toastr.options = {
                              "closeButton": true,
                              "newestOnTop": false,
                              "positionClass": "toast-top-right",
                              "showDuration": "1000",
                              "hideDuration": "1000",
                              "timeOut": "5000",
                              "extendedTimeOut": "1000",
                        }

                        toastr.error("Nis tidak ditemukan", "Error")
                    });

                    </script>';
                 
        }
    }else{
        echo '<script src="assets/libs/vendor/jquery-3.2.1.min.js"></script>';
                    echo '<script>

                        $(document).ready(function(){
                            toastr.options = {
                              "closeButton": true,
                              "newestOnTop": false,
                              "positionClass": "toast-top-right",
                              "showDuration": "1000",
                              "hideDuration": "1000",
                              "timeOut": "5000",
                              "extendedTimeOut": "1000",
                        }

                        toastr.error("Username tidak di temukan", "Error")
                    });

                    </script>';
    }
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laporan - Muslim Go Online">
    <link rel="shortcut icon" href="assets/libs/images/smkn5.jpg">

    <!-- Title Page-->
    <title>Login Page</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <h2 style="text-align: center; padding: 30px;">Online Osis Selection 2020/2021 </h2>
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <a href="#">
                                <img src="assets/libs/images/exploiterid.png" alt="ExploiterID">
                            </a>
                        </div> -->
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Nama Lengkap</label>
                                    <input class="form-control" type="text" placeholder="Masukkan nama lengkap anda" required="" autocomplete="off" name="nama" id="nama" minlength="4">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="nis">Nis</label>
                                    <input type="number" name="nis" id="nis" class="form-control" minlength="6" placeholder="Masukkan nis anda" autocomplete="off" required="">
                                </div>
                                <button type="submit" name="login" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                            </form>
                            <!-- x -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <strong style="margin-top: 30px;">&copy; 2020 by Zamzam Syahputra</strong>
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

    <!-- Bootstrap Validate Main -->
    <script>
        bootstrapValidate('#nama', 'required:Form wajib di isi');
        bootstrapValidate('#nama', 'min:4:Masukkan nama minimal 4 huruf');
        bootstrapValidate('#nis', 'required:Form wajib di isi');
        bootstrapValidate('#nis', 'min:6:Masukkan minimal 6 angka');
    </script>
    

    <!-- Main JS-->
    <script src="assets/libs/js/main.js"></script>

</body>

</html>
<!-- end document-->