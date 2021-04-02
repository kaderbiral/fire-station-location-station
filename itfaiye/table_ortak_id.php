<html>
<head>
    <title>İlçe ID Tablosu</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'itfaiye') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select * from ortak_id");
echo '<br><br><h2 style="color:#c23500; padding-left:110px; margin-top:0px;">İLÇE ID TABLOSU</h2>
	  <table class="tablo" style="margin:0px; width:400px; font-size:13px;" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="80" bgcolor="#E7E7E7"><b>İLÇE ID</b></td>
		<td width="110" bgcolor="#E7E7E7"><b>İLÇE ADI</b></td>
		<td width="80" bgcolor="#E7E7E7"><b>İSTASYON ID</b></td>
		<td width="80" bgcolor="#E7E7E7"><b>YOL ID</b></td>
	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["ilce_id"].'</td>
		<td>'.$cek["ilce_adi"].'</td>
		<td>'.$cek["istasyon_id"].'</td>
		<td>'.$cek["yol_id"].'</td>
	</tr>';}
echo '</table>';
?>

</body>
</html>