<?php 
    session_start();

	$team = $_GET['team']; // team to show results for
	$_SESSION['team'] = $team; //team type to send to change-results

    $page ='location:../teams/results?team='.$team;
    $_SESSION['page'] = $page;

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

	$sql="SELECT * FROM fixtures_header WHERE team = '$team'"; 
    $result=mysql_query($sql);
	$row = mysql_fetch_row($result);

	$teamname = $row[1];
	$type = $row[2];
	$division = $row[3];
	$link = $row[4];

    $sql="SELECT * FROM fixtures_detail WHERE team = '$team'";
    $result=mysql_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);

    // set up array of results
    $fixtures = array();
    while($row = mysql_fetch_row($result))
    { $fixtures[$row[1]] = $row; }

    // change results or view results

    $admin = FALSE;

    if($_SESSION['loggedin'] == "true" && ($_SESSION['access_level'] == "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-TEAMS") && $type == 'M')
    { $admin = TRUE; }

	if($_SESSION['loggedin'] == "true" && ($_SESSION['access_level'] == "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-JUNIORS") && $type == 'J')
    { $admin = TRUE; }

    if($_SESSION['loggedin'] == "true" && ($_SESSION['access_level'] == "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-RB") && $type == 'R')
    { $admin = TRUE; }

    function post_result($f, array $fixtures, $admin, $teamname)
    {
        if($fixtures[$f][2] == 'home') echo('<tr><td>'.$fixtures[$f][4].'</td><td style="color:#284934 !important;"><b>'.$teamname.'</b></td><td>'.$fixtures[$f][3].'</td>');
        else echo('<tr><td>'.$fixtures[$f][4].'</td><td>'.$fixtures[$f][3].'</td><td style="color:#284934 !important;"><b>'.$teamname.'</b></td>');

        if($admin)
        {
            echo // note the use of hidden input here for the fixture number
            ('
            <form action="change-results.php" method="post">
            <input name="fixture" type="hidden" value="'.$f.'" />
            <td><input name="home" type="text" value="'.$fixtures[$f][5].'" style=" font-size:13px; width:40px; text-align:center;" maxlength="3" /></td>
            <td><input name="away" type="text" value="'.$fixtures[$f][6].'" style=" font-size:13px; width:40px; text-align:center;" maxlength="3" /></td>
            <td><input type="submit" name="Submit" value="Post" style=" width:50px; height:auto;" /></td>
            </form>
            ');
        }

        else
        {
            if($fixtures[$f][2] == 'home') echo('<td style="color:#284934 !important;"><b>'.$fixtures[$f][5].'</b></td><td>'.$fixtures[$f][6].'</td>');
            else echo('<td>'.$fixtures[$f][5].'</b></td><td style="color:#284934 !important;"><b>'.$fixtures[$f][6].'</b></td>');
        }

        echo('</tr>');
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HGSRC Team Fixtures | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Holmer Green Squash & Racketball Club Team Fixtures"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php")?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b><?php echo($teamname.' Fixtures - '.$division); ?></b></a></div>
                <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:20px; padding:20px;">
                <?php
				
				if($admin)
				{
				echo('
					<div id="editing">
					<ul class="editing">
						<li><a class="arial14white" href="fixtures-edit?team='.$team.'">EDIT FIXTURES</a></li>
					</ul>
					</div>
					');
				}
				
				if ($link != '')
				{
				echo('<a class="arial14grey hoverHG2" href="'.$link.'" target="_blank">Click here to view the current league table.</a>');
                }
				?>
				</div>
                <div id="Table" style="position:relative; float:left; width:980px; height:auto; padding-bottom:20px;">
                    <table class="fixtures">
                        <tr><th><b>Date</b></th><th><b>Home Team</b></th><th><b>Away Team</b></th><th><b>Home</b></th><th><b>Away</b></th></tr>
                        <?php 
						for($i=1; $i<=$count; $i++)
						{
						if($fixtures[$i][4] != '') //blank date
						post_result($i, $fixtures, $admin, $teamname);
						}
						?>
                    </table>
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>