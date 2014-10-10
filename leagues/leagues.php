<?php 
    session_start(); 

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $ID = $_GET['ID']; // This is the type of league

	switch ($ID)
	{
	case 1: $membercolumn = 8; break;
    case 2: $membercolumn = 9; break;
    case 3: $membercolumn = 10; break;
    case 4: $membercolumn = 11; break;
    case 5: $membercolumn = 12; break;
    case 6: $membercolumn = 13; break;
    case 7: $membercolumn = 14; break;
	}

    if ($ID >= 2 && $ID <= 7) // A league that exists 
    {
        $page ='location:../leagues/leagues?ID='.$ID;

        $sql="SELECT * FROM members where league$ID != 0-0";
        $result_members=mysql_query($sql);
		$pcount = 0;
		while($row = mysql_fetch_row($result_members))
		{
			$pcount++;

			$position = explode('-', $row[$membercolumn]);

			$members[$pcount]['league'] = $position[0];
			$members[$pcount]['place'] = $position[1];
			$members[$pcount]['firstname'] = $row[2];
			$members[$pcount]['lastname'] = $row[3];
			$members[$pcount]['email'] = $row[15];
			$members[$pcount]['home'] = $row[16];
			$members[$pcount]['mobile'] = $row[17];

			//echo($members[$pcount]['league'].' '.$members[$pcount]['place']);
		}

		$sql="SELECT * FROM league_detail where TYPE = $ID";
        $result_detail=mysql_query($sql);

        $sql="SELECT * FROM league_header where TYPE = $ID";
        $result_header=mysql_query($sql);
        $count=mysql_num_rows($result);
        $leagueOK = 'true';
    }
    else // no league found so just display all the leagues
    {
        $page ='location:../leagues/leagues';
        $leagueOK = 'false';
    }
        
    $_SESSION['page'] = $page;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Leagues | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Leagues"/>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script>
    $(document).ready(function() {
    $('a.member-window').click(function() {

    //Getting the variable's value from a link
    var memberBox = $(this).attr('href');

	//alert(memberBox);

    //Fade in the Popup
    $(memberBox).fadeIn(300);

    //Set the center alignment padding + border see css style
    var popMargTop = ($(memberBox).height() + 24) / 2;
    var popMargLeft = ($(memberBox).width() + 24) / 2;

    $(memberBox).css({
    'margin-top' : -popMargTop,
    'margin-left' : -popMargLeft
    });

    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);

    return false;
    });

    // When clicking on the button close or the mask layer the popup closed
    $('a.close, #mask').live('click', function() {
    $('#mask , .member-popup').fadeOut(300 , function() {
    $('#mask').remove();
    });
    return false;
    });
    });

  </script>

</head>
<body>

<?php

