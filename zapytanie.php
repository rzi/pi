<?php
header("Content-Type: application/json;charset=utf-8");
  $obiekt = $_GET['obiekt'];
  $dzien = $_GET['dzien'];
  $godzina = $_GET['godzina'];
  $tabLabel;
  $tabData;
  $tabObjekt;

     $zm2= $dzien ." ".$godzina .":00";
    $zm1=strtotime($zm2);
//    echo "<br>\r\n";
//    echo $zm1;
//    echo "<br>\r\n";



  // -Łczymy się z bazą danych
  require "connection_pi_base.php";
  connection_pi_base();
  //$wynik1 = mysqli_query($link,"SELECT * FROM pomiary2 WHERE `my_epoch` > $zm1 AND WHERE `nr_czujnika`=$obiekt ORDER BY `id` DESC LIMIT 1440")
      $wynik1 = mysqli_query($link,"SELECT * FROM pomiary2 WHERE `my_epoch` > $zm1 ORDER BY `id` DESC LIMIT 1440")
    or die('Błąd zapytania');
  mysqli_close($link);

  if(mysqli_num_rows($wynik1) > 0) {
    while($r = mysqli_fetch_assoc($wynik1)) {
      // echo $my_id=$r['id'];
      // echo "<br>\r\n";
      $my_my_epoch=$r['my_epoch'];
	  // $tabLabel[$licznik]=$my_my_epoch;
      // echo "<br>\r\n";
      // echo $my_nr_hex=$r['nr_hex'];
      // echo "<br>\r\n";
      $my_temp=$r['temp'];
	  $tabData[$my_my_epoch]=$my_temp;
      // echo "<br>\r\n";
      // echo $my_nr_czujnika=$r['nr_czujnika'];
      // echo "<br>\r\n";
      // echo "licznik";
      // echo $licznik=$licznik-1;
      // echo "<br>\r\n";
    };
  };
  //	$myArr = array("John", "Mary", "Peter", "Sally");
  $myJSON = json_encode($tabData);
  echo $myJSON;
  //   echo "<br>\r\n";
?>
