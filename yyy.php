<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

 <?php
 
 include("connectdb.php");
$link=ConnectDb();

 
mysql_query("insert into women (password,name,email,city) values ('$pw','$name','$email','$city')",$link) or die ("Problemas con la grabacion");
?>
<br>
<br>
<br>
<br>
<br>
<?php
echo "<center><h5>Su nombre ha sido agregado a nuestra Base de Datos. Busca en tu email el correo de ChicasVip.Club y anunciate con esa clave.<h5></center>";

mysql_close($link);


?>


</body>
</html>
