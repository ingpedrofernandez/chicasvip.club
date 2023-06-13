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
?>
<br /><br /><br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br /><br />
<H5>Enviar E-mail a programacion@chicasvip.club</H5><br />

<?php

$from=$_POST["name"];
$email=$_POST["email"];
$title=$_POST["title"];
$message1=$_POST["message"];

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

//echo $pw;
$text="E-mail : ";
$dot=".";
$text1=" Mensaje :  ";

$message=$text.$email.$dot.$text1.$message1;
?>
<h5>
 <?php
//echo $message;
?>
</h5>

 <?php
  if (isset($_POST["email"])) {
   // $from = $_POST["name"]; // sender
   // $email = $_POST["email"];
   // $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
   $message = wordwrap($message, 70);
    // send mail
    mail("programacion@chicasvip.club",$title,$message,"From: $from\n");
	
    echo "<h2>E-mail enviado. Gracias por sus comentarios. Nos <br><br> comunicaremos con ud. a la brevedad.</h2>";
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
