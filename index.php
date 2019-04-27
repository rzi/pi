<!doctype html>
<html lang="pl-PL">
<head>
<title>Pomiar temperatury Raspberry PI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>
<div>
  <h1 align="center">Pomiar temperatury i zapis w bazie danych</h1>
  <h2 align="left">Opis projektu.</h2>
  <p>Celem projektu są pomiary temperatur, ich
    zapis do zewnętrznej bazy danych oraz sterowanie zaworami ogrzewania podłogowego</p>
  <img src="/img/schemat_rpi.png"> <br>
  <h3>1.Hardware:</h3>
  <p>Czujnik temperatury DS18B20<br>
    Moduł interfejsu One wire na USB firmy Meraprojekt (FT232RL + DS2480)<br>
    Raspberry Pi jako serwer<br>
    Moduł 8 przekaźników </p>
  <h3>2.Software:</h3>
  <p>Serwer HTTP (Apache, PHP, MySQL) <br>
    Python - oprogramowanie modułu pomiarowego<br>
  <h2>Pomiar temperatury- Monitor danych (archiwum)</h2>
  <a href="new_wyk5.php">Pomiar temperatury - wykresy >>></a><br>
  <a href="new_cz.php">Pomiar temperatury - dane >>></a><br>
</div>

</body>
</html>
