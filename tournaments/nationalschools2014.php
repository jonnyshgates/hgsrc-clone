<?php 
    session_start(); 
    $page ="location:../tournaments/juniors2013";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Honours | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="National Schools 2014"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
        <div style="position:relative; float:left; width:1020px; height:auto;">

        <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; margin: 20px 0 0 20px; text-align:center; line-height:40px; ">
        <a class="arial16white"><b>Holmer Green Juniors at the National Schools Finals 2014</b></a>
        </div>
		    <div style="position:relative; float:left; width:980px; height:auto; margin-left:20px; background-color:#f6f6f6;">

            <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:20px; padding:20px;">
                <a class="arial14grey hoverHG2" href="http://www.bucksfreepress.co.uk/sport/11087468.Squash_girls_battle_to_third_place_on_the_national_stage/" target="_blank">Click here to view the Bucks Free Press article.</a>				</div>


            </div>
                 
             
            <div id="column1" style="position:relative; float:left; width:500px; height:auto;">
                <div class="box-halfwidth">
                <div style="padding:20px;">
                    <div class="tournoipic"><img src="../image/juniors/ns1.png" /></div>
                    <div class="tournoipic"><img src="../image/juniors/ns2.png" /></div>
                    <div class="tournoipic"><img src="../image/juniors/ns3.png" /></div>
                    <div class="tournoipic"><img src="../image/juniors/ns4.png" /></div>
                </div>
                </div>
            </div>
            <div id="column2" style="position:relative; float:left; width:500px; height:auto;">
                <div class="box-halfwidth">
                <div style="padding:20px;">
                    <div class="tournoipic"><img src="../image/juniors/ns5.png" /></div>
                    <div class="tournoipic"><img src="../image/juniors/ns6.png" /></div>
                    <div class="tournoipic"><img src="../image/juniors/ns7.png" /></div>
                    <div class="tournoipic"><img src="../image/juniors/ns8.png" /></div>
                </div>
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>