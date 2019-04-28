<!doctype html>
<html lang="pl-PL">
<head>
<title>Pomiar temperatury Raspberry PI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>
<div>
  <h2 >Pomiar temperatury i zapis w bazie danych</h2>
  <div class="contener">
    <p>Celem projektu są pomiary temperatur, ich
      zapis do zewnętrznej bazy danych oraz sterowanie zaworami ogrzewania podłogowego</p>
    <img alt="Pi" src="/img/schemat_rpi.png"> <br>
    <h4>1.Hardware:</h4>
    <p>Czujnik temperatury DS18B20<br>
      Moduł interfejsu One wire na USB firmy Meraprojekt (FT232RL + DS2480)<br>
      Raspberry Pi jako serwer<br>
      Moduł 8 przekaźników </p>
    <h4>2.Software:</h4>
    <p>Serwer HTTP (Apache, PHP, MySQL) <br>
      Python - oprogramowanie modułu pomiarowego<br>
    <h3>Pomiar temperatury- Monitor danych (archiwum)</h3>
    <a href="new_wyk5.php">Pomiar temperatury - wykresy >>></a>
    <a href="new_cz.php">Pomiar temperatury - dane >>></a>
`</div>
</div>
</body>
</html>
