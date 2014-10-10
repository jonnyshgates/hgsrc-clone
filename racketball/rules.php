<?php 
    session_start(); 
    $page ="location:../racketball/rules";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Racketball Rules | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Racketball Rules"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>

            <div id="box-fullwidth">
                <div id="heading-rules" style="position:relative; float:left; background-color:#2a4971; width:980px; height:40px; text-align:center; line-height:40px; ">
                <a class="arial16white"><b>Rules</b></a></div>
		        <div id="text-rules" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:17px; padding:20px;">
                <a class="arial14grey">
                <b>Scoring</b><br /><br />
                </a>
                <a class="arial13grey">
                Best of 5 games, with each point scoring up to 11. If players reach 10-10, then the game continues until one player wins by 2 clear points.<br /><br />
                </a>
                <a class="arial14grey">
                <b>How to win points</b><br /><br />
                </a>
                <a class="arial13grey">
                Player fails to make good serve, or a good return<br /><br />
                </a>
                <a class="arial14grey">
                <b>Service</b><br /><br />
                </a>
                <a class="arial13grey">
                Awarded to the player winning the previous rally<br /><br />
                At start of each game, or hand, the server has the choice from which side to serve, and will serve alternate sides throughout that hand.<br /><br />
                </a>
                <a class="arial14grey">
                <b>Miscellaneous items (Ambiguity on some rules)</b><br /><br />
                </a>
                <a class="arial13grey">
                The Ball: The guidelines are to start on the Blue (bouncier) ball, but move to the black (slower) ball when you feel you are used to the game.<br /><br />
                Let’s and Strokes: Officially there are no strokes, however if your opponent has made no effort to move clear a stroke may be awarded.<br /><br />
                In both cases ESR suggest players should agree the rules prior to commencing play.<br /><br />
                </a>
                </div>
        </div>

        <?php include("../includes/footer.php") ?>

    </div>
        
</div>
</body>
</html>