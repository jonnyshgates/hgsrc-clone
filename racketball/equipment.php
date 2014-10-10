<?php 
    session_start(); 
    $page ="location:../racketball/equipment";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Racketball Equipment | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Racketball Equipment"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>

            <div id="box-fullwidth">
                <div id="heading-equipment" style="position:relative; float:left; background-color:#2a4971; width:980px; height:40px; text-align:center; line-height:40px; ">
                <a class="arial16white"><b>Equipment</b></a></div>
		        <div id="text-equipment" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:17px; padding:20px;">
                <a class="arial14grey">
                <b>Want to give it a go?</b><br /><br />
                </a>
                <a class="arial13grey">
                For those interested in trying out Racketball, but don’t want to commit to buying the appropriate equipment, HGSRC are able to offer the free loan of Racket and Balls and of course the court! All we ask is that you bring along your own indoor white soled trainers.<br /><br /> 
                For members and non-members a 45 minute go can be arranged with one of our Racketball players contact Stephen (Racketball Captain) at 
                </a>
                <a class="arial13grey hoverWhite" href="mailto:racketball@hgsrc.co.uk">
                racketball@hgsrc.co.uk 
                </a>
                </div>
            </div>

        <?php include("../includes/footer.php") ?>

    </div>
        
</div>
</body>
</html>