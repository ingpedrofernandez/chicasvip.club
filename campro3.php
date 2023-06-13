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
include("menu2.php");
$clave=$_POST["clave"];
$code=$_POST["code"];
$clave1=$_POST["clave1"];
$user=$_POST["user"];
include("connectdb.php");
$link=ConnectDb();

session_start();
$_SESSION['usuario']=$user; 
?>
<br>
<?php
echo "<h4><font color=#EEE8AA>usuario = {$_SESSION['usuario']}<br></font></h4>";

require("PasswordHash.php");
$hasher = new PasswordHash(8, false);
$hash = $hasher->HashPassword($clave1);
if (strlen($hash) >= 20) {

$clave2=$hash;

} else {

header ("Location: campro.php"); 

}

mysql_query("UPDATE codes SET code='$clave2' where user='$user'",$link) or die ("Problemas con la modificacion");
?>

<br /><br /><br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<?php 
?>
<br>
<br>

<?php
echo "<center><h2>CLAVE MODIFICADA</h2></center>";

?>
<br>
<FORM ACTION="modulofin.php" method="POST">
<INPUT TYPE="submit" NAME="accion" VALUE="SALIR DEL SISTEMA">

</FORM>

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