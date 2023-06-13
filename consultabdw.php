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
session_start();
echo "<h4><font color=#EEE8AA>usuario = {$_SESSION['usuario']}<br></font></h4>";
?>

<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 1000px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />

<br>



<?php
echo "<center><h2>Consulta de CHICASVIP Anunciadas</h2></center>";
// database connection info
//$conn = mysql_connect('localhost','root','morochos') or trigger_error("SQL", E_USER_ERROR);
//$db = mysql_select_db('dbmodulo',$conn) or trigger_error("SQL", E_USER_ERROR);
include("connectdb.php");
$link=ConnectDb();


// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM women";
$result = mysql_query($sql, $link) or trigger_error("SQL", E_USER_ERROR);
$r = mysql_fetch_row($result);
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 1;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
//$sql = "SELECT id, number FROM numbers LIMIT $offset, $rowsperpage";
//$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

// while there are rows to be fetched...
//while ($list = mysql_fetch_assoc($result)) {
   // echo data
  // echo $list['id'] . " : " . $list['number'] . "<br />";
//} // end while
$consulta=mysql_query("select * from women LIMIT $offset, $rowsperpage",$link) or die ("Problemas con la consulta");
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
}
echo "Total Registros:".mysql_num_rows($consulta);


/******  build the pagination links ******/
// range of num links to show
$range = 15;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " [<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
} // end if
/****** end build pagination links ******/

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
