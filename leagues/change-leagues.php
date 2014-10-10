<?php

session_start();

if($_SESSION['loggedin'] != "true")
{ header("location:../index"); }

if($_SESSION['access_level'] != "ADMIN-FULL" && $_SESSION['access_level'] != "ADMIN-LEAGUES")
{ header($page); }

/*connect database*/
mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
mysql_select_db('hgsrcwebsite')or die("cannot select DB");

$ID = $_GET['ID'];

$period = $_POST['period'];
$end_date = $_POST['end_date'];

$l1_players = array(1 => $_POST['p1_1'], $_POST['p2_1'], $_POST['p3_1'], $_POST['p4_1'], $_POST['p5_1'], $_POST['p6_1']);
$l2_players = array(1 => $_POST['p1_2'], $_POST['p2_2'], $_POST['p3_2'], $_POST['p4_2'], $_POST['p5_2'], $_POST['p6_2']);
$l3_players = array(1 => $_POST['p1_3'], $_POST['p2_3'], $_POST['p3_3'], $_POST['p4_3'], $_POST['p5_3'], $_POST['p6_3']);
$l4_players = array(1 => $_POST['p1_4'], $_POST['p2_4'], $_POST['p3_4'], $_POST['p4_4'], $_POST['p5_4'], $_POST['p6_4']);
$l5_players = array(1 => $_POST['p1_5'], $_POST['p2_5'], $_POST['p3_5'], $_POST['p4_5'], $_POST['p5_5'], $_POST['p6_5']);
$l6_players = array(1 => $_POST['p1_6'], $_POST['p2_6'], $_POST['p3_6'], $_POST['p4_6'], $_POST['p5_6'], $_POST['p6_6']);
$l7_players = array(1 => $_POST['p1_7'], $_POST['p2_7'], $_POST['p3_7'], $_POST['p4_7'], $_POST['p5_7'], $_POST['p6_7']);
$l8_players = array(1 => $_POST['p1_8'], $_POST['p2_8'], $_POST['p3_8'], $_POST['p4_8'], $_POST['p5_8'], $_POST['p6_8']);
$l9_players = array(1 => $_POST['p1_9'], $_POST['p2_9'], $_POST['p3_9'], $_POST['p4_9'], $_POST['p5_9'], $_POST['p6_9']);
$l10_players = array(1 => $_POST['p1_10'], $_POST['p2_10'], $_POST['p3_10'], $_POST['p4_10'], $_POST['p5_10'], $_POST['p6_10']);
$l11_players = array(1 => $_POST['p1_11'], $_POST['p2_11'], $_POST['p3_11'], $_POST['p4_11'], $_POST['p5_11'], $_POST['p6_11']);
$l12_players = array(1 => $_POST['p1_12'], $_POST['p2_12'], $_POST['p3_12'], $_POST['p4_12'], $_POST['p5_12'], $_POST['p6_12']);
$l13_players = array(1 => $_POST['p1_13'], $_POST['p2_13'], $_POST['p3_13'], $_POST['p4_13'], $_POST['p5_13'], $_POST['p6_13']);
$l14_players = array(1 => $_POST['p1_14'], $_POST['p2_14'], $_POST['p3_14'], $_POST['p4_14'], $_POST['p5_14'], $_POST['p6_14']);
$l15_players = array(1 => $_POST['p1_15'], $_POST['p2_15'], $_POST['p3_15'], $_POST['p4_15'], $_POST['p5_15'], $_POST['p6_15']);
$l16_players = array(1 => $_POST['p1_16'], $_POST['p2_16'], $_POST['p3_16'], $_POST['p4_16'], $_POST['p5_16'], $_POST['p6_16']);
$l17_players = array(1 => $_POST['p1_17'], $_POST['p2_17'], $_POST['p3_17'], $_POST['p4_17'], $_POST['p5_17'], $_POST['p6_17']);
$l18_players = array(1 => $_POST['p1_18'], $_POST['p2_18'], $_POST['p3_18'], $_POST['p4_18'], $_POST['p5_18'], $_POST['p6_18']);
$l19_players = array(1 => $_POST['p1_19'], $_POST['p2_19'], $_POST['p3_19'], $_POST['p4_19'], $_POST['p5_19'], $_POST['p6_19']);
$l20_players = array(1 => $_POST['p1_20'], $_POST['p2_20'], $_POST['p3_20'], $_POST['p4_20'], $_POST['p5_20'], $_POST['p6_20']);

