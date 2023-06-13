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
include("menu.php");
?>
<br /><br /><br />
<center>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<FORM ACTION="registrate2.php" method="POST">
<input type=hidden name=todo value=submit-form>
<H5>REGISTRO CHICASVIP</H5><br />
<center><table><tr>
<td><H5>Ingresar Nombre : </H5></td><td><input type="text" name="name" SIZE="40" MAXLENGTH="60"></td>
</tr>
<td><H5>Ingresar E-mail : </H5></td><td><input type="text" name="email" SIZE="40" MAXLENGTH="60" onBlur="chkemail(this);"></td>
</tr>
<tr><td><H5>Ingresar Ciudad : </H5></td><td><select name="city">
<option value="Albacete">Albacete</option>
<option value="Alicante">Alicante</option>
<option value="Almerìa">Almería</option>
<option value="Avila">Avila</option>
<option value="Badajoz">Badajoz</option>
<option value="Barcelona">Barcelona</option>
<option value="Benidorm">Benidorm</option>
<option value="Bilbao">Bilbao</option>
<option value="Burgos">Burgos</option>
<option value="Caceres">Caceres</option>
<option value="Cadiz">Cadiz</option>
<option value="Canarias, Las Palmas">Canarias, Las Palmas</option>
<option value="Castellon">Castellon</option>
<option value="Ceuta">Ceuta</option>
<option value="Ciudad Real">Ciudad Real</option>
<option value="Cordoba">Cordoba</option>
<option value="Cuenca">Cuenca</option>
<option value="Elche">Elche</option>
<option value="Gijòn">Gijòn</option>
<option value="Girona">Girona</option>
<option value="Granada">Granada</option>
<option value="Guadalajara">Guadalajara</option>
<option value="Huelva">Huelva</option>
<option value="Huesca">Huesca</option>
<option value="Ibiza">Ibiza</option>
<option value="Irun">Irun</option>
<option value="Jaen">Jaen</option>
<option value="Jerez de la Frontera">Jerez de la Frontera</option>
<option value="La Coruña">La Coruña</option>
<option value="Leon">Leon</option>
<option value="Lleida">Lleida</option>
<option value="Logroño">Logroño</option>
<option value="Lugo">Lugo</option>
<option value="Madrid">Madrid</option>
<option value="Màlaga">Málaga</option>
<option value="Mallorca">Mallorca</option>
<option value="Marbella">Marbella</option>
<option value="Melilla">Melilla</option>
<option value="Murcia">Murcia</option>
<option value="Orense">Orense</option>
<option value="Ovbiedo">Oviedo</option>
<option value="Palencia">Palencia</option>
<option value="Pamplona">Pamplona</option>
<option value="Pontevedra">Pontevedra</option>
<option value="salamanca">Salamanca</option>
<option value="San Sebastian">San Sebastian</option>
<option value="Santander">Santander</option>
<option value="Santiago de Compostela">Santiago de Compostela</option>
<option value="Segovia">Segovia</option>
<option value="Sevilla">Sevilla</option>
<option value="Soria">Soria</option>
<option value="Tarragona">Tarragona</option>
<option value="Tenerife">Tenerife</option>
<option value="Teruel">Teruel</option>
<option value="Toledo">Toledo</option>
<option value="Valencia">Valencia</option>
<option value="Valladolid">Valladolid</option>
<option value="Vigo">Vigo</option>
<option value="Vitoria">Vitoria</option>
<option value="Zamora">Zamora</option>
<option value="Zaragoza">Zaragoza</option>
</select>
</td></tr>
</table></center>
<br><br>
<input type="submit" name="accion" value="Registrar">
<br>
<br>
</FORM>
</div></center>
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
