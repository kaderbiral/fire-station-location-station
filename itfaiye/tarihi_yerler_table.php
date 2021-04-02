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

  <div class="container" style="width:900px; margin-left:330px; margin-top:5px;">
   <h2 align="center">İZMİR İLİ TARİHİ YERLER VERİSİ</h2><hr> <br>
  <input class="btn" type="submit" name="cizgi" value="Çizgi" onclick="window.location='tarihi_yerler.php';" />
   <input class="btn" type="submit" name="sutun" value="Sütun" onclick="window.location='tarihi_yerler_line.php';" />
   <input class="btn" type="submit" name="tablo" value="Tablo" onclick="window.location='tarihi_yerler_table.php';" />
   
   <a href="javascript:penac('table_ortak_id.php','aciklama','toolbar=0,location=0,status=0,menuba  r=0,scrollbars=0,resizable=0,width=417,height=533')">
   <input style="margin-left:455px" class="btn" type="submit" name="sehir" value="İlçe ID*" /></a>
   
   
   
<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'itfaiye') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select * from ahsap_tarihi_binalar");
echo '<table class="tablo" style="margin-left:0px; margin-bottom:50px;" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="300" bgcolor="#E7E7E7"><b>BİNA ID</b></td>
		<td width="500" bgcolor="#E7E7E7"><b>BİNA ADI</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>İLÇE ID</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>YAPIM TARİHİ</b></td>
		<td width="250" bgcolor="#E7E7E7"><b>İSTASYON ID</b></td>
		<td width="300" bgcolor="#E7E7E7"><b>YOL ID</b></td>
	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["bina_id"].'</td>
		<td>'.$cek["bina_adi"].'</td>
		<td>'.$cek["ilce_id"].'</td>
		<td>'.$cek["yapim_tarihi"].'</td>
		<td>'.$cek["istasyon_id"].'</td>
		<td>'.$cek["yol_id"].'</td>
	</tr>';}
echo '</table>';
?>

  </div>

</div>

</body>
</html>

