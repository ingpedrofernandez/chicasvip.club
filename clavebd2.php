<?php
ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>ChicasVip.Club</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" />

</head>
<body>
<div id="container">
        <div id="header">
      <center> <img src="images/logo.png" alt="image 2" /> </center>
    </div>
    

<?php 
include("menubd.php");
$clave=$_POST["clave"];
if ($clave=="")
{
header ("Location: clavebd4.php"); 
}

//ob_start(); 
?>

<br /><br /><br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<?php 

 
include("connectdb.php");
$link=ConnectDb();

require("PasswordHash.php");
$hasher = new PasswordHash(8, false);
$consulta=mysql_query("select * from codes",$link) or die ("Problemas con la consulta");

while ($reg=mysql_fetch_array($consulta))

{

$code1=$reg["code"];

//$check = $hasher->CheckPassword($password, $code);
if ($hasher->CheckPassword($clave, $code1)) {

  // passwords matched! show account dashboard or something
  $code=$code1;
  $result1=1;

} else {
  $code2="0";
  $result2=2;
// passwords didn't match, show an error
}
}


$consulta=mysql_query("select * from codes where code='$code'",$link) or die ("Problemas con la consulta");

if ($reg=mysql_fetch_array($consulta))
{
?>
<?php
$consulta=mysql_query("select user from codes where code='$code'",$link) or die ("Problemas con la consulta");
$user=$reg["user"];
session_start();
$_SESSION['usuario']=$user; 

$a=$_SESSION['usuario'];
date_default_timezone_set("America/Caracas");
$date = date('Y-m-d H:i:s');
mysql_query("insert into users1 (user,date_time) values ('$a','$date')",$link) or die ("Problemas con la grabacion");
mysql_query("insert into users2 (user,date_time) values ('$a','$date')",$link) or die ("Problemas con la grabacion");


header ("Location: bd.php"); 
?>

<FORM ACTION="modulo.php" method="POST">

<br>
<br>
<br>
<br>

<INPUT TYPE="submit" NAME="accion" VALUE="Ingresar al Sistema">
<br>


</FORM>

<?php
}
else
{
?>
<br>
<br>

<?php
header ("Location: clavebd3.php"); 

}
?>
<br>
<FORM><INPUT TYPE="button" VALUE="Atras" onClick="history.go(-1);"> </FORM>
<br>
<?php
?>
</div>
<div id="primary">
    </div>
    
    <div id="content">
    </div>
    
    <div id="secondary">
	</div>
    
    <div id="footer">
    
    </div>
	
</div>

</body>
</html>
<?php
ob_end_flush(); 
?>