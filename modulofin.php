<?php
ob_start(); 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

$a=$_SESSION['usuario'];
//echo $a;

include("connectdb.php");
$link=ConnectDb();
date_default_timezone_set("America/Caracas");
$date_time2 = date('Y-m-d H:i:s');
$consulta=mysql_query("select * from users1 WHERE user = '$a'",$link) or die ("Problemas con la consulta");
while ($reg=mysql_fetch_array($consulta))
{		$user= $reg["user"];
		$date_time= $reg["date_time"];
}
$b=strtotime($date_time);
$c=strtotime($date_time2);
$d=$c-$b;
$elti= gmdate("H:i:s", $d);
$elti1="hh/mm/ss  ".$elti;
//mysql_query("UPDATE  users set user='$user',date_time='$date_time',date_time2='$date1' where user='$a'",$link) or die ("Problemas con la modificacion");
mysql_query("insert into users values ('$user','$date_time','$date_time2','$elti1')",$link) or die ("Problemas con la grabacion");
mysql_query("delete  from users1",$link) or die ("Problemas con el borrado");
mysql_close($link);

unset($_SESSION );
$_SESSION['usuario'] = "";
session_destroy();
header ("Location: index.php"); 
ob_end_flush(); 
?>
</body>
</html>
<?php
ob_end_flush(); 
?>