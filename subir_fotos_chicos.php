<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
include("menu.php");
$clave=$_POST["clave"];
$code=$_POST["code"];

include("connectdb.php");
$link=ConnectDb();

require("PasswordHash.php");
$hasher = new PasswordHash(8, false);
$consulta=mysql_query("select * from men",$link) or die ("Problemas con la consulta");

while ($reg=mysql_fetch_array($consulta))

{
$password=$reg["password"];
$code1=$reg["code"];

//$check = $hasher->CheckPassword($password, $code);
if ($hasher->CheckPassword($clave, $password)) {

  // passwords matched! show account dashboard or something
  $code=$code1;
  $result1=1;

} else {
  $code2="0";
  $result2=2;
// passwords didn't match, show an error
}
}


$consulta=mysql_query("select * from men where code='$code'",$link) or die ("Problemas con la consulta");
while ($reg=mysql_fetch_array($consulta))
{
$code=$reg["code"];
}
session_start();
$_SESSION['usuario']=$code; 

//$code="s0001";
?>
<br /><br /><br />
<?php 
echo "<h4><font color=#EEE8AA>usuario = {$_SESSION['usuario']}<br></font></h4>";
?>
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<br /><br />
<font color="#d82b82"><h3>
<form action="subir_fotos_chicos2.php" method="post"
enctype="multipart/form-data">
<label for="file">Archivo:</label>
<input type="file" name="file" id="file"><br>
<input type="hidden" name="code" value="<?php echo $code ?>">
<input type="hidden" name="clave" value="<?php echo $clave ?>">
<br /><br />
<input type="submit" name="submit" value="SUBIR FOTO">
</form>
</h3></font>
<br /><br />
</div>
</td></tr>
</table></center>
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
