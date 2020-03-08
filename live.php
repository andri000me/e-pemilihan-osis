<?php  
include 'auth/config.php';

$query = "SELECT nama_osis, count(nama_osis) as jumlah FROM data_total_osis GROUP BY nama_osis ORDER BY jumlah DESC";  
$result = mysqli_query($link, $query); 

$queryWaketos = "SELECT nama_waketos, count(nama_waketos) as jumlah FROM data_total_waketos GROUP BY nama_waketos ORDER BY jumlah DESC";  
$resultWaketos = mysqli_query($link, $queryWaketos); 



?>  
<!DOCTYPE html>  
<html>  
<head>  
 <title>Hitung Cepat Pemenang Ketos Dan Waketos</title>  
  <!-- Bootstrap CSS-->
  <link href="assets/libs/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
  <meta http-equiv="refresh" content="20">
  <link rel="shortcut icon" href="assets/libs/images/smkn5.jpg">

</head>  
<body>
<div class="row" style="display: flex;">
    <div class="col-sm-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <div id="piechart" style="width: 800px; height: 500px;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <div id="donutchart" style="width: 800px; height: 500px;"></div>
            </div>
        </div>
    </div>
</div>
</div>

 <script src="assets/libs/vendor/chartjs/loader.js"></script> 
 <?php include 'files/scriptChart.php'; ?>
</body>  
</html>  