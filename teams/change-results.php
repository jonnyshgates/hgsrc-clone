<?php 
    session_start();
    $page = $_SESSION['page'];

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['loggedin'] != "true" && ($_SESSION['access_level'] != "ADMIN-FULL" || $_SESSION['access_level'] == "ADMIN-TEAMS"))
    { header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $sql="SELECT * FROM fixtures_detail";
    $result=mysql_query($sql);

    $team = $_SESSION['team'];
    $fixture = $_POST['fixture'];
    $home = $_POST['home'];
    $away = $_POST['away'];

    echo ($team.$fixture.$home.$away);

    $update="UPDATE fixtures_detail SET home_score ='$home', away_score = '$away' WHERE team = '$team' and fixture_number = '$fixture'";
    mysql_query($update) or die(mysql_error());

    header($page);
?>