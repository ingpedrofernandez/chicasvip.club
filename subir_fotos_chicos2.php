<?php
session_start();
$usuario=$_SESSION['usuario'];
if ($usuario == "") {
header('location:index.php');
exit();
}
?>
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
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<br /><br />
<font color="#d82b82"><h3>

<?php
$code=$_POST['code'];
$clave=$_POST["clave"];
//$code=$_GET['code'];
//echo "<center><h2>$code</h2></center>";
echo "<center><h2>Subir Fotos</h2></center>";
?>
<br>

<?php
$dirPath = "../chicasvip.club/uploads1/$code";

if (!file_exists($dirPath)) {
    mkdir($dirPath);
    echo "Subida: " . $_FILES["file"]["name"] . "<br>";
    echo "Tipo: " . $_FILES["file"]["type"] . "<br>";
    echo "Tamaño: " . ($_FILES["file"]["size"] / 50000) . " kB<br>";
    echo "Archivo temporal: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("../chicasvip.club/uploads1/$code/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " ya existe. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../chicasvip.club/uploads1/$code/" . $_FILES["file"]["name"]);
      echo "Guardado en : " . "../chicasvip.club/uploads1/$code/" . $_FILES["file"]["name"];
      }
   
  } else {
 echo "Subida: " . $_FILES["file"]["name"] . "<br>";
    echo "Tipo: " . $_FILES["file"]["type"] . "<br>";
    echo "Tamaño: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Archivo temporal: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("../chicasvip.club/uploads1/$code/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " ya existe. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../chicasvip.club/uploads1/$code/" . $_FILES["file"]["name"]);
      echo "Guardado en : " . "../chicasvip.club/uploads1/$code/" . $_FILES["file"]["name"];
      }
	   }
	
	
?>
<br><br><br>
<center><h2>Foto Subida</h2></center>
<br /><br />
<FORM><INPUT TYPE="button" VALUE="SUBIR OTRA FOTO" onClick="history.go(-1);"> </FORM>
</h3></font>
<br /><br />
<FORM ACTION="modulofin.php" method="POST">
<INPUT TYPE="submit" NAME="accion" VALUE="SALIR DEL SISTEMA"><br><br>

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
