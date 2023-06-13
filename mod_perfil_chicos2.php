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
$clave=$_POST["clave"];

include("connectdb.php");
$link=ConnectDb();

$consulta=mysql_query("select * from men where password='$clave'",$link) or die ("Problemas con la consulta");

if ($reg=mysql_fetch_array($consulta))
{


$consulta=mysql_query("select * from men where password='$clave'",$link) or die ("Problemas con la consulta");
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
}
session_start();
$_SESSION['usuario']=$clave; 

$a=$_SESSION['usuario'];
date_default_timezone_set("America/Caracas");
$date = date('Y-m-d H:i:s');
mysql_query("insert into users1 (user,date_time) values ('$a','$date')",$link) or die ("Problemas con la grabacion");
mysql_query("insert into users2 (user,date_time) values ('$a','$date')",$link) or die ("Problemas con la grabacion");

//$code="s0001";
?>
<br /><br /><br />

<CENTER><H2>FORMULARIO PARA CHICOSVIP INDEPENDIENTES</H2></CENTER>
<?php 
echo "<h4><font color=#EEE8AA>usuario = {$_SESSION['usuario']}<br></font></h4>";
?>
<BR><BR>
<div id="primary2">
<center><div style="border: 10px ridge #d82b82;background-color:black; width: 80%; text-align:left;  ">
<FORM ACTION="mod_perfil_chicos3.php" method="POST">

<h3>Datos de Contacto</h3>
<center><table>
<tr>
<td><H5>Clave : </H5></td><td><?php echo "<h5>$clave</h5>" ?></td>
</tr>
<tr>
<td><H5>Nombre : </H5></td><td><?php echo "<h5>$name</h5>" ?></td>
</tr>
<tr>
<td><H5>Email : </H5></td><td><INPUT TYPE="text" NAME="email" Value="<?php echo $email ?>" SIZE="40" MAXLENGTH="60"></td>
</tr>

<tr>
<td><H5>Telefono : </H5></td><td><input type="text" name="phone" Value="<?php echo $phone ?>" SIZE="40" MAXLENGTH="60"></td>
</tr>
<td><H5>Website : </H5></td><td><input type="text" name="website" Value="<?php echo $website ?>" SIZE="40" MAXLENGTH="60" ></td>
</tr>
</table></center>
<br><br>

