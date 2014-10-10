<?php 
    session_start();

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['access_level'] != "ADMIN-FULL" && $_SESSION['access_level'] != "ADMIN-LEAGUES")
    { header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $ID = $_GET['ID'];
    
    $sql="SELECT * FROM league_detail where TYPE = $ID";
    $result_detail=mysql_query($sql);
    $count=mysql_num_rows($result_detail);
    if ($count == 0) { header($page); }

    $leagues = array();
    while($row = mysql_fetch_row($result_detail))
    $leagues[] = $row;
        
    $sql="SELECT * FROM league_header where TYPE = $ID";
    $result_header=mysql_query($sql);

    // set league header variables
    $row2 = mysql_fetch_row($result_header);
   
    $league_name = $row2[1];
    $period = $row2[2];
    $end_date = $row2[3];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Keywords" content="Holmer Green, squash, racketball, squash & racketball, holmer green squash, holmer green squash club, holmer green sports club, club, racquetball, racquet, racket, rackets, ball, hgsrc, hgsa, holmer green sports association, sports pavillion, watchet lane, bucks, buckinghamshire, HP15 6UF, coaching, tournaments, leagues, value, high wycombe squash, beaconsfield squash, high wycombe, beaconsfield"/>
    <meta name="Description" content=""/>
</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Edit Leagues</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:20px; padding:20px;">
                
                <?php 
                
                function list_entry($league_number, array $leagues)
                {
                echo('
                    <div style="position:relative; float:left; width:300px; height:auto; margin-bottom:20px;">
                        
                        <div style="position:relative; float:left; width:300px; height:auto; text-align:center; line-height:30px;">
                        <a class="arial14grey"><b>League '.$league_number.'</b></a>
                        </div><br />

                        <div style="position:relative; float:left; width:50px; height:auto; line-height:30px;">
                        <a class="arial12grey">Player 1 </a>
                        </div>
                        <div style="position:relative; float:left; width:250px; height:auto;">
                        <input name="p1_'.$league_number.'" type="text" value="'.$leagues[$league_number-1][2].'" style=" width:200px; margin:4px;" maxlength="50" />
                        </div><br />
                        
                        <div style="position:relative; float:left; width:50px; height:auto; line-height:30px;">
                        <a class="arial12grey">Player 2 </a>
                        </div>
                        <div style="position:relative; float:left; width:250px; height:auto;">
                        <input name="p2_'.$league_number.'" type="text" value="'.$leagues[$league_number-1][3].'" style=" width:200px; margin:4px;" maxlength="50" />
                        </div><br />
                        
                        <div style="position:relative; float:left; width:50px; height:auto; line-height:30px;">
                        <a class="arial12grey">Player 3 </a>
                        </div>
                        <div style="position:relative; float:left; width:250px; height:auto;">
                        <input name="p3_'.$league_number.'" type="text" value="'.$leagues[$league_number-1][4].'" style=" width:200px; margin:4px;" maxlength="50" />
                        </div><br />
                        
                        <div style="position:relative; float:left; width:50px; height:auto; line-height:30px;">
                        <a class="arial12grey">Player 4 </a>
                        </div>
                        <div style="position:relative; float:left; width:250px; height:auto;">
                        <input name="p4_'.$league_number.'" type="text" value="'.$leagues[$league_number-1][5].'" style=" width:200px; margin:4px;" maxlength="50" />
                        </div><br />
                        
                        <div style="position:relative; float:left; width:50px; height:auto; line-height:30px;">
                        <a class="arial12grey">Player 5 </a>
                        </div>
                        <div style="position:relative; float:left; width:250px; height:auto;">
                        <input name="p5_'.$league_number.'" type="text" value="'.$leagues[$league_number-1][6].'" style=" width:200px; margin:4px;" maxlength="50" />
                        </div><br />
                        
                        <div style="position:relative; float:left; width:50px; height:auto; line-height:30px;">
                        <a class="arial12grey">Player 6 </a>
                        </div>
                        <div style="position:relative; float:left; width:250px; height:auto;">
                        <input name="p6_'.$league_number.'" type="text" value="'.$leagues[$league_number-1][7].'" style=" width:200px; margin:4px;" maxlength="50" />
                        </div><br />

                    </div>
                ');
                }
                
                echo('
                <form action="change-leagues.php?ID='.$ID.'" method="post">
                <a class="arial14grey"><b>'.$league_name.' leagues</b></a><br /><br />
                <a class="arial12grey">Period: </a><input name="period" type="text" value="'.$period.'" style=" width:220px; padding-left:10px; margin:4px;" maxlength="50" />
                <a class="arial12grey">End Date: </a><input name="end_date" type="text" value="'.$end_date.'" style=" width:220px; padding-left:10px; margin:4px;" maxlength="50" />
                <input type="submit" name="Submit" value="Post League" style=" width:200px; height:24px; margin:4px 4px 4px 24px;" /><br /><br />
                
                ');
                
                //list_entry(1,$leagues);

                for ($i = 1; $i<=20; $i++) {list_entry($i,$leagues);}

                ?>

                </form>
                
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>