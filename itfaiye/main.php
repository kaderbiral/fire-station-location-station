<html>
<head>
<title>Yönetici Giriş Ekranı</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div id="kutu">
		<form action="login.php" method="POST">
		<div class="logo">
			<img src="images/logo.png"></img>
		</div>
		<div class="ana_baslik">
			<h1 class="baslik">İzmir İtfaiye Dairesi Başkanlığı</h1>
			<h1 class="baslik2">Yönetici Giriş Ekranı </h1>
		</div>
		<br><hr>
			<table  align="center">
				<tr>
					<td><b><p class="alt_baslik">Kullanıcı Adı</p> </b></td>
					<td><b>:</b></td>
					<td width="107" height="55"> <input type="text" name="username" placeholder="Kullanıcı Adınız"></td>
				</tr>
				<tr>
					<td><b><p class="alt_baslik">Şifre</p> </b></td>
					<td><b>:</b></td>
					<td width="110" height="20"><input type="password" name="password" placeholder="Şifreniz"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="107" height="55"><input type="submit" value="Giriş" class="btn"></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>