<h3>Apariencia</h3>
<center><table>
<tr><td><H5>Antiguo Color de Pelo : </H5></td><td><?php echo "<h5>$hair</h5>" ?></td>
</tr>
<tr><td><H5>Color de Pelo : </H5></td><td>
<select name="hair">
<option value="Rubio">Rubio.</option>
<option value="Pelirrojo">Pelirrojo</option>
<option value="Castaño">Castaño</option>
<option value="Negro">Negro</option></select></td>
</tr>
<td><H5>Altura : </H5></td><td><?php echo "<h5>$height</h5>" ?></td>
</tr>
<tr><td><H5>Antiguo Peso : </H5></td><td><?php echo "<h5>$weight</h5>" ?></td>
</tr>
<td><H5>Peso : </H5></td><td><select name="weight">
<option value="45 kgs">45 kgs.</option>
<option value="46 kgs">46 kgs.</option>
<option value="47 kgs">47 kgs.</option>
<option value="48 kgs">48 kgs.</option>
<option value="49 kgs">49 kgs.</option>
<option value="50 kgs">50 kgs.</option>
<option value="51 kgs">51 kgs.</option>
<option value="52 kgs">52 kgs.</option>
<option value="53 kgs">53 kgs.</option>
<option value="54 kgs">54 kgs.</option>
<option value="55 kgs">55 kgs.</option>
<option value="56 kgs">56 kgs.</option>
<option value="57 kgs">57 kgs.</option>
<option value="58 kgs">58 kgs.</option>
<option value="59 kgs">59 kgs.</option>
<option value="60 kgs">60 kgs.</option>
<option value="61 kgs">61 kgs.</option>
<option value="62 kgs">62 kgs.</option>
<option value="63 kgs">63 kgs.</option>
<option value="64 kgs">64 kgs.</option>
<option value="65 kgs">65 kgs.</option>
<option value="66 kgs">66 kgs.</option>
<option value="67 kgs">67 kgs.</option>
<option value="68 kgs">68 kgs.</option>
<option value="69 kgs">69 kgs.</option>
<option value="70 kgs">70 kgs.</option>
<option value="71 kgs">71 kgs.</option>
<option value="72 kgs">72 kgs.</option>
<option value="73 kgs">73 kgs.</option>
<option value="74 kgs">74 kgs.</option>
<option value="75 kgs">75 kgs.</option>
<option value="76 kgs">76 kgs.</option>
<option value="77 kgs">77 kgs.</option>
<option value="78 kgs">78 kgs.</option>
<option value="79 kgs">79 kgs.</option>
<option value="80 kgs">80 kgs.</option>
<option value="81 kgs">81 kgs.</option>
<option value="82 kgs">82 kgs.</option>
<option value="83 kgs">83 kgs.</option>
<option value="84 kgs">84 kgs.</option>
<option value="85 kgs">85 kgs.</option>
<option value="86 kgs">86 kgs.</option>
<option value="87 kgs">87 kgs.</option>
<option value="88 kgs">88 kgs.</option>
<option value="89 kgs">89 kgs.</option>
<option value="90 kgs">90 kgs.</option>
<option value="91 kgs">91 kgs.</option>
<option value="92 kgs">92 kgs.</option>
<option value="93 kgs">93 kgs.</option>
<option value="94 kgs">94 kgs.</option>
<option value="95 kgs">95 kgs.</option>
<option value="96 kgs">96 kgs.</option>
<option value="97 kgs">97 kgs.</option>
<option value="98 kgs">98 kgs.</option>
<option value="99 kgs">99 kgs.</option>
<option value="100 kgs">100 kgs.</option>
</select>
</td>
</tr>
</table></center>
<br><br>

<h3>Servicios</h3>
<center><table><tr>
<td><H5>Ciudad : </H5></td><td><input type="text" name="city" Value="<?php echo $city ?>" SIZE="40" MAXLENGTH="60"></td>
</tr>
<tr><td><H5>Zona : </H5></td><td><input type="text" name="zone" Value="<?php echo $zone ?>" SIZE="40" MAXLENGTH="60" ></td>
</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr></table>
<br>

<H5>Horario Entre Semana: </H5>
<table>
<tr>
<td width="200"><INPUT TYPE="checkbox" NAME="sche_w" value="Las 24 horas"><h5>Las 24 horas</h5></td>
<td width="200"><INPUT TYPE="checkbox" NAME="sche_w1" value="Lunes a Viernes"><h5>Lunes a Viernes</h5></td></tr>
<tr><td width="200"></td>
<td width="200"><h5>Desde las</h5>
<select name="desde1">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
<br><br>
<h5>Hasta las</h5>
<select name="hasta1">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
</td></tr></table>
<br /><br />


<H5>Horario Fin de Semana: </H5>
<table>
<tr><td width="200"><INPUT TYPE="checkbox" NAME="sche_we2" value="Las 24 horas"><h5>Las 24 horas</h5></td></tr>
<tr>
<td width="200"><INPUT TYPE="checkbox" NAME="sche_we3" value="Sabado"><h5>Sabado</h5></td>
<td width="200"><INPUT TYPE="checkbox" NAME="sche_we4" value="Domingo"><h5>Domingo</h5></td></tr>
<tr><td width="200">

<h5>Desde las</h5>
<select name="desde2">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
<br /><br />
<h5>Hasta las</h5><select name="hasta2">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
</td>
<td width="200"><h5>Desde las</h5>
<select name="desde3">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>

<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
<br /><br />
<h5>Hasta las</h5><select name="hasta3">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
</td></tr></table>
<br /><br />



<H5>Lugar : </H5><br>
<table>
<tr>
<td width="150"><INPUT TYPE="checkbox" NAME="lugar1" value="Apartamento"><h5>Apartamento</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="lugar2" value="Hotel"><h5>Hotel</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="lugar3" value="Direcciòn del Cliente"><h5>Direcciòn del Cliente</h5></td>
</tr></table><br><br>


