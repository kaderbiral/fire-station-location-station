<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'itfaiye';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	$data2 = '';
	$data3 = '';
	$data4 = '';


	//query to get data from the table
	$sql = "SELECT * FROM `ahsap_tarihi_binalar` ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['yapim_tarihi'].'",';
		$data2 = $data2 . '"'. $row['ilce_id'] .'",';
		$data3 = $data3 . '"'. $row['istasyon_id'] .'",';
		$data4 = $data4 . '"'. $row['yol_id'] .'",';

	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
	$data3 = trim($data3,",");
	$data4 = trim($data4,",");

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
   <h2 align="center">İZMİR İLİ TARİHİ YERLER VERİSİ</h2><hr> <br>
   <input class="btn" type="submit" name="cizgi" value="Çizgi" onclick="window.location='tarihi_yerler.php';" />
   <input class="btn" type="submit" name="sutun" value="Sütun" onclick="window.location='tarihi_yerler_line.php';" />
   <input class="btn" type="submit" name="tablo" value="Tablo" onclick="window.location='tarihi_yerler_table.php';" />
   
   <a href="javascript:penac('table_ortak_id.php','aciklama','toolbar=0,location=0,status=0,menuba  r=0,scrollbars=0,resizable=0,width=417,height=533')">
   <input style="margin-left:455px" class="btn" type="submit" name="sehir" value="İlçe ID*" /></a>
   <br><br><br>
   
   	    <div class="container">	      
			<canvas id="chart" style="width: 100%; height: 65vh;  color: #000; margin-top: 10px; margin-left: -40px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: ['Kemeraltı Çarşısı','Meryem Ana Evi','Teleferik','Ödemiş Arasta Çarşısı','Mahkeme Cami','St. Helen Katolik Kilisesi','Bergama Ulu Cami','Çeşme Kalesi','Fatih Cami'],
		            datasets: 
		            [{
		                label: 'Yapım tarihi',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'#1160ec',
		                borderWidth: 3
		            },

		            {
		            	label: 'İlçe ID',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'#c23500',
		                borderWidth: 3	

		            },
					
					{
		            	label: 'İstasyon ID',
		                data: [<?php echo $data3; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'#00c624',
		                borderWidth: 3	

		            },
					
					{
		            	label: 'Yol ID',
		                data: [<?php echo $data4; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'#4e504e',
		                borderWidth: 3	

		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'black', fontSize: 14}}
		        }
		    });
			</script>
	    </div>
   

</div>

</body>
</html>



