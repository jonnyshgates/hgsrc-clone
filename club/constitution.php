<?php 
    session_start(); 
    $page ="location:../club/committee";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Committee | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Committee"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="heading-fullwidth"><a class="arial16white"><b>HGSRC Committee</b></a></div>
		        <?php
                if($_SESSION['loggedin'] == "true")
                {
                    echo('

                    <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:30px; padding:20px 0px 20px 20px;">
                    <div style=" border-bottom:1px solid #666666;"></div>
                    <div style=" border-bottom:1px solid #666666; padding-left:20px;">
                    <a class="arial14grey hoverHG2" href="../download/HGSRC_Annual_Accounts-Ye%2030Sept2011viaMikeHartley_Oct2011.jpg" target="_blank"><b>Accounts Year End 30/09/2011</b></a>
                    </div>
                    <div style=" border-bottom:1px solid #666666; padding-left:20px;">
                    <a class="arial14grey hoverHG2" href="../download/HGSRC-Notice-of-AGM-2012.doc"><b>Notice of AGM 26/11/2012</b></a>
                    </div>    
                    ');
                }
                else 
                {
                echo('
                <div id="Div1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                <a class="arial14grey">Log in to view the Committee information.</a>
                </div>
                ');
                }
                ?>


                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>