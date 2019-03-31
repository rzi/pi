<html>
<head>
<title>Pomiar temperatury Raspberry PI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <meta http-equiv="content-type" content="text/html; charset=iso-8859-2"> -->
</head>
<body>

<h2 align="center">Pomiar temperatury i zapis w bazie danych</h2>
<h2 align="left">Opis projektu.</h2>
<p>Celem projektu są pomiary temperatur, ich
zapis do zewnętrznej bazy danych oraz sterowanie zaworami ogrzewania podłogowego</p>
<img src="schemat_rpi.png"> <br>
<h3>1.Hardware:</h3>
<p>Czujnik temperatury DS18B20<br>
Moduł interfejsu One wire na USB firmy Meraprojekt (FT232RL + DS2480)<br>
Raspberry Pi jako serwer<br>
Moduł Piface<br>
Moduł 8 przekaźników </p>
<h3>2.Software:</h3>
<p>Serwer HTTP (Apache, PHP, MySQL) <br>
Python - oprogramowanie modułu pomiarowego<br>
<h2>Pomiar temperatury- Monitor danych (archiwum)</h2>
<a href="new_wyk5.php">Pomiar temperatury - wykresy >>></a><br>
<a href="new_cz.php">Pomiar temperatury - dane >>></a><br><br>
<?php
session_start();
if($_GET["wyloguj"]=="tak"){$_SESSION["zalogowany"]=0;echo "Zostals wylogowany z serwisu";}

echo $_SERVER['HTTP_USER_AGENT'];

?>

</body>
</html>
