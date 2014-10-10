<?php 
    session_start(); 
    $page ="location:../club/calendar";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Calendar | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Club Calendar"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header-login.php") ?>
        
            <div id="box1" style="position:relative; float:left; width:980px; height:auto; min-height:350px; text-align:center; margin:20px; background-color:#efefef; ">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Calendar</b></a></div>
		        <div id="Content1" style="position:relative; float:left; width:980px; height:auto; text-align:center; padding:20px;">    
                    <?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);
?>
					
					<iframe src="https://www.google.com/calendar/embed?title=Holmer%20Green%20Squash%20%26%20Racketball%20Club&amp;showTitle=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=webmaster%40hgsrc.co.uk&amp;color=%232F6309&amp;ctz=Europe%2FLondon" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>