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
include("menubd.php");
?>
<br />
<?php 
$buscar=$_POST["buscar"];

session_start();
echo "<h4><font color=#EEE8AA>usuario = {$_SESSION['usuario']}<br></font></h4>";
?>

<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 950px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<br><br>
<H5>BUSQUEDA TRAVESTISVIP POR CIUDAD</H5><br />

<?php 
include("connectdb.php");
$link=ConnectDb();

$consulta = mysql_query("SELECT * FROM trans WHERE city = '$buscar'",$link) or die ("Problemas con la consulta");
?>
<font color=#d82b82>
<?php

while ($reg=mysql_fetch_array($consulta))

{


echo "<center><table border=1 BORDERCOLOR=#d82b82></center>";
echo "<th>Clave</th><th>Nombre</th><th>E-mail</th><th>Ciudad</th><th>Codigo</th><th>Telefono</th>";


echo "<tr>";
echo "<td>".$reg['password']."</td>";
echo "<td>".$reg['name']."</td>";
echo "<td>".$reg['email']."</td>";
echo "<td>".$reg['city']."</td>";
echo "<td>".$reg['code']."</td>";
echo "<td>".$reg['phone']."</td>";


echo "</tr>";
//echo "</table>";
echo "<tr>";

//echo "<center><table border=1></center>";
echo "<th>Página Web</th><th>Color de Pelo</th><th>Altura</th><th>Peso</th><th>Pecho</th><th>Zona</th>";
echo "</tr>";
echo "<tr>";

echo "<td>".$reg['website']."</td>";
echo "<td>".$reg['hair']."</td>";
echo "<td>".$reg['height']."</td>";
echo "<td>".$reg['weight']."</td>";
echo "<td>".$reg['breast']."</td>";
echo "<td>".$reg['zone']."</td>";


$a=strlen($lugar);


echo "</tr>";
//echo "</table>";
echo "<tr>";

echo "<th>Horario</th><th>Lugar</th><th>Servicios Sexuales</th><th>Servicios</th><th>Orientación</th><th>Edad</th>";
echo "</tr>";
echo "<tr>";

echo "<td>".$reg['sche']."</td>";
echo "<td>".$reg['place']."</td>";
echo "<td>".$reg['sexserv']."</td>";
echo "<td>".$reg['serv']."</td>";
echo "<td>".$reg['orient']."</td>";
echo "<td>".$reg['age']."</td>";



echo "</tr>";
//echo "</table>";
echo "<tr>";

echo "<th>País</th><th>Idiomas</th><th>Tarifa 1/2 Hora</th><th>Tarifa 1 Hora</th><th>Tarifa Salidas</th><th>Forma de Pago</th>";
echo "</tr>";
echo "<tr>";
echo "<td>".$reg['country']."</td>";
echo "<td>".$reg['lang']."</td>";
echo "<td>".$reg['fees1']."</td>";
echo "<td>".$reg['fees2']."</td>";
echo "<td>".$reg['fees3']."</td>";
echo "<td>".$reg['payment']."</td>";

echo "</tr>";

echo "<tr>";
echo "<th>Mensaje</th>";
echo "</tr>";
echo "<tr>";
echo "<td>".$reg['message']."</td>";
echo "</tr>";


echo "</table>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


}


echo "Total Registros:".mysql_num_rows($consulta);



?>
</font>
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
