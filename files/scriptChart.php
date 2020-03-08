<script src="assets/libs/vendor/chartjs/loader2.js"></script>  
<script type="text/javascript">  
   google.charts.load('current', {'packages':['corechart']});  
   google.charts.setOnLoadCallback(drawChart);  
   function drawChart()  
   {  
    var data = google.visualization.arrayToDataTable([  
      ['Nama Osis', 'Jumlah'],  
      <?php  
      while($row = mysqli_fetch_array($result))  
       {  
         echo "['".$row["nama_osis"]."', ".$row["jumlah"]."],";  
      }  
    ?>  
]);  
var options = {  
  title: 'Hitung Cepat Ketua Osis',  
    //is3D:true,  
  pieHole: 0.4  
};  
var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
  chart.draw(data, options);  
  }  
</script> 
<script type="text/javascript">  
 google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nama Waketos', 'Jumlah'],  
          <?php  
          while($row = mysqli_fetch_array($resultWaketos))  
           {  
             echo "['".$row["nama_waketos"]."', ".$row["jumlah"]."],";  
          }  
      ?>  
    ]); 

        var options = {
          title: 'Hitung Cepat Wakil Ketua Osis',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script> 
</script>  