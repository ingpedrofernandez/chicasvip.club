<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChicasVip.Club</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" />
<style type="text/css">
    #scroller {
        position: relative;
    }
    #scroller .innerScrollArea {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        top: -80px;
        bottom: 0;
    }
    #scroller ul {
        padding: 0;
        margin: 0;
        position: relative;
    }
    #scroller li {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: absolute;
    }
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
    $(function(){
        var scroller = $('#scroller div.innerScrollArea');
        var scrollerContent = scroller.children('ul');
        scrollerContent.children().clone().appendTo(scrollerContent);
        var curX = 0;
        scrollerContent.children().each(function(){
            var $this = $(this);
            $this.css('left', curX);
            curX += $this.outerWidth(true);
        });
        var fullW = curX / 2;
        var viewportW = scroller.width();

        // Scrolling speed management
        var controller = {curSpeed:0, fullSpeed:2};
        var $controller = $(controller);
        var tweenToNewSpeed = function(newSpeed, duration)
        {
            if (duration === undefined)
                duration = 600;
            $controller.stop(true).animate({curSpeed:newSpeed}, duration);
        };

        // Pause on hover
        scroller.hover(function(){
            tweenToNewSpeed(0);
        }, function(){
            tweenToNewSpeed(controller.fullSpeed);
        });

        // Scrolling management; start the automatical scrolling
        var doScroll = function()
        {
            var curX = scroller.scrollLeft();
            var newX = curX + controller.curSpeed;
            if (newX > fullW*2 - viewportW)
                newX -= fullW;
           
			else if (newX < 0) // *** NEW LINE!
                newX += fullW; // *** NEW LINE!
            scroller.scrollLeft(newX);
        };
        setInterval(doScroll, 10);
        tweenToNewSpeed(controller.fullSpeed);
		// *** NEW LINES:
        $('#toggleDirection').click(function(){
            tweenToNewSpeed(controller.curSpeed * -1);
        });
    });
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
<br />
<a class="more2" href="index2.php">Regresar</a>
<br>
<br /><br /><br />

<h4>Comunidad de Madrid</h4>
<br>
<br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 915px; height: 415px; text-align:center;  ">
<br><br />
<br />
<br>
<br>
<div id="scroller" style="width: 900px; height: 400px; margin: 0 auto;">

    <div class="innerScrollArea">
    

        <ul>
            <!-- Define photos here -->
            <li><a href="luana.php"><img src="images/image.jpg" width="190" height="400" title="Luana - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad."/></a></li>
            <li><a href=""><img src="images/image2.jpg" width="190" height="400" title="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor."/></a></li>
            <li><a href=""><img src="images/image3.jpg" width="190" height="400" title="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor."/></a></li>
            <li><a href=""><img src="images/image4.jpg" width="190" height="400" title="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna."/></a></li>
            <li><a href=""><img src="images/image5.jpg" width="190" height="400" title="Erika - Una madrileña deliciosa de 23 años, deseando conocerte para pasarlo muy bien."/></a></li>
           
        </ul>
        
    </div>
    </div>
   </div>
   <br />
<br>
<br>
</div>
</td></tr>
</table></center>

<br />
<center>
<table width="80%" bordercolor="#d82b82" border="5">
<th><h5>LUANA</h5></th><th><h5>ANNA</h5></th><th><h5>YANA</h5></th><th><h5>CAYETANA</h5></th>
<TR>
<TD><center><a href="luana.php"><img src="images/image.jpg"   title="Luana - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad." width="225" height="400" align="center" alt="Paz - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad."></a></center></TD>
<TD><center><a href="#"><img src="images/image2.jpg"  title="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor." width="225" height="400" align="center" alt="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image3.jpg"  title="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor." width="225" height="400" align="center" alt="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image4.jpg"  title="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna." width="225" height=400" align="center" alt="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna."></a></center></TD>
</TR>
</TABLE></center>
<BR /><BR /><BR /><BR />
<center>
<table width="80%" bordercolor="#d82b82" border="5">

<th><h5>LUANA</h5></th><th><h5>ANNA</h5></th><th><h5>YANA</h5></th><th><h5>CAYETANA</h5></th>
<TR>
<TD><center><a href="luana.php"><img src="images/image.jpg"   title="Luana - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad." width="225" height="400" align="center" alt="Paz - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad."></a></center></TD>
<TD><center><a href="#"><img src="images/image2.jpg"  title="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor." width="225" height="400" align="center" alt="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image3.jpg"  title="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor." width="225" height="400" align="center" alt="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image4.jpg"  title="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna." width="225" height=400" align="center" alt="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna."></a></center></TD>
</TR>
</TABLE></center>

<BR /><BR /><BR /><BR />
<center>
<table width="80%" bordercolor="#d82b82" border="5">

<th><h5>LUANA</h5></th><th><h5>ANNA</h5></th><th><h5>YANA</h5></th><th><h5>CAYETANA</h5></th>
<TR>
<TD><center><a href="luana.php"><img src="images/image.jpg"   title="Luana - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad." width="225" height="400" align="center" alt="Paz - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad."></a></center></TD>
<TD><center><a href="#"><img src="images/image2.jpg"  title="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor." width="225" height="400" align="center" alt="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image3.jpg"  title="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor." width="225" height="400" align="center" alt="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image4.jpg"  title="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna." width="225" height=400" align="center" alt="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna."></a></center></TD>
</TR>
</TABLE></center>


<BR /><BR /><BR /><BR />
<center>
<table width="80%" bordercolor="#d82b82" border="5">

<th><h5>LUANA</h5></th><th><h5>ANNA</h5></th><th><h5>YANA</h5></th><th><h5>CAYETANA</h5></th>
<TR>
<TD><center><a href="luana.php"><img src="images/image.jpg"   title="Luana - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad." width="225" height="400" align="center" alt="Paz - Me encanta el sexo, pasarlo bien, los hombres y las mujeres. No tengo tabúes. Disfrutaremos de verdad."></a></center></TD>
<TD><center><a href="#"><img src="images/image2.jpg"  title="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor." width="225" height="400" align="center" alt="Anna - Me gusta sentirme húmeda y libre para poder hacer aquello que más me apasiona, el amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image3.jpg"  title="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor." width="225" height="400" align="center" alt="Yana - Me gusta ver comos mis amigos quedan complacidos, disfrutan de mi cuerpo y mis artes del amor."></a></center></TD>
<TD><center><a href="#"> <img src="images/image4.jpg"  title="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna." width="225" height=400" align="center" alt="Cayetana - Soy juguetona, atrevida y siempre dispuesta a tener una noche de sexo sin comparación alguna."></a></center></TD>
</TR>
</TABLE></center><BR /><BR />


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
