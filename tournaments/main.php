<?php 
    session_start(); 
    $page ="location:../tournaments/main";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Squash | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Tournaments"/>

</head>
<body>

<div id="container">
    <div id="main">

        <?php include("../includes/header.php") ?>
        
        <div style="position:relative; float:left; width:1020px; height:auto;">
            <div id="altnav" style=" position:relative; float:left; left:285px; margin-top:10px; width:370px; height:auto; text-align:center;">
                <ul class="altnav">
                    <li><a class= "arial14dgrey" href="../tournaments/STST2014">STST 2014</a></li>
                    <li><a class= "arial14dgrey" href="../tournaments/nationalschools2014">National Schools 2014</a></li>
                    <li><a class= "arial14dgrey" href="../tournaments/club2014">Club Closed Squash 2014</a></li>
                    <li><a class= "arial14dgrey" href="../tournaments/juniors2014">Junior Squash 2014</a></li>
                    <li><a class= "arial14dgrey" href="../tournaments/juniors2013">Juniors Bucks vs USA</a></li>
                    <li><a class= "arial14dgrey" href="../tournaments/STST2013">STST 2013</a></li>
                    <li><a class= "arial14dgrey" href="../tournaments/honours">Past Honours</a></li>
                </ul>
            </div>
        </div>
                
        <?php include("../includes/footer.php") ?>

    </div>
</div>
</body>
</html>