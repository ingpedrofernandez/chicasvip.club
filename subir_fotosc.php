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
<FORM ACTION="subir_fotos_trans.php" method="POST">
<input type=hidden name=todo value=submit-form>
<H5>SUBIR FOTOS TRAVESTISVIP</H5><br />
<H5>Ingresar Clave : </H5>
<INPUT TYPE="password" NAME="clave"   Value="<?php echo $clave ?>" SIZE="20" MAXLENGTH="20">
<br>
<br>

<br>
<br>
<input type="submit" name="accion" value="Ingresar">
<br>
<br>
</FORM>
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