<H5>Servicios Sexuales : </H5>
<br>
<table>
<tr>
<td width="150"><INPUT TYPE="checkbox" NAME="frana" value="Frances Natural"><h5>Frances Natural</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="anal" value="Anal"><h5>Anal</h5></td></tr>
<tr><td width="150"><INPUT TYPE="checkbox" NAME="besos" value="Besos en la boca"><h5>Besos en la boca</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="duplex" value="duplex"><h5>Duplex</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="masajes" value="Masajes Eroticos"><h5>Masajes Eroticos</h5></td></tr>
<tr><td width="150"><INPUT TYPE="checkbox" NAME="strip" value="Stripease"><h5>Stripease</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="atencion" value="Atencion a Parejas"><h5>Atencion a Parejas</h5></td></tr>
<tr><td width="150"><INPUT TYPE="checkbox" NAME="sado" value="Sado"><h5>Sado</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="juegos" value="Juegos Eroticos"><h5>Juegos Eroticos</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="cons" value="Consultar"><h5>Consultar</h5></td>
</tr></table>
<br><br>



<H5>Servicios de Acompañante : </H5>
<table>
<tr>
<td width="150"><INPUT TYPE="checkbox" NAME="cenas" value="Cenas"><h5>Cenas</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="events" value="Eventos"><h5>Eventos</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="celebs" value="Celebraciones"><h5>Celebraciones</h5></td></tr>
</table>


<br><br>


</DIV></center>
    </div>
    
    
    <div id="secondary2">
	<center><div style="border: 10px ridge #d82b82;background-color:black; width: 80%; text-align:left;  ">
<h3>Datos Generales</h3>
<center><table><tr>
<td><H5>Orientacion : </H5></td><td>
<select name="orient">
<option value="Homosexual">Homosexual</option>
<option value="Bisexual">Bisexual</option>
</select>
</td>
</tr>
<tr><td><H5>Antigua Edad : </H5></td><td><?php echo "<h5>$age</h5>" ?></td>
</tr>
<tr><td><H5>Edad : </H5></td><td>
<select name="age">
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
</select>  
</td>
</tr>
<tr><td><H5>Pais de Origen : </H5></td><td>
<select name="country">
<option value="Africa">Africa</option>
<option value="Argentina">Argentina</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Belgica">Belgica</option>
<option value="Brasil">Brasil</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Canada">Canada</option>
<option value="Caribe">Caribe</option>
<option value="America Central">America Central</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croacia">Croacia</option>
<option value="Republica Checa">Republica Checa</option>
<option value="Dinamarca">Dinamarca</option>
<option value="Republica Dominicana">Republica Dominicana</option>
<option value="Estonia">Estonia</option>
<option value="Finlandia">Finlandia</option>
<option value="Francia">Francia</option>
<option value="Alemania">Alemania</option>
<option value="Grecia">Grecia</option>
<option value="Guatemala">Guatemala</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungria">Hungria</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Irlanda">Irlanda</option>
<option value="Israel">Israel</option>
<option value="Italia">Italia</option>
<option value="Japon">Japon</option>
<option value="Korea">Korea</option>
<option value="Letonia">Letonia</option>
<option value="Lituania">Lituania</option>
<option value="Malasia">Malasia</option>
<option value="Mejico">Mejico</option>
<option value="Medio Oriente">Medio Oriente</option>
<option value="Marruecos">Marruecos</option>
<option value="Paises Bajos">Paises Bajos</option>
<option value="Nueva Zelanda">Nueva Zelanda</option>
<option value="Noruega">Noruega</option>
<option value="Panama">Panama</option>
<option value="Peru">Peru</option>
<option value="Filipinas">Filipinas</option>
<option value="Polonia">Polonia</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Rumania">Rumania</option>
<option value="Rusia">Rusia</option>
<option value="Singapur">Singapur</option>
<option value="Eslovaquia">Eslovaquia</option>
<option value="Eslovenia">Eslovenia</option>
<option value="Sur Africa">Sur Africa</option>
<option value="España">España</option>
<option value="Suecia">Suecia</option>
<option value="Suiza">Suiza</option>
<option value="Taiwan">Taiwan</option>
<option value="Tailandia">Tailandia</option>
<option value="Turquia">Turquia</option>
<option value="Ucrania">Ucrania</option>
<option value="Reino Unido">Reino Unido</option>
<option value="Estados Unidos">Estados Unidos</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
</select>
</td>
</tr>
<tr><td><H5>Idiomas : </H5></td><td></td></tr>
<tr><td width="150"><INPUT TYPE="checkbox" NAME="spanish" value="Español"><h5>Español</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="catalan" value="Catalan"><h5>Catalan</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="english" value="Ingles"><h5>Ingles</h5></td>
</tr>
<tr><td width="150"><INPUT TYPE="checkbox" NAME="french" value="Frances"><h5>Frances</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="german" value="Aleman"><h5>Aleman</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="italian" value="Italiano"><h5>Italiano</h5></td>
</tr>
<tr><td width="150"><INPUT TYPE="checkbox" NAME="portuguese" value="Portugues"><h5>Portugues</h5></td>
<td width="150"><INPUT TYPE="checkbox" NAME="russian" value="Ruso"><h5>Ruso</h5></td>
</tr>

