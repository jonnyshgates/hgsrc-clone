<?php 
    session_start(); 
    $page ="location:../index";
    $_SESSION['page'] = $page;

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    $opponent = $_POST['Opp'];
    $myscore = $_POST['myscore'];
    $oppscore = $_POST['oppscore'];
    
    // find who won and go back if no or invalid score is entered 
    
    if (isset($myscore) && isset($oppscore) && is_numeric($myscore) && is_numeric($oppscore) && $myscore >= 0 && $oppscore >= 0)
    {
      if($myscore > $oppscore) 
      {
        $myresult = 'win';
        $winnerscore = $myscore;
        $loserscore = $oppscore;
      }
      if($myscore < $oppscore)
      {
        $myresult = 'loss';
        $winnerscore = $oppscore;
        $loserscore = $myscore;
      }
      if ($myscore == $oppscore) 
      {
        $myresult = 'draw';
        $winnerscore = $myscore; // doesn't matter if my score is classed as the winning score because the positions won't change
        $loserscore = $oppscore;
      }  
    }
    
    else { header("location:ladder"); }
    

    if(isset($opponent) && isset($myresult))
    {

        /*connect database*/
        mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
        mysql_select_db('hgsrcwebsite')or die("cannot select DB");

        $sql="SELECT * FROM members where r_ladder > 0";

        $result = mysql_query($sql);
        $count=mysql_num_rows($result);

        // set up array of results
        $participants = array();
        while($row = mysql_fetch_row($result))
        { 

        $participants[$row[6]] = $row; // $row[6] is the racketball ladder postion

        if( strtoupper($participants[$row[6]][0]) == strtoupper($_SESSION['myusername'])) // found me
            {
			    if ($myresult == 'win' || $myresult == 'draw')
                {
                $winner = $participants[$row[6]][6];
                $winnername = ($participants[$row[6]][2].' '.$participants[$row[6]][3]);
                }
			    elseif ($myresult == 'loss')
                {
                $loser = $participants[$row[6]][6];
                $losername = ($participants[$row[6]][2].' '.$participants[$row[6]][3]);
                }
            }
        if( strtoupper($participants[$row[6]][0]) == strtoupper($opponent)) // found opponent
            {
			    if ($myresult == 'win' || $myresult == 'draw') 
                {
                $loser = $participants[$row[6]][6];
                $losername = ($participants[$row[6]][2].' '.$participants[$row[6]][3]);
                }
			    elseif ($myresult == 'loss')
                {
                $winner = $participants[$row[6]][6];
                $winnername = ($participants[$row[6]][2].' '.$participants[$row[6]][3]);
                }
            }
        }

        if(isset($winner) && isset($loser))

	    if ($winner < $loser || $myresult == 'draw')
	    {
	    } // no change in position

	    else
	    {
		    $update="UPDATE members SET r_ladder='9999' WHERE r_ladder = '$winner'"; // temporarily move the winner
		    mysql_query($update) or die(mysql_error());
        
		    for($i=$winner; $i>$loser; $i--)
		    {
			    $new = $i-1;
			    $update="UPDATE members SET r_ladder='$i' WHERE r_ladder = '$new'";
			    mysql_query($update) or die(mysql_error());
		    }
        
		    $update="UPDATE members SET r_ladder='$loser' WHERE r_ladder = '9999'"; // the winner now has the loser's position
		    mysql_query($update) or die(mysql_error());
	    }

        $timestamp = date("j F Y");

        if($winnername != '' && $losername != '')
        {
            $insert = "INSERT into rb_results VALUES ('$winnername','$losername','$timestamp','$winnerscore','$loserscore')";
	        mysql_query($insert) or die(mysql_error());
        }
    }

	header("location:ladder");
?>