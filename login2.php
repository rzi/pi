 <?php header('Content-Type: text/html; charset=utf-8'); ?>
<html
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <meta http-equiv="content-type" content="text/html; charset=iso-8859-2"> -->
<title>Strona główna logowania</title>
</head>
<body>
<?
session_start();
//session_register("zalogowany");
if(empty($_SESSION["zalogowany"]))$_SESSION["zalogowany"]=0;



if($_GET["wyloguj"]=="tak"){$_SESSION["zalogowany"]=0;echo "Zostałeś wylogowany z serwisu";}
if($_SESSION["zalogowany"]!=1){
	if(!empty($_POST["login"]) && !empty($_POST["haslo"])){
		require "connection1.php";
		connection1();
		if(mysql_num_rows(mysql_query("select * from konta where login = '".htmlspecialchars($_POST["login"])."' AND haslo = '".htmlspecialchars($_POST["haslo"])."'"))){
			//echo "Zalogowano poprawnie. <a href='dane_temp.php'>Przejdź na stronę główną</a>";
			$_SESSION["zalogowany"]=1;
			header( 'Location: tab1.php' ) ;
			}
		else echo ShowLogin("Podano złe dane!!!");
		}

	else {
	echo "<br>";?>

	<table border = "0">

	<tr >
	<td valign="bottom" align="center" style="width: 160px" style="height: 40px"></td>
	<td bgcolor="yellow" valign="bottom" align="center" style="width: 340px" style="height: 40px"> <? echo " Logowanie, wprowadź poprawne dane:"?></td>
	<td valign="bottom" align="center" style="width: 160px" style="height: 40px"></td>
	</tr>
	<tr >
	<td valign="bottom" align="center" style="width: 160px" style="height: 40px"></td>
	<td bgcolor="yellow" valign="bottom" align="center" style="width: 360px" style="height: 40px"><?ShowLogin();}?></td>
	<td valign="bottom" align="center" style="width: 160px" style="height: 40px"></td>
	</tr>
	</table>
	<?

	//ShowLogin();}
}
else{
header( 'Location: tab1.php' ) ;

}
?>


</body>
</html>
<?php mysql_close(); ?>

<?php
function ShowLogin($komunikat=""){
	echo "$komunikat<br>";
	echo "<form action='login2.php' method=post>";
	echo "Login: <input type=text name=login><br>";
	echo "Hasło: <input type=password name=haslo><br>";
	echo "<input type=submit value='Zaloguj!'>";
	echo "</form>";
}
?>
