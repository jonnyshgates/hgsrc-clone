<?php 
    session_start(); 
    $page ="location:../membership/services";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Services | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Membership Services"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Stringing & Accessories</b></a></div>
		        
				<?php

                if($_SESSION['loggedin'] == "true")
                {

				echo('
				
				<div id="Text1" style="position:relative; width:600px; height:auto; text-align:center; line-height:16px; padding:20px; margin-left:auto; margin-right:auto;">
                <br /><br /><a class="arial14grey"><b>JOHN WILLIAMS - RACKET STRINGING & ACCESSORIES</b></a><br /><br />
                <a class="arial13grey">Over 30 years experience, providing advice and quality service...<br />
                Our fellow active HGSRC members John Williams & Roger Dugan</a><!--<a class="arial13grey hoverHG2" href="mailto:william-j@sky.com"> william-j@sky.com</a>--> <br /><br />
				<!--<a class="arial14grey hoverHG2" href="../download/HGSRC-Preferred-Stringers-17Jun12.pdf" target="_blank">Click here to download the PDF version.</a><br /><br />-->
                    <div id="Table" style="position:relative; width:600px; height:auto; margin-left:auto; margin-right:auto;">
                    <table class="services">
                        <tr><th colspan="2"><b>Squash & Racketball Strings</b></th></tr>
                        <tr><td><b>Ashaway - Supernick XL</b> (Red, White & Blue)</td><td><b>£18</b></td></tr>
                        <tr><td><b>Ashaway - Supernick XL Pro</b> (Dark Blue)</td><td><b>£20</b></td></tr>
                        <tr><td><b>Technifibre - 305 1.2mm</b> (Green)</td><td><b>£18</b></td></tr>
                        <tr><td><b>Technifibre - X-one Biphase</b> (Red)</td><td><b>£20</b></td></tr>
                        <tr><td><b>RKEP - Good durable alternative</b> (Green)</td><td><b>£13</b></td></tr>
                        <tr><td><b>Gromit Strip</b> (fitted)</td><td><b>£8</b></td></tr>
                        <tr><td colspan="2"><b>All other makes of string available, prices on request</td></tr>
                    </table>
                    </div>
                </div>

				');
				}
				else 
                {
                echo('
				<div id="Div1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                <a class="arial14grey">Log in to view our Members Only Services</a>
                </div>
				');
                }
                
                ?>

            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>