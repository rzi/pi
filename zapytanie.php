<!doctype html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/pi/css/style.css" type="text/css" />
  <title>Zapytanie do bazy danych </title>
</head>

<body>
  <?php
    $obiekt = $_GET['obiekt'];
    $dzien = $_GET['dzien'];
    $godzina = $_GET['godzina'];

    echo $obiekt ;
    echo $dzien ;
    echo $godzina ;

    // -Łczymy się z bazą danych
    require "connection_pi_base.php";
    connection_pi_base();
    $wynik1 = mysqli_query($link,"SELECT * FROM pomiary2  ORDER BY `id` DESC LIMIT 29")
      or die('Błąd zapytania');
    mysqli_close($link);

    $licznik=28;
    if(mysqli_num_rows($wynik1) > 0) {

      while($r = mysqli_fetch_assoc($wynik1)) {

       echo $my_id=$r['id'];
        echo "<br>\r\n";
       echo $my_my_epoch=$r['my_epoch'];
        echo "<br>\r\n";
       echo $my_nr_hex=$r['nr_hex'];
        echo "<br>\r\n";
       echo $my_temp=$r['temp'];
        echo "<br>\r\n";
       echo $my_nr_czujnika=$r['nr_czujnika'];
        echo "<br>\r\n";
       echo "licznik";
       echo $licznik=$licznik-1;
        echo "<br>\r\n";
      };
    };


    echo "<br>\r\n";



    ?>




</body>

</html>
