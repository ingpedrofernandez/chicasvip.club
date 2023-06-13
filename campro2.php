<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChicasVip.Club</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" />

<script> 
function chkemail(field)
{
  var newmail=field.value;
  while (newmail.indexOf("@") == -1)
  {
    newmail=prompt("Por favor ingrese un e-mail valido",
                        "Ingrese su e-mail aqui");
  }
  field.value = newmail;
}
</script> 

</head>
<body>
<div id="container">
        <div id="header">
      <center> <img src="images/logo.png" alt="image 2" /> </center>
    </div>

 <?php
include("menu2.php");
include("connectdb.php");
$link=ConnectDb();

$clave=$_POST["clave"];
if ($clave=="")
{
header ("Location: clavebd4.php"); 
}

require("PasswordHash.php");
$hasher = new PasswordHash(8, false);
$consulta=mysql_query("select * from codes",$link) or die ("Problemas con la consulta");

while ($reg=mysql_fetch_array($consulta))

{

$code1=$reg["code"];
$code2=$reg["user"];

//$check = $hasher->CheckPassword($password, $code);
if ($hasher->CheckPassword($clave, $code1)) {

  // passwords matched! show account dashboard or something
  $code=$code1;
  $code3=$code2;
  $result1=1;

} else {
  $code2="0";
  $result2=2;
// passwords didn't match, show an error
}
}

$consulta=mysql_query("select * from codes where user='$code3'",$link) or die ("Problemas con la consulta");

if ($reg=mysql_fetch_array($consulta))
{


$consulta=mysql_query("select * from codes where code='$code3'",$link) or die ("Problemas con la consulta");
$code=$reg["code"];
$user=$reg["user"];
session_start();
$_SESSION['usuario']=$user; 
?>
<br>
<?php
echo "<h4><font color=#EEE8AA>usuario = {$_SESSION['usuario']}<br></font></h4>";
?>

<br /><br /><br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<FORM ACTION="campro3.php" method="POST">
<input type=hidden name=todo value=submit-form>
<H5>CAMBIO DE CLAVE PROGRAMACION</H5><br />
<center><table><tr>
<td><H5>Ingresar Clave Nueva:</h5> </td><td><input type="text" name="clave1" value="<?php echo $clave ?>" SIZE="40" MAXLENGTH="60"></td>
</tr>
<tr><TD><h5>Usuario:</h5></TD>
<TD><h5><?php echo $user ?></h5></TD>
</TR>
</table></center>
<br><br>
<input type="hidden" name="clave" value="<?php echo $clave ?>">
<input type="hidden" name="code" value="<?php echo $code ?>">
<input type="hidden" name="user" value="<?php echo $user ?>">
<input type="submit" name="accion" value="Cambiar">

<br>

</FORM>
<br>
<br>
<FORM ACTION="modulofin.php" method="POST">
<INPUT TYPE="submit" NAME="accion" VALUE="SALIR DEL SISTEMA">
</FORM>
<br>
<?php
}
//<INPUT TYPE="reset" NAME="accion" VALUE="Limpiar">
else
{
?>
<br>
<br>
<br>
<br>
<?php
echo "<center><h2>Clave No Existe </h2></center>";
mysql_close($link);
}
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