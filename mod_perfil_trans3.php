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
<?php
include("connectdb.php");
$link=ConnectDb();

$clave=$_POST["clave"];
$code=$_POST["code"];
$phone=$_POST["phone"];
$website=$_POST["website"];
$hair=$_POST["hair"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$breast=$_POST["breast"];
$zone=$_POST["zone"];
$sche_w=$_POST["sche_w"];
$sche_w1=$_POST["sche_w1"];
$desde1=$_POST["desde1"];
$hasta1=$_POST["hasta1"];
$blank=" ";
$de="de";
$a="a";
$b="Horario Entre Semana:";
$c="Horario Fin de Semana:";
$d=" ";
if (isset($_POST['sche_w'])) {
$hora=$b.$blank.$sche_w;
}
if (isset($_POST['sche_w1'])) {
$horas=$sche_w1.$blank.$de.$blank.$desde1.$blank.$a.$blank.$hasta1;
}

$sche_we2=$_POST["sche_we2"];
$sche_we3=$_POST["sche_we3"];
$sche_we4=$_POST["sche_we4"];
$desde2=$_POST["desde2"];
$hasta2=$_POST["hasta2"];
$desde3=$_POST["desde3"];
$hasta3=$_POST["hasta3"];
if (isset($_POST['sche_we2'])) {
$hora1=$c.$blank.$sche_we2;
}
if (isset($_POST['sche_we3'])) {
$horas1=$sche_we3.$blank.$de.$blank.$desde2.$blank.$a.$blank.$hasta2;
}
if (isset($_POST['sche_we4'])) {
$horas2=$sche_we4.$blank.$de.$blank.$desde3.$blank.$a.$blank.$hasta3;
}
$horast=$hora.$d.$horas.$d.$hora1.$d.$horas1.$d.$horas2;

$lugar1=$_POST["lugar1"];
$lugar2=$_POST["lugar2"];
$lugar3=$_POST["lugar3"];
$lugar=$lugar1.$blank.$lugar2.$blank.$lugar3;

$frana=$_POST["frana"];
$anal=$_POST["anal"];
$lesbico=$_POST["lesbico"];
$besos=$_POST["besos"];
$duplex=$_POST["duplex"];
$masajes=$_POST["masajes"];
$strip=$_POST["strip"];
$atencion=$_POST["atencion"];
$despe=$_POST["despe"];
$sado=$_POST["sado"];
$juegos=$_POST["juegos"];
$cons=$_POST["cons"];
$sexserv=$frana.$d.$anal.$d.lesbico.$d.besos.$d.$duplex.$d.$masajes.$d.$strip.$d.$atencion.$d.$despe.$d.$sado.$d.$juegos.$d.$cons;

$cenas=$_POST["cenas"];
$events=$_POST["events"];
$celebs=$_POST["celebs"];
$serv=$cenas.$d.$events.$d.$celebs;

$orient=$_POST["orient"];
$age=$_POST["age"];

$country=$_POST["country"];
$spanish=$_POST["spanish"];
$catalan=$_POST["catalan"];
$english=$_POST["english"];
$french=$_POST["french"];
$german=$_POST["german"];
$italian=$_POST["italian"];
$portuguese=$_POST["portuguese"];
$russian=$_POST["russian"];
$lang=$spanish.$d.$catalan.$d.$english.$d.$french.$d.$german.$d.$italian.$d.$portuguese.$d.$russian;

$fees1=$_POST["fees1"];
$fees2=$_POST["fees2"];
$fees3=$_POST["fees3"];
$mh="1/2 Hora";
$h="1 Hora";
$s="Salidas";
$feesm=$mh.$d.$fees1;
$feesh=$h.$d.$fees2;
$feess=$s.$d.$fees3;

$payment=$_POST["payment"];
$message=$_POST["message"];
$comp="si";
$acepto=$_POST["acepto"];
if (!isset($_POST['acepto'])) {
echo "<h5>TIENES QUE ACEPTAR NUESTRA POLITICA DE PRIVACIDAD Y NUESTRA NOTA LEGAL.</H5>";

?>
<br><br><FORM><INPUT TYPE="button" VALUE="Atras" onClick="history.go(-1);"> </FORM>
<?php 
exit();
}
//mysql_query("insert into women (phone,website,hair,height,weight,breast,zone,sche_w,sche_we,place,sexserv,serv,orient,age,country,lang,fees1,fees2,fees3,payment,message) values ('$phone','$website','$hair','$height','$weight','$breast','$zone','$horast','$lugar','$sexserv','$serv','$orient','$age','$lang','$feesm','$feesh','$feess','$payment','$message')",$link) or die ("Problemas con la grabacion");

mysql_query("UPDATE trans SET email='$email',city='$city', phone='$phone',website='$website',hair='$hair',height='$height',weight='$weight',breast='$breast',zone='$zone',sche='$horast',place='$lugar',sexserv='$sexserv',serv='$serv',orient='$orient',age='$age',country='$country',lang='$lang',fees1='$feesm',fees2='$feesh',fees3='$feess',payment='$payment',message='$message',complete='$comp' where code='$code'",$link) or die ("Problemas con la modificacion");



echo "<h5>Sus datos han sido modificados en nuestra Base de Datos.</h5>";
?>

<br /><br />
<FORM ACTION="modulofin.php" method="POST">
<INPUT TYPE="submit" NAME="accion" VALUE="SALIR DEL SISTEMA">
</FORM>
<br><br>

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
