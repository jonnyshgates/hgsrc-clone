
<?php 
    session_start(); 
    $page ="location:../booking/configurations";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Booking Configurations | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	
	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Club System Configuration Settings</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; padding:20px;">
                <?php
                if($_SESSION['loggedin'] == "true")
                { 
                echo('
                <a class="arial13grey">Time of first and last court sessions:<br /></a>
                <a class="arial13grey"><ul><li>Court 1: 8:15AM and 9:00PM</li><li>Courts 2 & 3: 8:00AM and 9:30PM</li></ul><br /></a>
                <a class="arial13grey">ALL court bookings sessions @ 45 minutes duration.<br /><br /></a>
                <a class="arial13grey">Door security, allows access for ALL members from 7:00am to 11:30pm.<br /><br /></a>
                <a class="arial13grey">Courts are released on a rolling 14 day cycle, by 7am each morning i.e. Monday 17 October for Monday 31 October.  At this time, members can book as many courts as they wish, subject to ongoing review.<br /><br /></a>
                <a class="arial13grey">See </a>
                <a class="arial13grey hoverHG2" href="http://www.hgsrc.co.uk/membership/court-fees">‘Membership Court Fees’</a>
                <a class="arial13grey">for total cost of each session, including Guest Fees.<br /><br /></a>
                <a class="arial13grey">‘Split fee court booking / activation’.  The first member books the court and pays for 100% of the court booking including the light element i.e. £4.50 is transferred from their Club Account to HGSRC Club Account.  At the time of playing, the second member activates the court lights using their keyfob on the courtside controller, on doing so 50% of the court fee is transferred from their Club Account to the first members Club Account.  Members are responsible for their Club Account credit.  If the first member books, and activates the court lights, a guest fee of £2.25 will be transferred from their Club Account to HGSRC Club Account.<br /><br /></a>
                <a class="arial13grey">The Guest fee of £2.50 is a flat fee for ALL Membership CATEGORIES, for a full 45 minutes, and all lesser court durations i.e. 30 minutes will attract the same £2.50 flat fee.<br /><br /></a>
                <a class="arial13grey">Two Membership CATEGORIES of i) FULL-ANYTIME ii) OFF-PEAK, with profile permissions.  Should a FULL-ANYTIME member, and a OFF-PEAK member wish to play at Peak Time, this is fine, however the Court Side Controller will not accept the OFF-PEAK keyfob and will decline, however the FULL – ANYTIME member can use their keyfob, and will be debited £2.50 Guest Fee.<br /><br /></a>
                <a class="arial13grey">Club Nights are open to ALL Members at £3:50 for 45 minutes court time duration.  Guest & Prospect Members - are welcome up to 3 times, thereafter ‘make your mind up’ time!  We request that ALL Members respect today’s policy...  Again - subject to ongoing review.<br /><br /></a>
                <a class="arial13grey">Cancellation Parameters:  A clear 48 hours cancellation and on releasing the court on the club system, a full credit will automatically be applied to myHGSRC Account.  For less than 48 hours – still release the court... Basis another member books the court; A full refund credit will automatically be applied to myHGSRC Account.<br /><br /></a>
                ');
                }
                else
                {
                echo('
                <a class="arial14grey">Log in to access the booking system</a>
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