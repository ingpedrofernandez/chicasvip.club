<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
function ConnectDb()
{
$server = "localhost";
$user = "root";
$pass = "morochos";
$data_base = "db_chicasvipclub";
//Conexión al servidor de bases de datos
$link = mysql_connect($server,$user,$pass) or die ("Problemas con el servidor");
//Se selecciona la base de datos
mysql_select_db($data_base,$link) or die ("Problemas con la Base de Datos");
return $link;
}

?>
</body>
</html>
