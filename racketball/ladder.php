<?php 
    session_start(); 
    $page ="location:../racketball/ladder";
    $_SESSION['page'] = $page;

    //header("location:../index"); // stops the page
    $member = $_SESSION['myusername'];

    //if($_SESSION['access_level'] != "ADMIN-FULL")
    //{ header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $sql="SELECT * FROM members where r_ladder > 0";

    $result1 = mysql_query($sql);
    $ladder_count=mysql_num_rows($result1);

    // set up array of results
    $participants = array();
    while($row = mysql_fetch_row($result1))
    {
    $participants[$row[6]] = $row; // $row[6] is the racketball ladder position - this should sort them
    // test if logged in user is on the ladder
    if(strtoupper($row[0]) == strtoupper($_SESSION['myusername'])) $onladder = 'true';
    else if ($onladder != 'true') $onladder = 'false';
    }

    //function to post the positions of the ladder
    
    function post_position($n, array $participants, $user, $onladder)
    {
        if( strtoupper($participants[$n][0]) == strtoupper($user)) // me!
        {
            echo('
            <tr>
            <td style="color:#2a4971 !important;"><b>'.$n.'</b></td>
            <td style="color:#2a4971 !important;"><b>'.$participants[$n][2].' '.$participants[$n][3].'</b></td>
            </tr>
            ');
        }
        else
        {
            echo('
            <tr>
            <td>'.$n.'</td>
            
            ');
            
            if ($onladder != 'false')
            {
				echo('
				<td><div id="result">
				<a class="result-window hoverHG2" href="#result-box'.$participants[$n][0].'">'.$participants[$n][2].' '.$participants[$n][3].'</a></div></td></tr>
				');
            }
            else
            {
                echo('
                <td>'.$participants[$n][2].' '.$participants[$n][3].'</td>
                </tr>
                ');  
            }
        }
    }

    // function to post the results

    function post_result($winner,$loser,$date,$w,$l,$bg)
    {
        echo
        ('	
        <tr>
        <td style="background-color:'.$bg.';">'.$date.'</td>
        <td style="background-color:'.$bg.';"><img src="../image/bullets/bullet-ccccff.png" /></td>
        <td style="background-color:'.$bg.';"><b>'.$winner.' </b></td>
        <td style="background-color:'.$bg.';"><b>'.$w.'</b> - <b>'.$l.'</b></td>
        <td style="background-color:'.$bg.';"><b>'.$loser.'</b></td>
        </tr>
        ');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Racketball Ladder | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Racketball Ladder"/>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script>
			$(document).ready(function() {
			$('a.result-window').click(function() {

			//Getting the variable's value from a link
			var resultBox = $(this).attr('href');

			//Fade in the Popup
			$(resultBox).fadeIn(300);

			//Set the center alignment padding + border see css style
			var popMargTop = ($(resultBox).height() + 24) / 2;
			var popMargLeft = ($(resultBox).width() + 24) / 2;

			$(resultBox).css({ 'margin-top' : -popMargTop, 'margin-left' : -popMargLeft });

			// Add the mask to body
			$('body').append('<div id="mask"></div>');
			$('#mask').fadeIn(300);

			return false;
			});

			// When clicking on the button close or the mask layer the popup closed
			$('a.close, #mask').live('click', function() {
			$('#mask , .RBresult-popup').fadeOut(300 , function() {
			$('#mask').remove();
			});
			return false;
			});
			});

		</script>
	
</head>
<body>

<?php

for($i=1; $i<=$ladder_count; $i++)
{

	echo('
			<div id="result-box'.$participants[$i][0].'" class="RBresult-popup">
				<div style="position:relative; float:left; width:360px; height:40px; background-color:#2a4971; line-height:40px; text-align:center;">
				<a class="arial16white" style="margin: 0 0 0 20px;"><b>Please Enter the Score</b></a>
				<a href="#" class="close"><img src="../image/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
				</div>
				<form action="../racketball/ladder-result" method="post">

					<div style="position:relative; float:left; width:160px; text-align:center; padding:20px 0 20px 20px;">
					<a class="arial14grey">Your Score</a>
					</div>
					<div style="position:relative; float:left; width:160px; text-align:center; padding:20px 20px 20px 0;">
					<a class="arial14grey">'.$participants[$i][2].'\'s Score</a>
					</div>
					<div style="position:relative; float:left; width:160px; text-align:center; margin:0 0 20px 20px;">
					<input name="myscore" type="text" style=" width:100px; height:100px; font-size:60px; color:#666666; text-align:center;" maxlength="2" />
					</div>
					<div style="position:relative; float:left; width:160px; text-align:center; margin:0 20px 20px 0;">
					<input name="oppscore" type="text" style=" width:100px; height:100px; font-size:60px; color:#666666; text-align:center;" maxlength="2" />
					</div>
					<input type="hidden" name="Opp" value="'.$participants[$i][0].'">
					<button type="submit" name="Submit" style="font-size:14px; color:#666666; width:260px; height:30px; line-height:14px;">Post Result</button>
				</form>
			</div>
		');

}

?>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#2a4971; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>HGSRC Racketball Ladder</b></a></div>
		        <?php
                if($_SESSION['loggedin'] == "true")
                {
                    echo('

                    <div id="Ladder" style="position:relative; float:left; width:460px; height:auto; text-align:left; line-height:16px; padding:20px 0px 20px 20px;">
                        <table class="RBladder">
                            <tr><th><b>Position</b></th><th><b>Name</b></th></tr>
                    ');
                     
                     for($i=1; $i<=$ladder_count; $i++) post_position($i, $participants, $_SESSION['myusername'], $onladder); 
                            if ($onladder == 'false')
                            {
                            echo('
                            <th colspan="2"><a class="arial14white hoverGrey" href="../racketball/ladder-option?choice=join">Join the Ladder</a></th>
                            ');
                            }
                            else
                            {
                            echo('
                            <th colspan="2"><a class="arial14white hoverGrey" href="../racketball/ladder-option?choice=leave">Leave the Ladder</a></th>
                            ');
                            }
                    echo('
                        </table>
                    </div>

					<div id="Rules" style="position:relative; float:left; width:460px; height:auto; line-height:20px; padding:20px 20px 0px 20px;">
						<div style="text-align:center;">
						<a class="arial12grey"><b>Welcome to the Racketball Ladder. The rules are as follows:</b></a>
						</div>
						<div style="text-align:left;">
						<ul class="arial12grey">
						<li>Any member of the club is free to join the ladder and will always start at the bottom position regardless of ability... <a class="arial12grey hoverGrey" href="../racketball/ladder-option?choice=join"><b> Click here </b></a> to join.</li>
						<li>All best of 5 games can be counted as ladder games - including league games, tournament games and friendlies.</li>
						<li>To record a score, click your opponent\'s name and enter the score. The 20 most recent results are shown below.</li>
						<li>A win against a player positioned above you means you take their position and everybody below moves down by 1.</li>
						<li>A loss against a player positioned above you or any draw means no change to positions but the result is still logged.</li>
						<li>Please use the ladder fairly and report any mistakes or errors to <a class="arial12grey hoverGrey" href="mailto:webmaster@hgsrc.co.uk"><b>webmaster@hgsrc.co.uk</b></a>. If you wish to leave the ladder,<a class="arial12grey hoverGrey" href="../racketball/ladder-option?choice=leave"><b> Click here. </b></a> </li>
						</ul>
						</div>
					</div>
                
                    <div id="Results" style="position:relative; float:left; width:460px; height:auto; text-align:left; line-height:20px; padding:0px 20px 20px 0px;">
                        <div style="position:relative; float:left; width:450px; background-color:#ffffff; height:auto; border:5px solid #ccccff; margin:20px 0px 0px 20px;">
		                    <div style="position:relative; float:left; background-color:#2a4971; width:450px; height:32px; text-align:center; line-height:32px; "><a class="arial14white"><b>Latest Results</b></a></div>
				            <table class="results">
                     ');
                        
                        $sql="SELECT * FROM rb_results";
                        $result2 = mysql_query($sql);
                        $result_count=mysql_num_rows($result2);
                        

                        $results = array();
                        while($row = mysql_fetch_row($result2))
                        $results[] = $row;

                        if($result_count <= 20)
                        {
                            for ($i=($result_count-1); $i>=0; $i--)
                            {
                            if($i % 2 == 1) {$bg = '#efefff';}
                            else {$bg = '#ffffff';}
                            post_result($results[$i][0],$results[$i][1],$results[$i][2],$results[$i][3],$results[$i][4],$bg);
                            }
                        }
                        else
                        {
                            for ($i=($result_count-1); $i>=($result_count-21); $i--)
                            {
                            if($i % 2 == 1) {$bg = '#efefff';}
                            else {$bg = '#ffffff';}
                            post_result($results[$i][0],$results[$i][1],$results[$i][2],$results[$i][3],$results[$i][4],$bg);
                            }
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
                <a class="arial14grey">Log in to view the ladder</a>
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
















