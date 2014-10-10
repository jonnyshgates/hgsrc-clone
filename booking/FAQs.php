
<?php 
    session_start(); 
    $page ="location:../booking/FAQs";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Booking FAQs | Holmer Green Squash & Racketball Club</title>
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
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Booking System FAQs</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; padding:20px;">
                <?php
                if($_SESSION['loggedin'] == "true")
                { 
                echo('
                <a class="arial14grey"><b>What if I\'ve forgotten my password?</b><br /><br /></a>
                <a class="arial13grey">Contact the Membership Secretary for resolution at</a>
                <a class="arial13grey hoverHG2" href="mailto:membership@hgsrc.co.uk">membership@hgsrc.co.uk.<br /><br /></a>
                <a class="arial14grey"><b>Is the post code initial password case sensitive?</b><br /><br /></a>
                <a class="arial13grey">Yes postcodes are all uppercase and must contain the space too.<br /><br /></a>
                <a class="arial14grey"><b>What are the criteria for New Passwords?</b><br /><br /></a>
                <a class="arial13grey">They can be as long or short as you like and must contain characters and / or digits.<br /><br /></a>
                <a class="arial14grey"><b>What happens if players do not show up, can I take over the court?</b><br /><br /></a>
                <a class="arial13grey">After a 15 minutes time lapse, the court will automatically be released for the remaining 30 minutes, that will cost 30/45ths of the prevailing court fee i.e. 30/45ths of £4.00 = £2.67.
                The first member books the court via the kiosk, their Club Account will be automatically debited £2.67.  The second member initiates the court lights using their keyfob, at this time 50% of the £2.67 / 1.33 again automatically credits the first member’s club account.<br /><br /></a>
                <a class="arial14grey"><b>If the next court is available can we run over to finish a game?</b><br /><br /></a>
                <a class="arial13grey">If the next court is available you can either book from the kiosk or place your fob on the court side controller for an eight minute increment, a maximum of two increments is allowed.<br /><br /></a>
                <a class="arial14grey"><b>What if I want a knock-about on my own?</b><br /><br /></a>
                <a class="arial13grey">At this time, simply book a 45 minute court online, OR book via the Club Kiosk balance of court times i.e. 30 / 15 minutes
                Further, members can book eight minute increments, which will cost 8/45ths of the prevailing court fee, a maximum of two increments per member.
                These increments are only for use <b>before</b> a booking (i.e. for knockabout / warm-up) and <b>after</b> a booking (if the match runs over, or for a warm down).  For clarity, two members would not be able to get two increments each!
                We are receptive to any members returning from an injury, and will consider retrospective credits...  Send an email to </a>
                <a class="arial13grey hoverHG2" href="mailto:membership@hgsrc.co.uk">membership@hgsrc.co.uk<br /><br /></a>
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