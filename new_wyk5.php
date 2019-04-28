<!doctype html>
<html lang="pl-PL">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Formularz dane</title>
  <link rel="stylesheet" href="/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <!--//jquery   -->
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>

    <script src="/js/skrypt.js"></script>

  <?php
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  header("Connection: close");
  ?>
</head>
<body>
    <h2>Pomiary temperatur - wykresy </h2><br/>
    <div class="dane">
        Obiekt Pomiarowy:
        <select name="objektPomiarowy" id="objektPomiarowy">
           <option value="18">Temp. Zewnętrzna</option>
           <option value="1">Gabinet</option>
           <option value="22">Salon</option>
           <option value="29">Korytarz Parter</option>
           <option value="3">Kotlownia</option>
           <option value="19">Łazienka Parter</option>
           <option value="27">Kuchnia</option>
           <option value="10">Pokój Ani</option>
           <option value="6">Sypialnia</option>
           <option value="20">Korytarz piętro</option>
           <option value="12">Łazienka piętro</option>
           <option value="16">Pokój Grzesia</option>
           <option value="5">Gaz C.O. ciepła</option>
           <option value="15">Gaz C.O zimna</option>
           <option value="9">Zasobnik zimana</option>
           <option value="28">Zasobnik ciapła</option>
           <option value="21">Wymiennik obw. otwarty WE</option>
           <option value="25">Wymiennik obw. otwarty WY</option>
           <option value="7">Wymiennik obw. zamknię WE</option>
           <option value="11">Wymiennik obw. zamknię WY</option>
           <option value="23">Pion piętro ciepła</option>
           <option value="20">Pion pięo zimna</option>
           <option value="2">Pion parter ciepła</option>
           <option value="31">Pion parter zimna</option>
           <option value="0">Zaw. trójdrożny WE</option>
           <option value="24">Zaw. trójdrożny WY</option>
           <option value="17">Zaw. trójdrożny Powrót</option>
           <option value="14">Zaw. ciśnieniowy</option>
           <option value="13">Podłogó ciepła</option>
           <option value="26">Podłogówka ziman</option>
           <option value="4">Pompa cyrkulacja</option>
           <option value="30">wolne</option>
        </select>

        Data od: <input type="date" name="datepicker" id="datepicker1">

        godz: <input type="time" name="timepicker" id="timepicker1">


        Data do: <input type="date" name="datepicker2" id="datepicker2" class="datepicker2">

        godz: <input type="time" name="timepicker2" id="timepicker2" class="timepicker2">

        <input type="button" name="przycisk1" id="przycisk1" value="wykres">

		<input type="button" name="przycisk2" id="przycisk2" value="uporządkuj">

    </div>

    <div class="chart-container">
        <a href="index.php">Powrót</a>
        <canvas id="myChart"></canvas>
    </div>
</body>
</html>
