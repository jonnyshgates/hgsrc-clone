<?php 
    session_start();
    

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['loggedin'] != "true" && ($_SESSION['access_level'] != "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-TEAMS"))
    { header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");
    
    $rank = $_GET['rank'];
    $action = $_GET['action'];

    $select="SELECT * FROM members WHERE s_ranking = '$rank'";
    $result = mysql_query($select);
    $row = mysql_fetch_row($result);
    
    function makesafe($string) // To protect MySQL injection
    {
    $string = stripslashes($string);
    $string = mysql_real_escape_string($string);
    return $string;
    }
    
    if ($action == 'up' && $rank != 1)
    {
      $newrank = $rank-1;
      
      $update="UPDATE members SET s_ranking = 99 WHERE s_ranking = '$rank'"; // change to temp position
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE members SET s_ranking = '$rank' WHERE s_ranking = '$newrank'"; // change rank above to this rank
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE members SET s_ranking = '$newrank' WHERE s_ranking = 99"; // change temp rank to rank above
      mysql_query($update) or die(mysql_error());
      
      $anchor = $newrank;
    }
    
    if ($action == 'down' && $rank != 30)
    {
      $newrank = $rank+1;
      
      $update="UPDATE members SET s_ranking = 99 WHERE s_ranking = '$rank'"; // change to temp position
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE members SET s_ranking = '$rank' WHERE s_ranking = '$newrank'"; // change rank above to this rank
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE members SET s_ranking = '$newrank' WHERE s_ranking = 99"; // change temp rank to rank above
      mysql_query($update) or die(mysql_error());
      
      $anchor = $newrank;
    }
    
    if ($action == 'remove')
    {
      $update="UPDATE members SET s_ranking = 0 WHERE s_ranking = '$rank'"; // set rank to 0
      mysql_query($update) or die(mysql_error());
      
      $anchor = $rank;
    }
    
    if (isset($_POST['name']))
    {
      $name = makesafe($_POST['name']);
      $rank = makesafe($_POST['position']);
      
      $update="UPDATE members SET s_ranking = '$rank' WHERE username = '$name'";
      mysql_query($update) or die(mysql_error());
      
      $anchor = $rank;
    }
    
    if (isset($_POST['period']))
    {
      $period = makesafe($_POST['period']);
      
      $update="UPDATE rankings SET period = '$period'";
      mysql_query($update) or die(mysql_error());
      
      $anchor = $rank;
    }
    
    $page = "location:../teams/rankings#rank$anchor";
    header($page);
?>