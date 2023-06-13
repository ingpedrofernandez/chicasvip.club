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
<center>
<center><div style="background-color:#d82b82; width:60%;"><h1>CHICAS VIP DESTACADAS</h1></div> </center>  

<br><br />
<br />
<br>
<br>
 

<div id="scroller" style="width: 900px; height: 350px; margin: 0 auto;">

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
 <center><div style="background-color:#d82b82; width:60%;"><h1>CHICAS VIP DESTACADAS</h1></div> </center>  
  
    
   <br />
<br>
<br>

</center>

<br />
<center>
<div class="container2">
    <div class="galleryItem3">
        <a href="luana2.php"><img src="images/image.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">LUANA</font></font>
		       </div>
 
    <div class="galleryItem3">
        <a href="#"><img src="images/image2.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">ANNA</font></font>
       </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image3.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">YANA</font></font>
        </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image4.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">CAYETANA</font></font>
       </div>
       </div>  

<BR /><BR /><BR /><BR />
<center>
<div class="container2">
    <div class="galleryItem3">
        <a href="luana2.php"><img src="images/image.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">LUANA</font></font>
		       </div>
 
    <div class="galleryItem3">
        <a href="#"><img src="images/image2.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">ANNA</font></font>
       </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image3.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">YANA</font></font>
        </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image4.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">CAYETANA</font></font>
       </div>
       </div>  

<BR /><BR /><BR /><BR />
<center>

<div class="container2">
    <div class="galleryItem3">
        <a href="luana2.php"><img src="images/image.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">LUANA</font></font>
		       </div>
 
    <div class="galleryItem3">
        <a href="#"><img src="images/image2.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">ANNA</font></font>
       </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image3.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">YANA</font></font>
        </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image4.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">CAYETANA</font></font>
       </div>
       </div>  

<BR /><BR /><BR /><BR />
<center>
<div class="container2">
    <div class="galleryItem3">
        <a href="luana2.php"><img src="images/image.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">LUANA</font></font>
		       </div>
 
    <div class="galleryItem3">
        <a href="#"><img src="images/image2.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">ANNA</font></font>
       </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image3.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">YANA</font></font>
        </div>
	
	<div class="galleryItem3">
        <a href="#"><img src="images/image4.jpg" width="270"  height="400" alt=""></a>
		<font size="+2"><font color="#000000">CAYETANA</font></font>
       </div>
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
