<?php
ob_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
unset($_SESSION );
$_SESSION['usuario'] = "";
session_destroy();
header ("Location: index.php"); 
ob_end_flush(); 
?>
</body>
</html>
<?php
ob_end_flush(); 
?>