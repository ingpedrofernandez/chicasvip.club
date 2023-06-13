<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChivasVip.Club</title>
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
<br><a class="more2" href="index2.php">Regresar</a>
<br /><br /><br>
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<br><br>
<table>
<tr>
<td><h2>Luana</h2></td><td width="900"><img src="images/sex.jpg" width="100" height="70" alt="Luana" /></td>
</tr>
</table>
<br>

<?php 
include("connectdb.php");
$link=ConnectDb();
$clave="w7RW";
$consulta=mysql_query("select * from women where password='$clave'",$link) or die ("Problemas con la consulta");
while ($reg=mysql_fetch_array($consulta))
{
$name=$reg["name"];
$email=$reg["email"];
$city=$reg["city"];
$code=$reg["code"];

$phone=$reg["phone"];
$website=$reg["website"];
$hair=$reg["hair"];
$height=$reg["height"];
$weight=$reg["weight"];
$breast=$reg["breast"];
$zone=$reg["zone"];
$sche=$reg["sche"];
$place=$reg["place"];
$sexserv=$reg["sexserv"];
$serv=$reg["serv"];
$orient=$reg["orient"];
$age=$reg["age"];
$country=$reg["country"];
$lang=$reg["lang"];
$fees1=$reg["fees1"];
$fees2=$reg["fees2"];
$fees3=$reg["fees3"];
$payment=$reg["payment"];
$message=$reg["message"];

echo "<h2><table>";
echo "<tr>";
echo "<td>";
echo "<td>".$reg['message']."</td>";
echo "</tr>";
echo "</table></h2>";

echo "<center><table width=70%>";
echo "<tr>";
echo "<td>";
echo "<h6><table border=1 BORDERCOLOR=#d82b82>";
echo "<th>Informaciòn</th>";
echo "<tr>";
echo "<td>Nombre : ".$reg['name']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>E-mail : ".$reg['email']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Ciudad : ".$reg['city']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Zona : ".$reg['zone']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Telèfono : ".$reg['phone']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Pàgina Web : ".$reg['website']."</td>";
echo "</tr>";
echo "</table>";

echo "</td>";
echo "<td>";

echo "<h6><table border=1 BORDERCOLOR=#d82b82></center>";
echo "<th>Caracterìsticas</th>";
echo "<tr>";
echo "<td>Color de Pelo : ".$reg['hair']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Altura : ".$reg['height']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Peso : ".$reg['weight']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Pecho : ".$reg['breast']."</td>";
echo "</tr>";
echo "</table></h6>";

echo "</td>";
echo "<td>";

echo "<h6><table border=1 BORDERCOLOR=#d82b82></center>";
echo "<th>Tarifas</th>";
echo "<tr>";
echo "<td>".$reg['fees1']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$reg['fees2']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$reg['fees3']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Forma de Pago : ".$reg['payment']."</td>";
echo "</tr>";
echo "</table></h6>";

echo "</td>";
echo "</tr>";
echo "</table></center>";

echo "</br>";
echo "</br>";

echo "<h6><center><table width=60% border=1 BORDERCOLOR=#d82b82></center>";
echo "<th>Servicios</th>";
echo "<tr>";
echo "<td>Horario : ".$reg['sche']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Direcciòn : ".$reg['place']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Servicios Sexuales: ".$reg['sexserv']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Servicios VIP : ".$reg['serv']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Orientaciòn : ".$reg['orient']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Edad : ".$reg['age']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Paìs : ".$reg['country']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Idiomas : ".$reg['lang']."</td>";
echo "</tr>";
echo "</table></center></h6>";


mysql_close($link);
 }
?>

<br><br>
<div class="container4">
    <div class="galleryItem2">
        <a href="#"><img src="images/imagel" width="850"  height="700" alt=""></a>
       </div>
 
    <div class="galleryItem2">
        <a href="#"><img src="images/image2l" width="850" height="700"  alt=""></a>
       </div>
	   </div>
		<div class="container4">
    <div class="galleryItem2">
        <a href="#"><img src="images/image3l" width="850"  height="700" alt=""></a>
       </div>
 
    <div class="galleryItem2">
        <a href="#"><img src="images/image4l" width="850" height="700"  alt=""></a>
       </div>
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
