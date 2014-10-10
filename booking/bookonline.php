<?php

session_start();

if($_SESSION['loggedin'] == "true")
{ 
$myusername = $_SESSION['myusername'];

$key = 'master';
$mypassword = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($_SESSION['mypassword']), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
$mypassword = str_replace(" ","",$mypassword);

echo($myusername);
echo($mypassword);
$address = 'location: http://217.155.41.218/xml2010/book2010.dll/cookietry?username='.$myusername.'&password='.$mypassword';

//http://217.155.41.218/xml2010/book2010.dll/cookielog // this is without login attempt

header($address);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Book Online | Holmer Green Squash & Racketball Club</title>
    <link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
    <link rel="shortcut icon" href="../image/favicon.ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index, nofollow"/>
    <meta name="author" content="Holmer Green Squash & Racketball Club"/>
    <meta name="Description" content="Holmer Green Squash & Racketball Club Online Court Booking"/>
  
  <?php include("includes/google_analytics.php") ?>
  
  </head>
  <body>

    <div id="container">
      <div id="main">
        <?php include("../includes/header.php") ?>

        <div id="box-fullwidth">
          <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; ">
            <a class="arial16white"><b>Club System</b></a>
          </div>
          <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
          <a class="arial14grey">Log in to access the booking system</a>
          </div>
        </div>

        <?php include("../includes/footer.php") ?>

      </div>
    </div>
  </body>
</html>