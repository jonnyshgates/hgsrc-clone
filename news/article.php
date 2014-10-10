<?php 
    session_start(); 
    $page ="location:../news/news";
    $_SESSION['page'] = $page;

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $ID = $_GET['ID'];

    $sql="SELECT * FROM article where ID = $ID";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);

    //Test if article exists

    if($count == 1)
    $row = mysql_fetch_row($result);
    else header("location:../news/news");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Articles | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Articles"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                
                <?php

                switch ($row[1])
	            {
	            case 'Squash Teams': $bg = '#284934'; break;
	            case 'Racketball Teams': $bg = '#2a4971'; break;
                }

                echo('<div id="Heading1" style="position:relative; float:left; background-color:'.$bg.'; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>'.$row[2].'</b></a></div>');
		        ?>

                <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:16px; padding:20px;">
                
                <?php
				echo('
                <a class="arial12grey"><i>Posted by '.$row[4].'</i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a class="arial12grey">'.$row[5].'<br /><br /></a>
				<a class="arial12grey">'.$row[3].'</a><br/>
                ');
                ?>
                
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>