<?php 
    session_start(); 
    $page ="location:../index";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="stylesheet/hgsrc.css"/>
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="image/favicon.ico"/>
    <script type="text/javascript" src="script/tinyfader.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Keywords" content="Holmer Green, squash, racketball, squash & racketball, holmer green squash, holmer green squash club, holmer green sports club, club, racquetball, racquet, racket, rackets, ball, hgsrc, hgsa, holmer green sports association, sports pavillion, watchet lane, bucks, buckinghamshire, HP15 6UF, coaching, tournaments, leagues, value, high wycombe squash, beaconsfield squash, high wycombe, beaconsfield"/>
    <meta name="Description" content="Welcome to Holmer Green Squash & Racketball Club, situated near High Wycombe off Watchet Lane, Holmer Green, Bucks, HP15 6UF. Offering exceptional value over 3 courts."/>
   
	

<!--  CHRISTMAS LIGHTS & SNOW

<script src="snowstorm.js"></script>

<link rel="stylesheet" media="screen" href="stylesheet/christmaslights.css" />

<script type="text/javascript" src="./soundmanager2-nodebug-jsmin.js"></script>

<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.6.0/build/yahoo-dom-event/yahoo-dom-event.js&2.6.0/build/animation/animation-min.js"></script>

<script type="text/javascript" src="christmaslights.js"></script>

<script type="text/javascript">
var urlBase = './';
</script>

CHRISTMAS LIGHTS & SNOW -->
	

</head>
<body>
<!--
<div id="lights">
   Christmas lights go here 
</div>
-->

<div id="container">
    <div id="main">
        <?php include("includes/header.php") ?>
        
            <div id="banner_container" style="position:relative; float:left; width:1020px; height:276px; margin:0px; border-bottom:1px solid #e3e3e3;">
	            
		            <div id="slideshow">
			            <ul id="slides">
                            <li><img src="image/slides/squash2.png" width="1020" height="276" alt="" /></li>
				            <li><a href="download/racketball.pdf" target="blank"><img src="image/slides/racketball.png" width="1020" height="276" alt="" /></a></li>
							<li><a href="http://www.thebighit.net/" target="blank"><img src="image/slides/esr_big_hit.png" width="1020" height="276" alt="" /></a></li>
			            </ul>
                        <div style="position:absolute; right:12px; bottom:5px; z-index:999;">
                            <ul id="pagination" class="pagination">
		                        <li onclick="slideshow.pos(0)">1</li>
		                        <li onclick="slideshow.pos(1)">2</li>
								<li onclick="slideshow.pos(2)">3</li>
	                        </ul>
                        </div>
		            </div>
                <script type="text/javascript">
                    var slideshow = new TINY.fader.fade('slideshow', 
                    { id: 'slides', auto: 5, resume: true, navid: 'pagination', activeclass: 'current', visible: true, position: 0 });
                </script>
            </div>

            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:100%; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Welcome</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:16px; padding:20px;">
                <a class="arial12grey">
                <!--
                Holmer Green Squash & Racketball Club is part of Holmer Green Sports Association. 
                Situated near High Wycombe off Watchet Lane, Holmer Green, Buckinghamshire, HP15 6UF. 
                Offering exceptional value over three courts.
                -->
                </a>
                </div>
            </div>

            <?php include("includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>