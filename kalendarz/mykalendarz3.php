<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>mykalendar2</title>

<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>

<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }
pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<form action="somewhere.php" method="post" name="form1">
<?php

require_once('/var/www/kalendarz/calendar/classes/tc_calendar.php');
	$myCalendar1 = new tc_calendar("date2", true);
	$myCalendar1->setIcon("calendar/images/iconCalendar.gif");
	$myCalendar1->setDate(date('d'), date('m'), date('Y'));
	$myCalendar1->setPath("calendar/");
	$myCalendar1->setYearInterval(1970, 2020);
	$myCalendar1->dateAllow('2008-05-13', '2015-03-01', false);
	$myCalendar1->startMonday(true);
	//$myCalendar->disabledDay("Sat");
	//$myCalendar->disabledDay("sun");
	$myCalendar1->writeScript();
	$myCalendar1->setOnChange("myChanged('test')");
	echo "<br>";

	//require_once('/var/www/kalendarz/calendar/classes/tc_calendar.php');

	echo "<br>";
	$myCalendar = new tc_calendar("date1", true);
	$myCalendar->setIcon("calendar/images/iconCalendar.gif");
	//$myCalendar->setDate(01, 03, 1960);
	$myCalendar->setDate(date('d'), date('m'), date('Y'));
	$myCalendar->setPath("calendar/");
	$myCalendar->setYearInterval(1960, 2015);
	$myCalendar->dateAllow('1960-01-01', '2015-03-01');
	//$myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
	$myCalendar->startMonday(true);
	//$myCalendar->disabledDay("Sat");
	//$myCalendar->disabledDay("sun");
	$myCalendar->setOnChange("myChanged('test')");
	$myCalendar->writeScript();
?>

<script language="javascript">
<!--
function myChanged(v){
	alert(" Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}

function showDateSelected(){
   alert(" Date selected is "+document.form1.date1.value);
}

function myChanged(v){
	alert(" Hello, value has been changed : "+document.getElementById("date2").value+"["+v+"]");
}

function showDateSelected(){
   alert(" Date selected is "+document.form1.date2.value);
}
</script>
<a href="javascript:showDateSelected();"> Check calendar value2</a>
</script>

</form>

</body>
</html>
