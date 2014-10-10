<?php 
    session_start();
    
    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['loggedin'] != "true" && ($_SESSION['access_level'] != "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-TEAMS" || $_SESSION['access_level'] == "ADMIN-JUNIORS" || $_SESSION['access_level'] == "ADMIN-RB"))
    { header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");
    
    $team = $_GET['team'];
    $fixture = $_GET['fixture'];
    $action = $_GET['action'];
    $count = $_GET['count'];
    
    function makesafe($string) // To protect MySQL injection
    {
    $string = stripslashes($string);
    $string = mysql_real_escape_string($string);
    return $string;
    }
    
    if ($action == 'up' && $fixture != 1)
    {
      $newfixture = $fixture-1;
      
      $update="UPDATE fixtures_detail SET fixture_number = 99 WHERE team = '$team' AND fixture_number = '$fixture'"; // change to temp position
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE fixtures_detail SET fixture_number = '$fixture' WHERE team = '$team' AND  fixture_number = '$newfixture'"; // change fixture above to this fixture
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE fixtures_detail SET fixture_number = '$newfixture' WHERE team = '$team' AND  fixture_number = 99"; // change temp fixture to fixture above
      mysql_query($update) or die(mysql_error());
      
      $anchor = $newfixture;
    }
    
    if ($action == 'down' && $fixture != $count)
    {
      $newfixture = $fixture+1;
      
      $update="UPDATE fixtures_detail SET fixture_number = 99 WHERE team = '$team' AND  fixture_number = '$fixture'"; // change to temp position
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE fixtures_detail SET fixture_number = '$fixture' WHERE team = '$team' AND  fixture_number = '$newfixture'"; // change rank above to this rank
      mysql_query($update) or die(mysql_error());
      
      $update="UPDATE fixtures_detail SET fixture_number = '$newfixture' WHERE team = '$team' AND  fixture_number = 99"; // change temp rank to rank above
      mysql_query($update) or die(mysql_error());
      
      $anchor = $newfixture;
    }
    
    if ($action == 'remove')
    {
      $delete="DELETE from fixtures_detail WHERE team = '$team' AND  fixture_number = '$fixture'";
      mysql_query($delete) or die(mysql_error());
      
      for ($i=$fixture; $i<=$count; $i++)
      {
        $oldfixture = $i + 1;
        $update="UPDATE fixtures_detail SET fixture_number = '$i' WHERE team = '$team' AND  fixture_number = '$oldfixture'"; // move each fixture up one position
        mysql_query($update) or die(mysql_error());
      }
      
      $anchor = $fixture - 1;
    }
    
    if (isset($_POST['date']))
    {
      $team = makesafe($_POST['team']);
      $fixture = makesafe($_POST['fixture']);
      $date = makesafe($_POST['date']);
      $HA = makesafe($_POST['HA']);
      $opponent = makesafe($_POST['opponent']);
      
      $update="UPDATE fixtures_detail SET date = '$date', opponent = '$opponent', H_A = '$HA' WHERE team = '$team' AND fixture_number = '$fixture'";
      mysql_query($update) or die(mysql_error());
      
      $anchor = $fixture;
    }
    
    $page = "location:../teams/fixtures-edit?team=$team#fixture$anchor";
    header($page);
?>