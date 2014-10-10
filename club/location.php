<?php 
    session_start(); 
    $page ="location:../club/location";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Location | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Club Location"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Club Location</b></a></div>
		        <div id="Content1" style="position:relative; float:left; width:980px; height:auto; text-align:center; padding:20px;">    
                    <div id="map" style="position:relative; float:left; width:936px; height:400px; border:2px solid #666666;">
				        <iframe width="936" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?source=s_q&amp;f=q&amp;hl=en&amp;geocode=&amp;q=HP15+6UF&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.59616,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Holmer+Green+HP15+6UF,+United+Kingdom&amp;t=m&amp;ll=51.665316,-0.70467&amp;spn=0.037266,0.072956&amp;z=11&amp;output=embed&iwloc=near"></iframe>
                    </div>
                    <div id="Address" style="position:relative; float:left; width:936px; height:auto; line-height:20px; padding-top:20px;">
			        <a class="arial16grey"><b>Holmer Green Squash & Racketball Club</b><br /></a>
                    <a class="arial14grey">Sports Pavilion, Watchet Lane, Holmer Green,<br />High Wycombe, Buckinghamshire, HP15 6UF<br /><br /></a>
                    </div>
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>