//correcting bad characters

function correct_characters(array $data)
{
    for ($i = 1; $i <=6; $i++)
    { 
    $data[$i] = stripslashes($data[$i]); 
    $data[$i] = mysql_real_escape_string($data[$i]); 
    }
    return $data;
}

$l1_players = correct_characters($l1_players);
$l2_players = correct_characters($l2_players);
$l3_players = correct_characters($l3_players);
$l4_players = correct_characters($l4_players);
$l5_players = correct_characters($l5_players);
$l6_players = correct_characters($l6_players);
$l7_players = correct_characters($l7_players);
$l8_players = correct_characters($l8_players);
$l9_players = correct_characters($l9_players);
$l10_players = correct_characters($l10_players);
$l11_players = correct_characters($l11_players);
$l12_players = correct_characters($l12_players);
$l13_players = correct_characters($l13_players);
$l14_players = correct_characters($l14_players);
$l15_players = correct_characters($l15_players);
$l16_players = correct_characters($l16_players);
$l17_players = correct_characters($l17_players);
$l18_players = correct_characters($l18_players);
$l19_players = correct_characters($l19_players);
$l20_players = correct_characters($l20_players);

function update_members(array $players, $l, $ID)
{
    for ($p = 1; $p <=6; $p++)
    {
    $player = explode(' ', $players[$p]);
    $update="UPDATE members SET league$ID = '$l-$p' WHERE firstname = '$player[0]' AND lastname = '$player[1]' ";
    //echo ($update);
    mysql_query($update) or die(mysql_error());
    }
}

//set all members to position 0-0 first so leavers don't get included

$update="UPDATE members SET league$ID = '0-0'";
mysql_query($update) or die(mysql_error());

// set league positions

update_members($l1_players, 1, $ID);
update_members($l2_players, 2, $ID);
update_members($l3_players, 3, $ID);
update_members($l4_players, 4, $ID);
update_members($l5_players, 5, $ID);
update_members($l6_players, 6, $ID);
update_members($l7_players, 7, $ID);
update_members($l8_players, 8, $ID);
update_members($l9_players, 9, $ID);
update_members($l10_players, 10, $ID);
update_members($l11_players, 11, $ID);
update_members($l12_players, 12, $ID);
update_members($l13_players, 13, $ID);
update_members($l14_players, 14, $ID);
update_members($l15_players, 15, $ID);
update_members($l16_players, 16, $ID);
update_members($l17_players, 17, $ID);
update_members($l18_players, 18, $ID);
update_members($l19_players, 19, $ID);
update_members($l20_players, 20, $ID);

function insert_detail(array $players,$number,$type)
{
    $insert="UPDATE league_detail SET player_1='$players[1]', player_2='$players[2]', player_3='$players[3]', player_4='$players[4]', player_5='$players[5]', player_6='$players[6]' WHERE number = '$number' AND type = '$type' ";
    mysql_query($insert) or die(mysql_error());
}

insert_detail($l1_players,'1',$ID);
insert_detail($l2_players,'2',$ID);
insert_detail($l3_players,'3',$ID);
insert_detail($l4_players,'4',$ID);
insert_detail($l5_players,'5',$ID);
insert_detail($l6_players,'6',$ID);
insert_detail($l7_players,'7',$ID);
insert_detail($l8_players,'8',$ID);
insert_detail($l9_players,'9',$ID);
insert_detail($l10_players,'10',$ID);
insert_detail($l11_players,'11',$ID);
insert_detail($l12_players,'12',$ID);
insert_detail($l13_players,'13',$ID);
insert_detail($l14_players,'14',$ID);
insert_detail($l15_players,'15',$ID);
insert_detail($l16_players,'16',$ID);
insert_detail($l17_players,'17',$ID);
insert_detail($l18_players,'18',$ID);
insert_detail($l19_players,'19',$ID);
insert_detail($l20_players,'20',$ID);

//Update the heading

$update="UPDATE league_header SET period='$period', end_date='$end_date' WHERE type = '$ID' ";
mysql_query($update) or die(mysql_error());

header("location:leagues?ID=$ID");

?>