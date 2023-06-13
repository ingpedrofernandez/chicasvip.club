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
include("menu.php");
require("PasswordHash.php");

?>
<br /><br /><br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<H5>REGISTRO CHICASVIP</H5>

<?php

$name=$_POST["name"];
$email=$_POST["email"];
$city=$_POST["city"];
$comp="no";
$title="REGISTRO";
$from="ChicasVip.Club";

function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}


$alpha = "abcdefghijklmnopqrstuvwxyz";
$alpha_upper = strtoupper($alpha);
$numeric = "0123456789";
$special = ".-+=_,!@$#*%<>[]{}";
$chars = "";
 
if (isset($_POST['length'])){
    // if you want a form like above
    if (isset($_POST['alpha']) && $_POST['alpha'] == 'on')
        $chars .= $alpha;
     
    if (isset($_POST['alpha_upper']) && $_POST['alpha_upper'] == 'on')
        $chars .= $alpha_upper;
     
    if (isset($_POST['numeric']) && $_POST['numeric'] == 'on')
        $chars .= $numeric;
     
    if (isset($_POST['special']) && $_POST['special'] == 'on')
        $chars .= $special;
     
    $length = $_POST['length'];
}else{
    // default [a-zA-Z0-9]{9}
    $chars = $alpha . $alpha_upper . $numeric;
    $length = 10;
}
 
$len = strlen($chars);
$pw = '';
 
for ($i=0;$i<$length;$i++)
        $pw .= substr($chars, rand(0, $len-1), 1);
 
// the finished password
$pw = str_shuffle($pw);
echo "<h5>$pw</h5>";

$hasher = new PasswordHash(8, false);
$hash = $hasher->HashPassword($pw);
if (strlen($hash) >= 20) {

$pw2=$hash;

} else {

header ("Location: registrate.php"); 

}

$pw1=$pw;
//echo $pw;
$text="Hola ";
$dot=".";
$text1=" Su registro ha sido exitoso / Su clave es :  ";

$message=$text.$name.$dot.$text1.$pw;
?>
<h5>
 <?php
echo $message;
?>
</h5>

 <?php
  if (isset($_POST["name"])) {
   // $from = $_POST["name"]; // sender
   // $email = $_POST["email"];
   // $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
   $message = wordwrap($message, 70);
    // send mail
    mail($email,$title,$message,"From: $from\n");
    echo "<h5>Gracias por registrase con nosotros. Un correo fue enviado a su E-mail.</h5>";
  }
  
  
  
include("connectdb.php");
$link=ConnectDb();

$consulta=mysql_query("select * from women order by code desc limit 1",$link) or die ("Problemas con la consulta");

while ($row = mysql_fetch_assoc($consulta)) {
  
$code=$row["code"];
}
$search = 's';
$trimmed = str_replace($search, '', $code);

$trimmed1 = intval($trimmed);

$c=$trimmed+1;

$a=strlen($c);

switch ($a)
{
case "1":
   $codigo1="s000".$c;
  break;
case "2":
   $codigo1="s00".$c;
  break;
case "3":
 $codigo1 ="s0".$c;
  break;
case "4":
  $codigo1 ="s".$c;
  break;
  
}

$consulta =mysql_query("SELECT COUNT(*) AS COUNT FROM women",$link) or die ("Problemas con la consulta");
$data=mysql_fetch_assoc($consulta);
//echo $data['COUNT'];

if ($data['COUNT']<1)
$codigo1="s0001";



mysql_query("insert into women (password,name,email,city,code) values ('$pw2','$name','$email','$city','$codigo1')",$link) or die ("Problemas con la grabacion");

mysql_query("UPDATE women SET complete='$comp' where password='$pw2'",$link) or die ("Problemas con la modificacion");

?>
<br>
<br>
<?php
echo "<h5>Su nombre ha sido agregado a nuestra Base de Datos. Busca en tu email el correo de ChicasVip.Club y anunciate con esa clave.<h5>";
?>
<br>
<br>
<?php

mysql_close($link);
echo "<h5>Para salir del sustema haga click en el boton de abajo.<h5>";

?>
<br><br>
<FORM ACTION="modulofin3.php" method="POST">
<input type="hidden" name="name" value="<?php echo $name ?>">
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="city" value="<?php echo $city ?>">
<input type="hidden" name="pw" value="<?php echo $pw ?>">

<INPUT TYPE="submit" NAME="accion" VALUE="SALIR DEL SISTEMA">
</FORM>
<br><br>

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
