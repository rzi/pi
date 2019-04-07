<?php
require_once('kalendarz/calendar/classes/tc_calendar.php');
?>
<!doctype html>
<html lang="pl-PL">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Formularz dane</title>
<script language="javascript" src="kalendarz/calendar/calendar.js"></script>

<!--
function showDateSelected(){
   alert("Date selected is "+document.form2.date5.value);
}
</script>
<script language="javascript">
<!--
function myChanged(v){
	alert("Hello, value has been changed : "+document.getElementById("date5").value+"["+v+"]");
}
//-->


<link href="kalendarz/calendar/calendar.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
    $date4;

$getDate4 = $_GET['date4']; // jeśli nie dostanie daty z get to pobiera aktualną
if (!$getDate4){
	$getDate4 = date("Y/m/d");
//	echo $getData4;
}

$tpl = "<form name='form2' method='get' action='/new_wyk5.php'>";
		$myCalendar = new tc_calendar("date4", true);
		$myCalendar->setAutoHide(false); //auto hide in 3 seconds
		$myCalendar->autoSubmit(true, "", "/new_wyk5.php");
		$myCalendar->setYearInterval(2010, 2020);
		$myCalendar->dateAllow('2010-01-01', '2020-03-01');
		//$myCalendar->setDate(date('d'), date('m'), date('Y'));
		$myCalendar->setDate(date("j",strtotime($_GET ['date4'])), date("n",strtotime($_GET ['date4'])), date("Y",strtotime($_GET ['date4'])));
		//$myCalendar->setDate(date("j, n, Y",$getData4));
		$myCalendar->setIcon("kalendarz/calendar/images/iconCalendar.gif");
		$myCalendar->setPath("kalendarz/calendar/");
		$myCalendar->showWeeks(true);
		//$myCalendar->setOnChange('{document.form2.submit();}');
		//$myCalendar->dateAllow(date('Y-m-d', mktime (0,0,0,date("m")-2,date("d"),date("Y"))), date('Y-m-d'));
		$myCalendar->setAlignment('left', 'bottom');
		$myCalendar->setText("Click Me");
		$myCalendar->showWeeks(true);
		$myCalendar->startMonday(true);
		//$myCalendar->zindex = 99;
		//$myCalendar->writeScript();
$tpl .= "</form>";
		//echo $tpl;


?>

<form id="form1" name="form1" method="get" action="new_mywyk.php">

<?php

echo '<h2 ALIGN="center">Pomiar temperatury- wykresy</h2>';

?>

<a href="index.php"><<< Powrót</a><br>
<a href="script3.php">>>> Nowy wykres godziowy </a><br>
<a href="script4.php">>>> Nowy wykres dzienny </a>

