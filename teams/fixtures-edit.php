<?php 
    session_start();

	$team = $_GET['team']; // team to edit

    $page ='location:../teams/results?team='.$team;
    $_SESSION['page'] = $page;

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['access_level'] != "ADMIN-FULL" && $_SESSION['access_level'] != "ADMIN-TEAMS" && $_SESSION['access_level'] != "ADMIN-JUNIORS" && $_SESSION['access_level'] != "ADMIN-RB")
    { header($page); }

    function makesafe($string) // To protect MySQL injection
    {
    $string = stripslashes($string);
    $string = mysql_real_escape_string($string);
    return $string;
    }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

	if (isset($_POST['division'])) // has the division been changed?
	{
		$division = makesafe($_POST['division']);
		$update = "UPDATE fixtures_header SET division = '$division' WHERE team = '$team'";
		mysql_query($update) or die(mysql_error());
	}

	if (isset($_POST['link'])) // has the link been changed?
	{
		$link = makesafe($_POST['link']);
		$update = "UPDATE fixtures_header SET table_link = '$link' WHERE team = '$team'";
		mysql_query($update) or die(mysql_error());
	}

    if (isset($_POST['date']) || isset($_POST['opponent'])) // new fixture
	{
        $newfixture = makesafe($_POST['fixture']);
		$date = makesafe($_POST['date']);
        $opponent = makesafe($_POST['opponent']);
        $HA = makesafe($_POST['HA']);
		$insert = "INSERT into fixtures_detail (team, fixture_number, H_A, opponent, date, home_score, away_score) VALUES ('$team', '$newfixture', '$HA', '$opponent', '$date', 0, 0)";
		mysql_query($insert) or die(mysql_error());
	}

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

    // set up array of fixtures
    $fixtures = array();
    while($row = mysql_fetch_row($result))
    { $fixtures[$row[1]] = $row; }

    function post_fixture($f, array $fixtures, $count)
    {
            echo // note the use of hidden input here for the fixture number
            ('
            <form action="change-fixtures.php" method="post">
            <input name="fixture" type="hidden" value="'.$f.'" />
			<input name="team" type="hidden" value="'.$fixtures[$f][0].'" />
            <tr><a id="fixture'.$f.'"></a>
            <td><input name="date" type="text" value="'.$fixtures[$f][4].'" style=" font-size:12px; width:160px; text-align:center;" maxlength="50" /></td>
            <td><input name="opponent" type="text" value="'.$fixtures[$f][3].'" style=" font-size:12px; width:160px; text-align:center;" maxlength="50" /></td>
            <td><input name="HA" value="home"  type="radio"'); 
			
			if ($fixtures[$f][2] == 'home') echo('checked');
			
			echo('
			/></td>
            <td><input name="HA" value="away" type="radio" ');
			
			if ($fixtures[$f][2] == 'away') echo('checked');

			echo('
			/></td>
			<td style="width:20px; background-color:#398271 !important;"><a href="change-fixtures?team='.$fixtures[$f][0].'&fixture='.$f.'&action=up"><img src="../image/uparrow.png" /></a></td>
			<td style="width:20px; background-color:#398271 !important;"><a href="change-fixtures?team='.$fixtures[$f][0].'&fixture='.$f.'&action=down&count='.$count.'"><img src="../image/downarrow.png" /></a></td>
			<td style="width:20px; background-color:#398271 !important;"><a href="change-fixtures?team='.$fixtures[$f][0].'&fixture='.$f.'&action=remove&count='.$count.'"><img src="../image/delete.png" /></a></td>
			<td style="width:20px; background-color:#398271 !important;"><input type="submit" name="Submit" value="Update" style=" width:60px; height:auto;" /></td>
            </form>
            </tr>
            ');
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
                    <div style="position:relative; float:left; width:900px; left:160px; height:auto; text-align:left; line-height:20px;">
					<a class="arial12grey">
					<b>Editing the fixtures:</b></br>
					1. Click the up or down arrows to move a fixture up and down the list. <br/>
                    2. To change a fixture, edit the date, opponent or home/away status and click Update. <br/>
					3. To remove a fixture, click the minus sign next to it. Use carefully because deleting is irreversible! <br/>
					4. To add a new fixture in the last row, enter the date, opponent, check home or away, and click the Add Fixture button.<br/>
					5. If neccessary, type in the new division and click Update.<br/>
					6. If neccessary, change or add a link to the league table and click Update.</br>
					</a>
					</div>
				</div>
                <div id="Table" style="position:relative; float:left; width:980px; height:auto; padding-bottom:20px;">
                    <table class="fixtures">
						
                        <tr><th><b>Date</b></th><th><b>Opponent</b></th><th><b>H</b></th><th><b>A</b></th><th colspan="4"><b>Controls</b></th></tr>
                        <?php 
						for($i=1; $i<=$count; $i++)
						{
						post_fixture($i, $fixtures, $count);
						}
						
                        $newfixture = $count + 1;

                        echo('
                        <form action="fixtures-edit?team='.$team.'#add" method="post">
						<input name="fixture" type="hidden" value="'.$newfixture.'" />
                        <tr><a id="add"></a>
                        <td><input name="date" type="text" value="" style=" font-size:12px; width:160px; text-align:center;" maxlength="50" /></td>
                        <td><input name="opponent" type="text" value="" style=" font-size:12px; width:160px; text-align:center;" maxlength="50" /></td>
                        <td><input name="HA" value="home"  type="radio" checked/></td>
                        <td><input name="HA" value="away" type="radio"/></td>
                        <td colspan="4" style="width:20px; background-color:#398271 !important;"><input type="submit" name="Submit" value="Add Fixture" style=" width:140px; height:auto;" /></td>
						</form>
                        ');
                        ?>
						<form action="fixtures-edit?team=<?php echo($team); ?>#division" method="post">
						<tr><a id="division"></a>
						<th><b>Current Division</b></th>
						<td colspan ="6"><input name="division" type="text" value="<?php echo($division); ?>" style=" font-size:12px; width:360px;" maxlength="200" /></td>
						<td style="background-color:#398271 !important;"><input type="submit" name="Submit" value="Update" style=" width:60px; height:auto;" /></td>
						</tr>
						</form>
						<form action="fixtures-edit?team=<?php echo($team); ?>#link" method="post">
						<tr><a id="link"></a>
						<th><b>Link to League</b></th>
						<td colspan ="6"><input name="link" type="text" value="<?php echo($link); ?>" style=" font-size:12px; width:360px;" maxlength="200" /></td>
						<td style="background-color:#398271 !important;"><input type="submit" name="Submit" value="Update" style=" width:60px; height:auto;" /></td>
						</tr>
						</form>
						
                    </table>
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>