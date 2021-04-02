<?php  
 header('Content-Type: text/html; charset=utf-8');

 $connect = mysqli_connect("localhost", "root", "", "itfaiye");  
 $query = "SELECT bina_adi, yapim_tarihi FROM ahsap_tarihi_binalar WHERE ahsap_tarihi_binalar.yapim_tarihi<1900"; 
 mysqli_query($connect,"SET NAMES UTF8");
 $result = mysqli_query($connect, $query);
 $connect->set_charset("utf8");

 ?>   
 
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Data</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
	
	<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["bina_adi"]."', ".$row["yapim_tarihi"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: "1500 Yılından Önce İnşa Edilmiş Yerler",  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));  
                chart.draw(data, options);  
           }  
           </script>  
  
	<link rel="stylesheet" type="text/css" href="admin.css" />
	
<script  language="JavaScript">
function penac(theURL,winName,features) {
  	window.open(theURL,winName,features);
}

// -->
</script>
</head>
<body>
	<ul>
	  <li style="height: 50px; background-color: #c23500;"><a class="active" target="blank"><b></b></a></li>
	  <li style="padding-top:30px;"><a href="admin.php">Nüfus Oranı</a></li>
	  <li><a href="otoyollar.php">Otoyollar</a></li>
	  <li><a href="tarihi_yerler.php">Tarihi Yerler</a></li>
	  <li><a href="tehlikeli_yerler.php">Tehlikeli Yerler</a></li>
	  <li><a href="istasyonlar.php">Var Olan İstasyonlar</a></li>
	  <li><a href="deprem_riski.php">Deprem Riski Olan Yerler</a></li>
	  <li><a href="vakalar.php">Gerçekleşen Vakalar</a></li>
	  <li style="margin-top:80px; background-color: #c23500;"><a href="nufus_pie.php">Pasta Grafikleri</a></li>
	  <li style="margin-top:40px; background-color: #c23500;"><a href="map.php">Harita</a></li>
	</ul>
 
<div id="ust"> </div>

<div id="#icerik">

<br>
  <div class="conn" style="width:900px;">
   <h2 align="center">İZMİR İLİ TARİHİ YER VERİSİ</h2><hr> <br>
   <input class="btn" type="submit" name="nufus" value="Nüfus" onclick="window.location='nufus_pie.php';" />
   <input class="btn" type="submit" name="alan" value="Alan" onclick="window.location='alan_pie.php';" />
   <input class="btn" type="submit" name="vaka" value="Vaka" onclick="window.location='vaka_pie.php';" />
   <input class="btn" type="submit" name="tarihi_yer" value="Tarihi Yer" onclick="window.location='tarihi_yer_pie.php';" />
   
   <a href="javascript:penac('table_ortak_id.php','aciklama','toolbar=0,location=0,status=0,menuba  r=0,scrollbars=0,resizable=0,width=417,height=533')">
   <input style="margin-left:329.5px" class="btn" type="submit" name="sehir" value="İlçe ID*" /></a>
   <br><br><br><br>
   
   <div id="piechart_3d" style="width: 750px; height: 350px; margin-left:65px; border:1px solid black; box-shadow:2px 2px 1px #000;"></div>
   

   </div>
</div>

</body>
</html>



