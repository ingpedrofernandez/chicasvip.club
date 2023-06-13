<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$website=$_POST["website"];
$hair=$_POST["hair"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$breast=$_POST["breast"];
$city=$_POST["city"];
$zone=$_POST["zone"];
$sche_w=$_POST["sche_w"];
$sche_w1=$_POST["sche_w1"];
$desde1=$_POST["desde1"];
$hasta1=$_POST["hasta1"];
$sche_we2=$_POST["sche_we2"];
$sche_we3=$_POST["sche_we3"];
$sche_we4=$_POST["sche_we4"];
$desde2=$_POST["desde2"];
$hasta2=$_POST["hasta2"];
$desde3=$_POST["desde3"];
$hasta3=$_POST["hasta3"];
$lugar1=$_POST["lugar1"];
$lugar2=$_POST["lugar2"];
$lugar3=$_POST["lugar3"];
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
$cenas=$_POST["cenas"];
$celebs=$_POST["celebs"];
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
$fees1=$_POST["fees1"];
$fees2=$_POST["fees2"];
$fees3=$_POST["fees3"];
$payment=$_POST["payment"];
$message=$_POST["message"];
$acepto=$_POST["acepto"];
$acepto2=$_POST["acepto2"];


echo $name;
?>
<br />
<?php
echo $email;
?>
<br />
<?php

echo $phone;
?>
<br />
<?php
echo $website;
?>
<br />
<?php

echo $hair;
?>
<br />
<?php
echo $height;
?>
<br />
<?php

echo $weight;
?>
<br />
<?php
echo $breast;
?>
<br />
<?php

echo $city;
?>
<br />
<?php
echo $zone;
?>
<br />
<?php
$blank=" ";
$de="de";
$a="a";
$b="Horario Entre Semana:";
$c="Horario Fin de Semana:";
$d=" ";
if (isset($_POST['sche_w'])) {
$hora=$b.$blank.$sche_w;
}
echo $hora;
?>
<br />
<?php
if (isset($_POST['sche_w1'])) {
$horas=$sche_w1.$blank.$de.$blank.$desde1.$blank.$a.$blank.$hasta1;
}
echo $horas;
?>
<br />
<?php

if (isset($_POST['sche_we2'])) {
$hora1=$c.$blank.$sche_we2;
}
echo $hora1;
?>
<br />
<?php
if (isset($_POST['sche_we3'])) {
$horas1=$sche_we3.$blank.$de.$blank.$desde2.$blank.$a.$blank.$hasta2;
}
echo $horas1;
?>
<br />
<?php

if (isset($_POST['sche_we4'])) {
$horas2=$sche_we4.$blank.$de.$blank.$desde3.$blank.$a.$blank.$hasta3;
}
echo $horas2;
?>
<br />
<?php

$lugar=$lugar1.$blank.$lugar2.$blank.$lugar3;
echo $lugar;
?>
<br />
<?php
$sexserv=$frana.$d.$anal.$d.lesbico.$d.besos.$d.$duplex.$d.$masajes.$d.$strip.$d.$atencion.$d.$despe.$d.$sado.$d.$juegos.$d.$cons;
echo $sexserv;
?>
<br />
<?php

$serv=$cenas.$d.$events.$d.$celebs;
echo $serv;
?>
<br />
<?php
echo $orient;
?>
<br />
<?php
echo $age;
?>
<br />
<?php
echo $country;
?>
<br />
<?php
$lang=$spanish.$d.$catalan.$d.$english.$d.$french.$d.$german.$d.$italian.$d.$portuguese.$d.$russian;
echo $lang;
?>
<br />
<?php
$mh="1/2 Hora";
$h="1 Hora";
$s="Salidas";
$fees=$mh.$d.$fees1.$d.$h.$d.$fees2.$d.$s.$d.$fees3;
echo $fees;
?>
<br />
<?php
$feesm=$mh.$d.$fees1;
echo $feesm;
?>
<br />
<?php
$feesh=$h.$d.$fees2;
echo $feesh;
?>
<br />
<?php
$feess=$s.$d.$fees3;
echo $feess;
?>
<br />
<?php
echo $payment;
?>
<br />
<?php

echo $message;
?>
<br />
<?php

?>

</body>
</html>
