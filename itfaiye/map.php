
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
   <h2 align="center">İZMİR İLİ HARİTASI</h2><hr> <br>
   <h3><span style="color:#c23500">★★★	&nbsp;</span><i>HARİTAYI GÖRÜNTÜLEMEK İÇİN<a href="izmir_map.php" target="blank" style="vertical-align: baseline; text-decoration: none; color:#c23500;"> TIKLAYINIZ... </i></a><span style="color:#c23500">&nbsp; ★★★</span></h3>
   <br><hr><br>
   <p style="color:#080F73; font-size:15px;"><b>Haritada bulunan simgelerin anlamları:</b></p>
   
   <br><br>
   
   <img src="images/istasyon.png" style="float:left" width="36px" height="36px"></img> <p>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:15px; color:#c23500">→</b>&nbsp;&nbsp;&nbsp;&nbsp;İtfaiye İstasyon Yerleri<p><br>
   <img src="images/tarihi.png" style="float:left" width="35px" height="35px"></img> <p>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:15px; color:#c23500">→</b>&nbsp;&nbsp;&nbsp;&nbsp;Tarihi Yerler<p><br>
   <img src="images/tehlike.png" style="float:left" width="36px" height="36px"></img> <p>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:15px; color:#c23500">→</b>&nbsp;&nbsp;&nbsp;&nbsp;Tehlikeli Yerler <p><br>
   <img src="images/deprem.png" style="float:left" width="36px" height="36px"></img> <p>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:15px; color:#c23500">→</b>&nbsp;&nbsp;&nbsp;&nbsp;Deprem Riski Yüksek Yerler<p><br>
   
   
 </div>

</div>

</body>
</html>



