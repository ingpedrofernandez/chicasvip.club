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
include("menu.php");

@$todo=$_POST['todo'];
if($todo=="submit-form"){ 
$status_form = "OK";
$msg="";

$clave=$_POST["clave"];

 if(preg_match("'\A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])[-_a-zA-Z0-9]{10,}\z'", $_POST["clave1"]) === 0) {
//$errtest = '<p class="errText">La clave debe tener al menos una mayuscula, una minuscula y un numero y tener minimo 10 caracteres</p>'; 
// if(isset($errtest)){ echo $errtest; }}else{ 
$status_form="NOTOK";
$msg .= "La clave debe tener al menos una mayuscula, una minuscula y un numero y tener minimo 10 caracteres<br>";
}

 if($status_form=="OK"){


$code=$_POST["code"];
$clave1=$_POST["clave1"];
include("connectdb.php");
$link=ConnectDb();

session_start();
$_SESSION['usuario']=$code; 
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

header ("Location: camclaw.php"); 

}

mysql_query("UPDATE women SET password='$clave2' where code='$code'",$link) or die ("Problemas con la modificacion");
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
}else{
while (list ($key, $val) = each ($_POST)) {
$pd .= "$key=".urlencode($val)."&";
}// end of  while 
//echo $pd;
header ("Location: camclaw4.php?msg=$msg&$pd"); 
}// end of else if status_form is not ok


}// checking of todo value

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