<?php 
    session_start(); 
    $page ="location:../membership/main";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Membership | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Membership"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">

        <?php include("../includes/header.php") ?>
        
        <div style="position:relative; float:left; width:1020px; height:auto;">
            <div id="altnav" style=" position:relative; float:left; left:285px; margin-top:10px; width:370px; height:auto; text-align:center;">
                <ul class="altnav">
                    <?php
                    if($_SESSION['loggedin'] == "true" && $_SESSION['access_level'] == "ADMIN-FULL")
                    { echo ('<li style="background-image:url(../image/navbg4.png) !important;"><a class= "arial14white" href="../members/member-lookup">Edit Members</a></li>'); }
                    ?>
                    <li><a class= "arial14dgrey" href="../membership/membership-fees">Subscription Fees</a></li>
                    <li><a class= "arial14dgrey" href="../membership/court-fees">Court Fees</a></li>
                    <li><a class= "arial14dgrey" href="../membership/membership-application">Application Form</a></li>
                    <li><a class= "arial14dgrey" href="../membership/services">Stringing</a></li>
                    <li><a class= "arial14dgrey" href="../membership/conduct">Codes of Conduct</a></li>
                    <li><a class= "arial14dgrey" href="../membership/subscription">Subscription Policy</a></li>
                    <li><a class= "arial14dgrey" href="../membership/healthsafety">Health & Safety Policy</a></li>
                </ul>
            </div>
        </div>
                
        <?php include("../includes/footer.php") ?>

    </div>
</div>
</body>
</html>