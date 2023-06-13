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
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 650px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />
<FORM ACTION="mail2a.php" method="POST">
<input type=hidden name=todo value=submit-form>
<H5>Enviar E-mail a logistica@chicasvip.club</H5><br />
<center><table><tr>
<td><H5>Ingresar Nombre : </H5></td><td><input type="text" name="name" SIZE="79" MAXLENGTH="60"></td>
</tr>
<td><H5>Ingresar E-mail : </H5></td><td><input type="text" name="email" SIZE="79" MAXLENGTH="60" onBlur="chkemail(this);"></td>
</tr>
<tr>
<td><H5>Ingresar Titulo : </H5></td><td><input type="text" name="title" SIZE="79" MAXLENGTH="60"></td>
</tr>
<tr><td><H5>Mensaje:</H5></td><td><textarea rows="15" cols="53" name="message"></textarea><br></td></tr>
</table></center>
<br><br>
<input type="submit" name="accion" value="Enviar E-mail">
<br>
<br>
</FORM>
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
