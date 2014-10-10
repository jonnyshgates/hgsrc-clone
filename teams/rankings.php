<?php 
    session_start();

    if($_SESSION['loggedin'] != "true")
    { header("location:../index"); }

    $page ="location:../teams/rankings";
    $_SESSION['page'] = $page;

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $sql="SELECT * FROM members WHERE s_ranking > 0";
    $result=mysql_query($sql);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);

    // set up array of results
    $rankings = array();
    while($row = mysql_fetch_row($result))
    { $rankings[$row[7]] = $row; } // column 7 is the squash ranking so this sorts the array by ranking.

	$sql="SELECT * FROM rankings";
    $result=mysql_query($sql);
	$row = mysql_fetch_row($result);
	$period = $row[0];

    // change results or view results
    $admin = FALSE;
    if($_SESSION['loggedin'] == "true" && ($_SESSION['access_level'] == "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-TEAMS"))
    { $admin = TRUE; }

    function post_ranking($f, array $rankings, $admin)
    {
        if($admin)
        {
			if (isset($rankings[$f][2]) && isset($rankings[$f][3]))
			{
            echo
            ('
            <td><a id="rank'.$f.'"></a><b>'.$f.'</b></td>
            <td><b>'.$rankings[$f][2].' '.$rankings[$f][3].'</b></td>
            <td style="width:20px; background-color:#398271 !important;"><a href="change-rankings?rank='.$f.'&action=up"><img src="../image/uparrow.png" /></a></td>
			<td style="width:20px; background-color:#398271 !important;"><a href="change-rankings?rank='.$f.'&action=down"><img src="../image/downarrow.png" /></a></td>
			<td style="width:20px; background-color:#398271 !important;"><a href="change-rankings?rank='.$f.'&action=remove"><img src="../image/delete.png" /></a></td>
			');
			}
			else //adding
			{
				echo('
				<form action="change-rankings.php" method="post">
				<td><a id="rank'.$f.'"></a><b>'.$f.'</b></td>
				<input name="position" type="hidden" value="'.$f.'" />
				<td><input name="name" type="text" style=" font-size:12px; width:200px; padding-left:5px; text-align:left;" maxlength="6" /></td>
				<td style="width:20px; background-color:#398271 !important;"><a href="change-rankings?rank='.$f.'&action=up"><img src="../image/uparrow.png" /></a></td>
				<td style="width:20px; background-color:#398271 !important;"><a href="change-rankings?rank='.$f.'&action=down"><img src="../image/downarrow.png" /></a></td>
				<td style="width:20px; background-color:#398271 !important;"><input type="submit" name="Submit" value="+" style=" width:24px; height:auto;" /></td>
				</form>
				');
			}
        }
        else
        {
            echo('<tr><td><b>'.$f.'</b></td><td><b>'.$rankings[$f][2].' '.$rankings[$f][3].'</b></td>');
        }

        echo('</tr>');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Squash Mens Rankings | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Holmer Green Squash & Racketball Club Mens Squash Rankings"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>HGSRC Mens Squash Rankings - <?php echo($period); ?></b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                    <?php
					if($admin)
					{
					echo('
					<div style="position:relative; float:left; left:160px; width:900px; height:auto; text-align:left; line-height:20px;">
					<a class="arial12grey">
					<b>Editing the rankings:</b></br>
					1. Click the up or down arrows to move a name up and down the list (won\'t move higher than 1 or lower than 30!).<br/>
					2. To remove a name from the rankings, click the minus sign next to the name and the space will be free to add a new name.<br/>
					3. To add a name to the rankings, enter the 6 character username* and press the plus button next to the name.<br/>
					4. If neccessary, type in the new period (quarter) and click Post.<br/>
					*username is made up of the first 3 letters of the first name and first 3 letters of the surname.</br></br>
					</a>
					</div>
					');
					}
					?>
					
					
					<div id="Table" style="position:relative; float:left; width:980px; height:auto; padding-bottom:20px;">
                    <table class="rankings">
						<tr><th><b>Position</b></th><th><b>Name</b></th></tr>
						<?php
						if($admin)
						{
						echo('
						<form action="change-rankings.php" method="post">
						<tr>
						<td colspan="2"><input name="period" value="'.$period.'" type="text" style=" font-size:12px; width:200px; padding-left:5px; text-align:left;" maxlength="30" /></td>
						<td colspan="3" style="width:20px; background-color:#398271 !important;"><input type="submit" name="Submit" value="Post" style=" width:80px; height:auto;" /></td>
						</tr>
						</form>
						');
						}
					
						for($i=1; $i<=30; $i++) post_ranking($i, $rankings, $admin); ?>

                    </table>
					</br>
					<a class="arial14grey hoverHG2" href="rankings-pdf" target="_blank">Click here to create a PDF version.</a>
                    </div>
					
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>