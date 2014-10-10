<?php 
    session_start();
    // no $page so it will return to page user was previously on

    //This should only happen after password changed and page refreshed
    //if($_SESSION['loggedin'] != "true" && $_SESSION['matched'] == "")
    { header("location:../index"); }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Keywords" content="Holmer Green, squash, racketball, squash & racketball, holmer green squash, holmer green squash club, holmer green sports club, club, racquetball, racquet, racket, rackets, ball, hgsrc, hgsa, holmer green sports association, sports pavillion, watchet lane, bucks, buckinghamshire, HP15 6UF, coaching, tournaments, leagues, value, high wycombe squash, beaconsfield squash, high wycombe, beaconsfield"/>
    <meta name="Description" content="Welcome to Holmer Green Squash & Racketball Club, situated near High Wycombe off Watchet Lane, Holmer Green, Bucks, HP15 6UF. Offering exceptional value over 3 courts."/>
</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Membership</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:16px; padding:20px;">
                
                <?php

                if ($_SESSION['matched'] == "matched") // comes back from checkpasswordchange.php
                {
                echo('<a class="arial12red">Your password has been changed! Please Log back in.</a>');
                $_SESSION['matched'] = ""; // the message shouldn't appear again
                }
                else // show the password change form
                {
                    if($_SESSION['loggedin'] != "matched") // must be logged in already or go back to previous page
                    { header($_SESSION['page']); }
                echo ('
                <div id="Login" style="position:relative; float:left; width:800px; height:80px; padding:10px; line-height:24px;" align="left" >
                <form action="checkpasswordchange.php" method="post">
                <a class="arial12grey">Logged in as '.$fullname.'</a><br /><br />
                <a class="arial12grey">Old Password: </a>
                <input name="oldpassword" type="password" style=" width:100px; height:12px; margin:4px;" maxlength="20" />
                <a class="arial12grey">New Password: </a>
                <input name="newpassword1" type="password" style=" width:100px; height:12px; margin:4px;" maxlength="20" />
                <a class="arial12grey">Re-Type New Password: </a>
                <input name="newpassword2" type="password" style=" width:100px; height:12px; margin:4px;" maxlength="20" />
                <input type="submit" name="Submit" value="Submit" style=" width:60px; margin:4px;" />
                </form>
                ');
                if ($_SESSION['matched'] == "different")
                {
                echo('<a class="arial12red"> Passwords did not match!</a>');
                }
                if ($_SESSION['matched'] == "short")
                {
                echo('<a class="arial12red"> Passwords must be 4 characters minimum!</a>');
                }
                }
                ?>
                </div>

                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>