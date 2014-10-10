<?php 
    session_start(); 
    $page ="location:../teams/main";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Teams | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Teams"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">

        <?php include("../includes/header.php") ?>
        
        <div style="position:relative; float:left; width:1020px; height:auto;">
            <div id="altnav" style=" position:relative; float:left; left:285px; margin-top:10px; width:370px; height:auto; text-align:center;">
                <ul class="altnav">
                    <li><a class= "arial14dgrey" href="../news/news">News</a></li>
                    <?php
                    if($_SESSION['loggedin'] == "true")
                    { echo ('<li><a class= "arial14dgrey" href="../teams/rankings">Mens Rankings</a></li>'); }
                    ?>
                    <li><a class= "arial14dgrey" href="../teams/results?team=M1">HGSRC Mens 1</a></li>
                    <li><a class= "arial14dgrey" href="../teams/results?team=M2">HGSRC Mens 2</a></li>
                    <li><a class= "arial14dgrey" href="../teams/results?team=M3">HGSRC Mens 3</a></li>
                    <li><a class= "arial14dgrey" href="../teams/results?team=J1">HGSRC Juniors 1</a></li>
                    <li><a class= "arial14dgrey" href="../teams/results?team=J2">HGSRC Juniors 2</a></li>
                    <li><a class= "arial14dgrey" href="../teams/results?team=J3">HGSRC Juniors 3</a></li>
                    <li><a class= "arial14dgrey" href="../teams/results?team=R1">HGSRC Racketball 1</a></li>
                </ul>
            </div>
        </div>
                
        <?php include("../includes/footer.php") ?>

    </div>
</div>
</body>
</html>