<?php 
    session_start();
	$page ='location:../tournaments/STST2014';
	$_SESSION['page'] = $page;

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    //================================================
    $p = 5; // number of players per team
    //================================================
    $t = 3; // number of teams
	//================================================
    $x = 2; // number of times each team plays each other
    //================================================

    function create_team($number)
    {
    $sql = "SELECT * FROM STST_Teams where NUMBER = $number";
    $result = mysql_query($sql);
	$current = mysql_fetch_row($result);
    $t['number'] = $current[0];
    $t['name'] = $current[1];
    $t['colour'] = $current[2];
    $t['score'] = $current[3];
    $t['played'] = $current[4];

    return $t;

    }

    function create_players($number,$pl)
    {
        for ($i = 1; $i <= $pl; $i++)
        {

            $sql = "SELECT * FROM STST_players where TEAM_NUMBER = $number AND RANK = $i";
            $result = mysql_query($sql);
            $current = mysql_fetch_row($result);
            $p[$i]['name'] = $current[1];
            $p[$i]['rank'] = $current[3];
	        $p[$i]['match1'] = $current[4];
            $p[$i]['match2'] = $current[5];
            $p[$i]['match3'] = $current[6];
            $p[$i]['match4'] = $current[7];
            $p[$i]['match5'] = $current[8];
            $p[$i]['match6'] = $current[9];
            $p[$i]['match7'] = $current[10];
            $p[$i]['match8'] = $current[11];
            $p[$i]['match9'] = $current[12];
			$p[$i]['team1'] = $current[19];
			$p[$i]['team2'] = $current[20];
			$p[$i]['team3'] = $current[21];
			$p[$i]['team4'] = $current[22];
			$p[$i]['team5'] = $current[23];
			$p[$i]['team6'] = $current[24];
			$p[$i]['team7'] = $current[25];
			$p[$i]['team8'] = $current[26];
			$p[$i]['team9'] = $current[27];
        }

    return $p;

    }

	function display_matches($team, $match)
	{
		if ( $team == 99) { echo (' <td style="background-color:#efefef; color:#52aa6c;"><b>'.$match.'</b></td>'); }
		else if ( $team == 98) { echo (' <td style="background-color:#efefef; color:#bb0000;"><b>'.$match.'</b></td>'); }
		else { echo (' <td>'.$match.'</td>'); }
	}

    function display_fixture($colour1, $name1, $colour2, $name2, $date, $court)
    {
        echo('
        <tr>
        <th>'.$date.'</th>
        <th style="background-color:'.$colour1.'">'.$name1.'</th>
        <th style="background-color:'.$colour2.'">'.$name2.'</th>
        <th>'.$court.'</th>
        </tr>
        ');
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Summer Teams Squash Tournament | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Tournament"/>
</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        <div id="box-fullwidth" style="text-align:center;">
            <div id="heading-fullwidth"><a class="arial16white"><b>Summer Teams Squash Tournament 2014</b></a></div>  
            <?php
                if($_SESSION['loggedin'] == "true")
                {
                    
					//==================================================
					// TEAM TABLES
					//==================================================

                    echo('<div id="Tables" style="position:relative; float:left; width:600px; height:auto; text-align:center; line-height:16px; padding:20px;">');
            
                    for ($i = 1; $i <= $t; $i++) $teams[$i] = create_team($i);
                    for ($i = 1; $i <= $p; $i++) $players[$i] = create_players($i, $p);

                    for ($i = 1; $i <= $t; $i++) // this decides the number of teams to display
					{
						$tn = $teams[$i]['number'];
						$played = 0;
						$gt = 0;

                        for ($j = 1; $j < $t*2; $j++) // work out how many games have been played
                        {
                            $matchname = 'match'.$j;
                            if ($players[$i][1][$matchname] != 0) $played++;
                        }

						$update="UPDATE STST_Teams SET matches_played='$played' WHERE number = '$tn'";
						mysql_query($update) or die(mysql_error());

                        $cols = ($t*2)+3;
						
						echo('
						<table class="STST" style="width:600px">
						<tr><th colspan="'.$cols.'" style="height:20px; font-size:14px; background-color:'.$teams[$i]['colour'].'">'.$teams[$i]['name'].'</th></tr>
						<tr><th style="background-color:'.$teams[$i]['colour'].'">Played '.$teams[$i]['played'].' matches</th>
						');

						for ($j = 1; $j <= $t; $j++)
						{
						if($j != $i) echo ('<th style="background-color:'.$teams[$j]['colour'].'">'.$teams[$j]['name'].'</th>');
						}

                        for ($j = 1; $j <= $t; $j++)
						{
						if($j != $i) echo ('<th style="background-color:'.$teams[$j]['colour'].'">'.$teams[$j]['name'].'</th>');
						}
            
						echo('
						<th style="background-color:'.$teams[$i]['colour'].'">Total</th>
						<th style="background-color:'.$teams[$i]['colour'].'">Average</th>
						</tr>
						');

						for ($j = 1; $j <= $p; $j++)
						{
                            $ptotal=0;
                            for ($k = 1; $k < ($t*$x)-1; $k++) // this works out the total column
                            {
                                $matchname = 'match'.$k;
                                $ptotal += $players[$i][$j][$matchname];
                            }

							echo('
							<tr>
							<td>'.$players[$i][$j]['name'].'</td>
							');

                            for ($k = 1; $k < ($t*$x)-1; $k++) // shows results
                            {
                                $teamname = 'team'.$k;
                                $matchname = 'match'.$k;
                                display_matches($players[$i][$j][$teamname], $players[$i][$j][$matchname]);
                            }

							$paverage = round($ptotal/$teams[$i]['played']);;

							echo('
							<td>'.$ptotal.'</td>
							<td>'.$paverage.'</td>
							</tr>
							');
						}

						echo('
						<tr>
						<td><b>Total</b></td>
						');

                        for ($j = 1; $j < ($t*$x)-1; $j++) // working out the totals against each team
                        {
                            $matchname = 'match'.$j;
                            for ($k = 1; $k <= $p; $k++) $total += $players[$i][$k][$matchname]; 
                            echo('<td><b>'.$total.'</b></td>'); 
                            $gt += $total; $total = 0;
                        }

						$average = round($gt/$teams[$i]['played']);

						echo('
						<td><b>'.$gt.'</b></td>
						<td><b>'.$average.'</b></td>
						</tr>
						</table>
						');

						$update="UPDATE STST_Teams SET score='$gt' WHERE number = '$tn'";
						mysql_query($update) or die(mysql_error());
					}

					echo('</div>');

					//=================================================
					// STANDINGS
					//=================================================
					
					echo('

					<div id="Standings" style="position:relative; float:left; width:300px; height:auto; text-align:center; line-height:16px; padding: 20px 20px 0 0;">
						<table class="STST" style="width:320px;">
						<tr><th colspan="4" style="height:20px; font-size:14px;">Standings</th></tr>
						<tr>
						<th style="height:20px;">Pos</th>
						<th style="height:20px;">Team</th>
						<th style="height:20px;">Played</th>
						<th style="height:20px;">Score</th>
						</tr>
					');

					//sort the teams

					function sortByScore($a, $b) {return $a['score'] - $b['score'];}
					usort($teams, 'sortByScore');
                
					for ($i = $t-1; $i >= 0; $i--)
					{
					$pos = $t-$i;
					echo('
					<tr>
					<th style="height:20px;">'.$pos.'</th>
					<th style="height:20px; background-color:'.$teams[$i]['colour'].'">'.$teams[$i]['name'].'</th>
					<th style="height:20px;">'.$teams[$i]['played'].'</th>
					<th style="height:20px;">'.$teams[$i]['score'].'</th>
					</tr>
					');
					}
                
					echo ('
					</table>
					</div>
					');

					//==================================================
					// FIXTURES
					//=================================================

					echo('
					<div id="Fixtures" style="position:relative; float:left; width:300px; height:auto; text-align:center; line-height:16px; padding: 0 20px 20px 0;">
					');
                
					for ($i = 1; $i <= 5; $i++) $teams[$i] = create_team($i);

					echo('
					<table class="STST" style="width:320px;">
					<tr><th colspan="4" style="height:20px; font-size:14px;">Fixtures</th></tr>
					<tr>
					<th>Date</th>
					<th colspan="2">Participants</th>
					<th>Court</th>
					</tr>
					');

					display_fixture($teams[1]['colour'],$teams[1]['name'],$teams[2]['colour'],$teams[2]['name'],'Tue 3 June',2);
					display_fixture($teams[3]['colour'],$teams[3]['name'],$teams[2]['colour'],$teams[2]['name'],'Tue 10 June',2);

					display_fixture($teams[1]['colour'],$teams[1]['name'],$teams[3]['colour'],$teams[3]['name'],'Tue 17 June',2);
					display_fixture($teams[2]['colour'],$teams[2]['name'],$teams[1]['colour'],$teams[1]['name'],'Tue 24 June',2);

					display_fixture($teams[3]['colour'],$teams[3]['name'],$teams[1]['colour'],$teams[1]['name'],'Tue 1 July',2);
					display_fixture($teams[2]['colour'],$teams[2]['name'],$teams[3]['colour'],$teams[3]['name'],'Tue 8 July',2);
					
                

					echo ('</table> </div>');

					

				//========================================================
				//                    RESERVES TABLE
				//========================================================


				$sql = "SELECT * FROM STST_players where TEAM_NUMBER = 99";
				$result = mysql_query($sql);
				$count = mysql_num_rows($result);

                for ($i = 1; $i <= $count; $i++)
					{
						$current = mysql_fetch_row($result);
                        $reserves[$i] = $current;
                    }

                function sortByRank($a, $b) {return $a[3] - $b[3];}
					usort($reserves, 'sortByRank');
				

			echo('
			
			<div id="Reserves" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding: 0 20px 20px 20px;">
            
						<table class="STST" style="width:940px">
						<tr>
						<th colspan="20" style="height:20px; font-size:14px; background-color:#52aa6c; color:#ffffff;">RESERVES</th></tr>
						<tr><th>Name</th>
						<th>Rank</th>
						<th colspan="6">Scores</th>
						<th>Played</th>
						<th>Total</th>
						<th>Average</th>
						</tr>
						');

						for ($i = 0; $i < $count; $i++)
						{

						echo('
						<tr>
						<td>'.$reserves[$i][1].'</td>
						<td>'.$reserves[$i][3].'</td>
						');

						$rplayed = 0;
						$total = 0;

						for ($j = 4; $j <= 9; $j++) //adding scores...
						{

						$team = 0;
						$teams[0]['colour'] = '#ffffff';
						$text = '#333333';
						$weight = 'normal';


						if ( $reserves[$i][$j] != 0 ) // a match has been played
						{ 
						$rplayed++; 
						$team = $current[$j+6];
						$text = '#000000';
						$weight = 'bold';
						}

						
						 
						echo(' <td style="background-color:'.$teams[$team]['colour'].'; color:'.$text.'; font-weight:'.$weight.';">'.$reserves[$i][$j].'</td>');
						$total += $reserves[$i][$j];
						}

						echo('
						<td>'.$rplayed.'</td>
						<td>'.$total.'</td>
						<td>'.($total/$rplayed).'</td>
						</tr>
						');
						}

				echo('
				</table>
				</div>
				');


                }
                else 
                {
                echo('
                <div id="Div1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                <a class="arial14grey">Log in to view the Tournament information.</a>
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

<?php

/* INTRODUCTION - NOT REQUIRED TILL NEXT YEAR...


                    if( $_SESSION['entry'] == 'sent')
                    {
                        echo('
                        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
                        <a class="arial18grey">Thanks for entering and good luck!</a>
                        </div>
                        ');
                    }

                    if( $_SESSION['entry'] == 'nocomp')
                    {
                        echo('
                        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
                        <a class="arial18grey">You didn\'t select an entry type!</a>
                        </div>
                        ');
                    }

                    if( $_SESSION['entry'] == 'nomemb')
                    {
                        echo('
                        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
                        <a class="arial18grey">You didn\'t select an membership type!</a>
                        </div>
                        ');
                    }

                    $_SESSION['entry'] = '';


                    echo('

                    <div style="position:relative; float:left; left:150px; width:700px; text-align:center; padding: 30px 0 0 0;">
                    <a class= "arial13grey">
                    Dear Members,<br /><br /> 
                    Once again we are introducing our HGSRC Summer Team Squash Tournament (“ST2”)<br /><br />  
                    Starting on Tuesday 29th April it culminates with a FINALS Evening on Friday 11th July 2014.<br /><br /> 
                    We propose to have 8 teams of 5 members, including players from our Men’s Team Squad, Ladies and Juniors.  All members will be ranked in bands 1 to 8 according to ability. All matches will be played on a Tuesday OR a Wednesday. Matches start at 7:15pm PROMPT, playing non-stop for 20mins with American scoring – a point per rally. The 5 matches will run consecutively over 2 hours; finishing at 9:30pm.<br /><br />
                    Teams will be drawn from the ranking list created by Alex Hartley, David Albin and Robert Reid.<br /><br /> 
                    The (Rock bottom) Tournament Entry Fee is £16 per player. This provides 7 League matches per entrant and a Grand Final evening.<br /><br />
                    There will not be Team Shirts or gourmet meal on Finals Night! Entry Fees should be paid by Bank Transfer by the start of the competition. Bank transfer to HSBC Sort Code: 40-24-17, Account number 41337580. Please enter a 12 character reference of “User ID plus SUMTOU” e.g. “JOHRICSUMTOU”.<br /><br />
                    The fee covers court hire and match balls.<br /><br />
                    PRIZES for Top Team, and Runners Up, and individual prizes.<br /><br />
                    FINALS NIGHT – Friday 11th July 2014: 6:30pm start finishing about 9:30pm.
                    ALL members are invited to come and watch some spectacular squash!<br /><br />
                    Register by filling out the form below or contact John Richards:</a><a class="arial13grey hoverHG2" href="mailto:leagues@hgsrc.co.uk"> leagues@hgsrc.co.uk.</a><br /><br />
                    <a class= "arial13grey">Entries close 8pm Monday 28th April.<br /><br />
                    Please sign up; we look forward to a repeat GREAT TOURNAMENT with enjoyment for all! 
                    </a>
                    </div>

                    <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
                    <a class="arial13grey">Please enter your details below to register for the tournament.</a>
                    </div>

                    <div style="position:relative; float:left; width:570px; height:400px; padding: 30px 0 0 300px; margin-bottom:30px;">
                    <div style="position:relative; float:left; background-color:#284934; width:400px; height:40px; text-align:center; line-height:40px;">
                    <a class="arial16white"><b>Entry Form</b></a>
                    </div>
                    <div style="position:relative; background-color:#dddddd; float:left; width:398px; height:auto; padding-top:20px; padding-bottom:20px; border-left:1px solid #284934; border-right:1px solid #284934; border-bottom: 1px solid #284934;">
                        <form action="../includes/post-enquiry.php" method="post">
                        <div class="entryFormHeading"><a class="arial13grey">Name:</a></div>
                        <div class="entryFormInput"><input name="name" type="text" value="'.$fullname.'" style=" width:260px; margin:0px; border:none;" maxlength="200" /></div>
                        <div class="entryFormHeading"><a class="arial13grey">Email:</a></div>
                        <div class="entryFormInput"><input name="email" type="text" style=" width:260px; margin:0px; border:none;" maxlength="200" /></div>
                        <div style="position:relative; float:left; width:398px; height:auto; line-height:40px; padding:0 0 0 40px; text-align:left;">
                            <a class="arial13grey">Please your tournament entry type below:</a><br />
                            <input type="radio" name="comp" value="main team competition"/><label class="arial13grey">Full team player</label><br />
                            <input type="radio" name="comp" value="as a reserve" /><label class="arial13grey">Reserve*</label><br />   
                        </div>
                        <div style="position:relative; float:left; width:398px; height:auto; line-height:40px; padding:20px 0 0 40px; text-align:left;">
                            <a class="arial13grey">Please select your membership type below:</a><br />
                            <input type="radio" name="memb" value="adult"/><label class="arial13grey">Adult</label><br />
                            <input type="radio" name="memb" value="junior" /><label class="arial13grey">Junior</label><br />   
                        </div>
                        <div style="position:relative; float:left; width:180px; height:30px; padding:30px 0px 0px 20px;">
                            <input type="submit" name="Submit" value="SUBMIT ENTRY" class="form-button" style=" width:358px; height:30px;" />
                        </div>
                        <div style="position:relative; float:left; width:338px; height:auto; line-height:40px; padding: 20px 0 0 40px; text-align:left;">
                            <a class="arial13grey">*A reserve can be called up by any team and pays £2 to the player they are replacing or their team captain. Reserves are not guaranteed a game in the tournament and only play if they are required!</a>
                        </div>
                        </form>
                    </div>
                    ');
                    
                   */
                   ?>