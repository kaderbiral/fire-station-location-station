<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 3; url=main.php");
ob_end_flush();
?>