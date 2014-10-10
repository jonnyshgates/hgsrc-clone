<?php 
    session_start(); 
    $page ="location:../racketball/benefits";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Racketball Benefits | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Racketball Benefits"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>

            <div id="box-fullwidth">
                <div id="heading-benefits" style="position:relative; float:left; background-color:#2a4971; width:980px; height:40px; text-align:center; line-height:40px; ">
                <a class="arial16white"><b>Benefits</b></a></div>
		        <div id="text-benefits" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:17px; padding:20px;">
                <a class="arial13grey">
                There are numerous benefits of Racketball (along with any form of exercise). It helps to improve fitness, and research has shown that it is one of the highest calorie burning sports. A player can expect to burn anywhere between 375 and 1400 calories for 45 minutes (depending on whether playing a casual or competitive game, as well as weight etc). Like squash it can be played all year around, benefiting from the luxury of being played on indoor courts. In the winter the ball is a lot easier to warm up than a squash ball as well (where the court is cold).<br /><br />
                The lower intensity and general slower pace of the rallies can be a benefit to older players with joint pain, and for this reason it is widely considered easier to learn than squash,  but is often thought to be harder to master.
                </a>
                </div>
            </div>

        <?php include("../includes/footer.php") ?>

    </div>
        
</div>
</body>
</html>