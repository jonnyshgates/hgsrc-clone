<?php 
    session_start(); 
    $page ="location:../news/news";
    $_SESSION['page'] = $page;

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $sql="SELECT * FROM article";
    $result=mysql_query($sql);
    //$count=mysql_num_rows($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>News | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="News"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>News</b></a></div>
		        
                <?php

                if($_SESSION['loggedin'] == "true")
                {
                echo('
                <div id="editing">
                <ul class="editing">
                    <li><a class="arial14white" href="new-article.php">ADD NEW ARTICLE</a></li>
                </ul>
                </div>
                ');
                }

                ?>

                <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:30px; padding:20px;">
                <div style=" border-bottom:1px solid #666666;"></div>
                <?php
               
                /* Reverse the articles latest first */

                $rowset = array();
                while($row = mysql_fetch_row($result))
                $rowset[] = $row;
                $rowset = array_reverse($rowset);

                /*===================================*/

                foreach ($rowset as $row)
                {
				echo('
                <div style=" border-bottom:1px solid #666666; padding-left:20px;">
                <a class="arial14grey hoverHG2" href="article?ID='.$row[0].'&TYPE='.$row[1].'"><b>'.$row[1].'&nbsp;-&nbsp;'.$row[2].'</b>&nbsp;&nbsp;&nbsp;&nbsp;</a>
				<a class="arial12grey"><i>Posted by '.$row[4].' &nbsp;&nbsp; - &nbsp;&nbsp; </i></a>
                <a class="arial12grey"><i>'.$row[5].'</i><br /></a>
                </div>
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