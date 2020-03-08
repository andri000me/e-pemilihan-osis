<?php 

session_start();

include '../auth/config.php';

if (isset($_SESSION['secure'])) {
    header("Location: dashboard");
}

if (isset($_POST['login']) === true) {
    $token = htmlspecialchars($_POST['token']);

    $selectData = mysqli_query($link, "SELECT * FROM admin WHERE token = '$token'");
    if (mysqli_num_rows($selectData) === 1) {
        $rowData = mysqli_fetch_array($selectData);

        $_SESSION['secure'] = true;
        $success = true;
        echo '<meta http-equiv="refresh" content="5; url=dashboard">';

    }else{
        $error = true;
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
    <link rel="shortcut icon" href="../assets/libs/images/smkn5.jpg">

    <!-- Title Page-->
    <title>Login Page</title>

    <!-- Fontfaces CSS-->

    <link href="../assets/libs/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Captcha -->

    <script src="../https://www.google.com/recaptcha/api.js"></script>

    <!-- Bootstrap CSS-->
    <link href="../assets/libs/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/libs/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/libs/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!--  Toastr -->

    <link rel="stylesheet" type="text/css" href="../assets/libs/vendor/toastr/toastr.css">
    <link rel="stylesheet" type="text/css" href="../assets/libs/vendor/toastr/toastr.min.css">

    <!-- Main CSS-->
    <link href="../assets/libs/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <h2 style="text-align: center; padding: 30px;">Online Osis Selection 2020/2021 </h2>
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <a href="../#">
                                <img src="../assets/libs/images/exploiterid.png" alt="ExploiterID">
                            </a>
                        </div> -->
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger">Token yang anda masukkan salah</div>
                        <?php endif ?>
                        <?php if (isset($success)): ?>
                            <div class="alert alert-success">Token benar, redirect ke dashboard</div>
                        <?php endif ?>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="token">Token</label>
                                    <input class="form-control" type="text" placeholder="Masukkan token anda" required="" autocomplete="off" name="token" id="token" minlength="4">
                                    
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
    <script src="../assets/libs/vendor/jquery-3.2.1.min.js"></script>
    <script src="../assets/libs/vendor/toastr/toastr.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/libs/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/libs/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/libs/vendor/slick/slick.min.js">
    </script>

    <script src="../assets/libs/vendor/wow/wow.min.js"></script>
    <script src="../assets/libs/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/libs/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/libs/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/libs/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/libs/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/libs/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/libs/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/libs/vendor/select2/select2.min.js">
    </script>
    <script src="../assets/libs/vendor/bootstrap-validate/bootstrap-validate.js"></script>
    

    <!-- Main JS-->
    <script src="../assets/libs/js/main.js"></script>

</body>

</html>
<!-- end document-->