// performing a search for the usernames of the players in this league

	for($l = 1; $l <= 20; $l++) // league numbers
	{
		for($p = 1; $p <= 7; $p++) // position numbers
		{
			for ($i = 1; $i <= $pcount; $i++) // find players who match this league and position
			{
				if($members[$i]['league'] == $l && $members[$i]['place'] == $p) // match found
				{
					echo('
					<div id="member-box'.$l.'-'.$p.'" class="member-popup">
					<div style="position:relative; float:left; width:360px; height:40px; background-color:#398271; line-height:40px; text-align:center;">
					<a class="arial16white" style="margin: 0 0 0 20px;"><b>'.$members[$i]['firstname'].' '.$members[$i]['lastname'].'</b></a>
					<a href="#" class="close"><img src="../image/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
					</div>
					<div style="position:relative; float:left; width:320px; line-height:32px; text-align:left; padding:20px 20px 0px 20px;">
                    ');

					if ($members[$i]['home'] != "") echo('<a class="arial16grey">Home: '.$members[$i]['home'].' </a><br />');
					if ($members[$i]['mobile'] != "") echo('<a class="arial16grey">Mobile: '.$members[$i]['mobile'].' </a><br />');
					if ($members[$i]['email'] != "") echo('<a class="arial16grey hoverHG2" href="mailto:'.$members[$i]['email'].'">Email: '.$members[$i]['email'].' </a><br />');
					if ($members[$i]['home'] == "" && $members[$i]['mobile'] == "" && $members[$i]['email'] == "") echo('<a class="arial16grey">No Details Found... </a><br />');

                    echo('
                    </div>
					</div>
					');				
				}
			}
		}
	}



?>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
        <?php
        if ($leagueOK == 'false') // for IE7 and the main L1 link and any other ID that gets sent to the page
        {
        echo('
            <div style="position:relative; float:left; width:1020px; height:auto;">
                <div id="altnav" style=" position:relative; float:left; left:285px; margin-top:10px; width:370px; height:auto; text-align:center;">
                    <ul class="altnav">
                        <li><a class= "arial14dgrey" href="?ID=2">Squash: All Members</a></li>
                        <li><a class= "arial14dgrey" href="?ID=3">Squash: 55 & Over</a></li>
                        <li><a class= "arial14dgrey" href="?ID=4">Squash: Juniors</a></li>
                        <li><a class= "arial14dgrey" href="?ID=5">Squash: Ladies</a></li>
                        <li><a class= "arial14dgrey" href="?ID=6">Squash: Doubles</a></li>
                        <li><a class= "arial14dgrey" href="?ID=7">Racketball</a></li>
                    </ul>
                </div>
            </div>
        ');
        }

        else
        {
        echo('
            <div id="box-fullwidth" style="text-align:center;">
            <div id="heading-fullwidth"><a class="arial16white"><b>HGSRC Leagues</b></a></div>
        ');

        ?>
                
        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                    
                
        <?php

		    // For editing the access level must be admin and user logged on

        if($_SESSION['loggedin'] == "true" && ($_SESSION['access_level'] == "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-LEAGUES"))
        {
        echo('
            <div id="editing">
              <ul class="editing">
                <li><a class="arial14white" href="leagues-edit.php?ID='.$ID.'">EDIT LEAGUES</a></li>
              </ul>
            </div>
        ');
        }

                if($_SESSION['loggedin'] == "true")
                {
                    $row = mysql_fetch_row($result_header);

                    // Heading section - contains the  period and deadline

                    echo('
                    <div style="line-height:24px;">
                    <a class="arial16grey"><b>'.$row[1].' Leagues</b></a><br />
                    <a class="arial14grey">'.$row[2].'<br />Matches to be played by '.$row[3].'</a><br />
                    </div>
                    ');

                    // Detail Section

					while($row = mysql_fetch_row($result_detail))

                    {
                        if ($row[2] != "") // this would indicate an empty league table if player 1 is blank
                        {

                        echo('
                                
                        <div style="position:relative; float:left; width:420px; margin:25px;">
                            <table class="league">
                                <tr>
                                    <th colspan="2"><b>LEAGUE '.$row[1].'</b></th>
                                    <td><b>A</b></td>
                                    <td><b>B</b></td>
                                    <td><b>C</b></td>
                                    <td><b>D</b></td>
                                    <td><b>E</b></td>
                        ');
                                    if ($row[7] != "") echo ('<td><b>F</b></td>');

                        echo('
                                </tr>
                                <tr>
                                    <td><b>A</b></td>
                                    <td><a href="#member-box'.$row[1].'-1" class="member-window hoverHG2">'.$row[2].'</a></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td></td>
                                    <td></td>
                        ');
                                    if ($row[7] != "") echo ('<td></td>');
                        echo('
                                </tr>
                                <tr>
                                    <td><b>B</b></td>
                                    <td><a href="#member-box'.$row[1].'-2" class="member-window hoverHG2">'.$row[3].'</a></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td></td>
                        ');
                                    if ($row[7] != "") echo ('<td></td>');
                        echo('
                                </tr>
                                <tr>
                                    <td><b>C</b></td>
                                    <td><a href="#member-box'.$row[1].'-3" class="member-window hoverHG2">'.$row[4].'</a></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;""></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                        ');
                                    if ($row[7] != "") echo ('<td></td>');
                        echo('
                                </tr>
                                <tr>
                                    <td><b>D</b></td>
                                    <td><a href="#member-box'.$row[1].'-4" class="member-window hoverHG2">'.$row[5].'</a></td>
                        ');
                                    if ($row[7] != "") 
                                    echo ('
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    ');
                                    else
                                    echo('
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    ');
                                    
                        echo('
                                </tr>
                                <tr>
                                    <td><b>E</b></td>
                                    <td><a href="#member-box'.$row[1].'-5" class="member-window hoverHG2">'.$row[6].'</a></td>
                        ');
                                    if ($row[7] != "")
                                    echo ('
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    </tr>
                                    <tr>
                                    <td><b>F</b></td>
                                    <td><a href="#member-box'.$row[1].'-6" class="member-window hoverHG2">'.$row[7].'</a></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    ');
                                    else
                                    echo('
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td style="background-color:#dfffdf !important;"></td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color:#666666 !important;"></td>
                                    ');
                        echo('
                                </tr>
                            </table>
                        </div>
                                
                        ');
                    
                        }
                    }
                }
                else 
                {
                echo('<a class="arial14grey">Log in to view the leagues</a>');
                }
                echo('
                </div>
                </div>
                ');
                }
                
                
                ?>

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>