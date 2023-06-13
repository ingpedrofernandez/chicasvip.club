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
        top: 0;
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
        setInterval(doScroll, 20);
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
<br /><br /><br />
<center><table width="100">
<tr><td>
<div style="border: 10px ridge #d82b82;background-color:black; width: 950px; text-align:center;  ">
<br><br />
<center><img src="images/chicasvipclub_pink.jpg"  width="200" height="50" align="center"></center><br />

<br>
<br>
<div id="scroller" style="width: 900px; height: 500px; margin: 0 auto;">
    <div class="innerScrollArea">
        <ul>
            <!-- Define photos here -->
            <li><a href=""><img src="images/image.jpg" width="300" height="500" /></a></li>
            <li><a href=""><img src="images/image2.jpg" width="300" height="500" /></a></li>
            <li><a href=""><img src="images/image3.jpg" width="300" height="500" /></a></li>
            <li><a href=""><img src="images/image4.jpg" width="300" height="500" /></a></li>
            <li><a href=""><img src="images/image5.jpg" width="300" height="500" /></a></li>
           
        </ul>
    </div>
</div>
<br /><br />
<center><button id="toggleDirection">CAMBIAR DIRECCION</button></center>

<br>
<br>
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