<?php
echo '<br>';
echo '<br>';
echo '<table border="0">';
	echo '<tr>';
		echo '<td>Data :</td>';
		echo '<td>Godzina :</td>';
		echo '<td>Wykres :</td>';
	echo '</tr>';

	echo '<tr>';
		echo '<td>';
		echo '&nbsp ';
		$myCalendar->writeScript();

		echo '<select name="my_data">';
		$mydate=$_GET ['date4'];
		echo '<option selected="selected">'.$mydate.'<option>';
		echo '</select>';
		echo '</td>';

		echo '<td>';
		echo '<select name="my_godz">';
		$a=0;
		while ($a < 25){
			$a2=":00:00";
			$a1=$a.$a2;
			echo '<option value="'.$a1.'">'.$a1.'</option>' ;
			$a++;
		}
		echo '<option selected="selected">'.date('H').$a2.'<option>';
		echo '</select>';
		echo '</td>';

		echo '<td>';
		echo '<select name="my_wyk">';
		echo '<option value="18">Temperatura zwenętrzna</option>' ;
		echo '<option value="25">Gabinet</option>' ;
		echo '<option value="22">Salon</option>' ;
		echo '<option value="29">Korytarz parter</option>' ;
		echo '<option value="3">Kotlownia</option>' ;
		echo '<option value="19">Łazienka Parter</option>' ;
		echo '<option value="27">Kuchnia</option>' ;
		echo '<option value="10">Pokój Ani</option>' ;
		echo '<option value="6">Sypialnia</option>' ;
		echo '<option value="20">Korytarz piętro</option>' ;
		echo '<option value="12">Łazienka piętro</option>' ;
		echo '<option value="16">Pokój Grzesia</option>' ;
		echo '<option value="5">Gaz C.O. ciepła</option>' ;
		echo '<option value="15">Gaz C.O zimna</option>' ;
		echo '<option value="9">Zasobnik zimana</option>' ;
		echo '<option value="28">Zasobnik ciapła</option>' ;
		echo '<option value="21">Wymiennik obw. otwarty WE</option>' ;
		echo '<option value="1">Wymiennik obw. otwarty WY</option>' ;
		echo '<option value="7">Wymiennik obw. zamknię WE</option>' ;
		echo '<option value="11">Wymiennik obw. zamknię WY</option>' ;
		echo '<option value="23">Pion piętro ciepła</option>' ;
		echo '<option value="20">Pion pięo zimna</option>' ;
		echo '<option value="2">Pion parter ciepła</option>' ;
		echo '<option value="31">Pion parter zimna</option>' ;
		echo '<option value="0">Zaw. trójdrożny WE</option>' ;
		echo '<option value="24">Zaw. trójdrożny WY</option>' ;
		echo '<option value="17">Zaw. trójdrożny Powrót</option>' ;
		echo '<option value="14">Zaw. ciśnieniowy</option>' ;
		echo '<option value="13">Podłogó ciepła</option>' ;
		echo '<option value="26">Podłogówka ziman</option>' ;
		echo '<option value="4">Pompa cyrkulacja</option>' ;
		echo '<option value="30">wolne</option>' ;
		//echo '<option selected="selected">temp_30<option>';
		echo '</select>';
		echo '</td>';
	echo '</tr>';

	echo '<tr>';
		echo '<td>';
		echo '</td>';

		echo '<td colspan="2">';
		echo "Skala Y wykres godzinowy";
		echo '</td>';

	echo '</tr>';

	echo '<tr>';
		echo '<td >';
		//echo $getData4;
		//echo " ";
		//echo $_GET ['date4'];
		echo '</td>';

		echo '<td>';
		echo " Y min";
		echo "  ";
		echo '<select name="my_ymin">';
		echo '<option value="0">0</option>' ;
		echo '<option value="-20">-20</option>' ;
		echo '<option value="-10">-10</option>' ;
		echo '<option value="-5">-5</option>' ;
		echo '<option value="0">0</option>' ;
		echo '<option value="3">3</option>' ;
		echo '<option value="5">5</option>' ;
		echo '<option value="10">10</option>' ;
		echo '<option value="15">15</option>' ;
		echo '<option value="20">20</option>' ;
		echo '<option value="25">25</option>' ;
		echo '<option value="30">30</option>' ;
		echo '<option value="35">35</option>' ;
		echo '<option value="40">40</option>' ;
		echo '<option value="45">45</option>' ;
		echo '<option value="50">50</option>' ;
		echo '<option value="55">55</option>' ;
		echo '<option value="60">60</option>' ;
		echo '<option value="70">70</option>' ;
		echo '<option value="80">80</option>' ;
		//echo '<option selected="selected">temp_30<option>';
		echo '</select>';
		echo '</td>';

		echo '<td>';
		echo " Y max ";
		echo "  ";
		echo '<select name="my_ymax">';
		echo '<option value="20">20</option>' ;
		echo '<option value="0">0</option>' ;
		echo '<option value="5">5</option>' ;
		echo '<option value="10">10</option>' ;
		echo '<option value="15">15</option>' ;
		echo '<option value="20">20</option>' ;
		echo '<option value="25">25</option>' ;
		echo '<option value="30">30</option>' ;
		echo '<option value="35">35</option>' ;
		echo '<option value="40">40</option>' ;
		echo '<option value="45">45</option>' ;
		echo '<option value="50">50</option>' ;
		echo '<option value="55">55</option>' ;
		echo '<option value="60">60</option>' ;
		echo '<option value="70">70</option>' ;
		echo '<option value="80">80</option>' ;
		//echo '<option selected="selected">temp_30<option>';
		echo '</select>';
		echo '</td>';

	echo '</tr>';

	echo '<tr>';

		echo '<td>';
		echo '</td>';

		echo '<td>';
		echo " Y min";
		echo "  ";
		echo '<select name="my_ymin1">';
		echo '<option value="-5">-5</option>' ;
		echo '<option value="-20">-20</option>' ;
		echo '<option value="-10">-10</option>' ;
		echo '<option value="-5">-5</option>' ;
		echo '<option value="0">0</option>' ;
		echo '<option value="5">5</option>' ;
		echo '<option value="10">10</option>' ;
		echo '<option value="20">20</option>' ;
		echo '<option value="25">25</option>' ;
		echo '<option value="30">30</option>' ;
		echo '<option value="35">35</option>' ;
		echo '<option value="40">40</option>' ;
		echo '<option value="45">45</option>' ;
		echo '<option value="50">50</option>' ;
		echo '<option value="55">55</option>' ;
		echo '<option value="60">60</option>' ;
		echo '<option value="70">70</option>' ;
		echo '<option value="80">80</option>' ;
		//echo '<option selected="selected">temp_30<option>';
		echo '</select>';

		echo '<td>';
		echo " Y max ";
		echo "  ";
		echo '<select name="my_ymax1">';
		echo '<option value="20">20</option>' ;
		echo '<option value="0">0</option>' ;
		echo '<option value="5">5</option>' ;
		echo '<option value="10">10</option>' ;
		echo '<option value="25">25</option>' ;
		echo '<option value="30">30</option>' ;
		echo '<option value="35">35</option>' ;
		echo '<option value="40">40</option>' ;
		echo '<option value="45">45</option>' ;
		echo '<option value="50">50</option>' ;
		echo '<option value="55">55</option>' ;
		echo '<option value="60">60</option>' ;
		echo '<option value="70">70</option>' ;
		echo '<option value="80">80</option>' ;
		//echo '<option selected="selected">temp_30<option>';
		echo '</select>';

	echo '</td>';
echo '</table>';

echo '<table border="0">';
	echo '</tr>';
		echo '<td width="150">';
		echo '</td>';

		echo '<td width="150">';
		echo '</td>';

		echo '<td>';
		echo '<button type="submit" >Wyświetl wykres</button>';
		echo '</td>';
	echo '</tr>';
		echo '<td width="150">';
		echo '</td>';

		echo '<td width="150" height="10>';
		echo '</td>';

		echo '<td>';
		echo '</td>';
	echo '</tr>';

echo '</table>';
echo '<table border="2">';
	echo '</tr>';
		echo '<td width="150">';
		echo '</td>';
		echo '<td width="150"  height="30">';
		echo '</td>';
		echo '<td>';
		echo '</td>';
	echo '</tr>';
		echo '<td width="200" >';
		echo '</td>';
		echo '<td >';
		echo(" Aktualna data : ".date("Y/m/d"));
		echo '</td>';
	echo '</tr>';
echo '</table>';
echo('</form>');

?>

<img src="/pi/img/pi.png"> <br>

</body>
</html>