</table></center>
<br><br>

<h3>Tarifas</h3>
<center><table>
<tr><td><H5>Tarifa 1/2 Hora : </H5></td><td><input type="text" name="fees1" SIZE="40" MAXLENGTH="60"></td>
</tr>
<tr><td><H5>Tarifa 1 Hora : </H5></td><td><input type="text" name="fees2" SIZE="40" MAXLENGTH="60"></td>
</tr>
<tr><td><H5>Tarifa Salidas : </H5></td><td><input type="text" name="fees3" SIZE="40" MAXLENGTH="60"></td>
</tr>

<td><H5>Forma de Pago : </H5></td><td><input type="text" name="payment" SIZE="40" MAXLENGTH="60" ></td>
</tr>
</table></center>
<br><br>

<h3>Descripcion</h3>
<br>
<center><textarea rows="12" cols="45" name="message"></textarea></center>
<br><br>

<INPUT TYPE="checkbox" NAME="acepto" value="Acepto"><h5>Entiendo y acepto vuestra Política de Privacidad y vuestra Nota Legal, dándome por informada de todo lo que disponen. Afirmo que todos los datos que os he facilitado hacen referencia a mi persona y que soy yo la que aparece en las fotos. Os cedo los derechos de los mismos para el diseño y la publicación de mi anuncio en la forma que consideréis más adecuada y su posible difusión en otras webs afines. En el caso de facilitar datos o fotos falsos, sé que mi anuncio será desactivado de forma inmediata y sin preaviso, renunciando a cualquier devolución del importe pagado, en concepto de gastos de tramitación de baja.
</h5>
<br><br>


<h5>Este perfil es propiedad del anunciante, en todo momento podrá retirar una experiencia publicada, ChicasVip.Club controlará que no sean auto experiencias.</h5><br /><br />
<input type="hidden" name="clave" value="<?php echo $clave ?>">
<input type="hidden" name="code" value="<?php echo $code ?>">
<input type="hidden" name="height" value="<?php echo $height ?>">
<INPUT TYPE="submit" NAME="accion" VALUE="Registrar"><br><br>

</DIV></center>

	</div>





<?php
}
else
{
?>
<br>
<br>
<br>
<br>

<center><div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br /><br />

<?php
echo "<center><h2>Clave No Existe o ya sus datos estan anunciados.Ir al menu <br><br>MODIFICAR para modificar datos.</h2></center>";
mysql_close($link);

}
?>
<br /><br />
<br><FORM><INPUT TYPE="button" VALUE="Atras" onClick="history.go(-1);"> </FORM><br />
<?php 


?>

</DIV></center>

	</div>
    
    <div id="footer">
    
    </div>
	
</div>



</body>
</html>
<?php
ob_end_flush(); 
?>




