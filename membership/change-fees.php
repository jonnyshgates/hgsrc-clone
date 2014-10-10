<?php

session_start();
$page = $_SESSION['page'];

if($_SESSION['loggedin'] != "true")
{ header($page); }

if($_SESSION['access_level'] != "ADMIN-FULL")
{ header($page); }

/*connect database*/
mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
mysql_select_db('hgsrcwebsite')or die("cannot select DB");

$HGSRC_year_single = $_POST['HGSRC_year_single'];
$HGSRC_month_single = $_POST['HGSRC_month_single'];
$HGSRC_year_joint = $_POST['HGSRC_year_joint'];
$HGSRC_year_family = $_POST['HGSRC_year_family'];
$HGSRC_senior = $_POST['HGSRC_senior'];
$HGSRC_student = $_POST['HGSRC_student'];
$HGSRC_junior = $_POST['HGSRC_junior'];

$HGSRC_OP_single = $_POST['HGSRC_OP_single'];
$HGSRC_OP_family = $_POST['HGSRC_OP_family'];
//$HGSRC_OP_senior = $_POST['HGSRC_OP_senior'];
$HGSRC_OP_junior = $_POST['HGSRC_OP_junior'];

$HGSA_single = $_POST['HGSA_single'];
$HGSA_joint = $_POST['HGSA_joint'];
$HGSA_family = $_POST['HGSA_family'];
$HGSA_senior = $_POST['HGSA_senior'];
$HGSA_student = $_POST['HGSA_student'];
$HGSA_junior = $_POST['HGSA_junior'];

$keyfob_adult = $_POST['keyfob_adult'];
$keyfob_junior = $_POST['keyfob_junior'];

$credit_adult = $_POST['credit_adult'];
$credit_junior = $_POST['credit_junior'];

function insert_data($value,$ID)
{
$insert="UPDATE fees SET amount='$value' WHERE ID = '$ID'";
mysql_query($insert) or die(mysql_error());
}

insert_data($HGSRC_year_single,'1');
insert_data($HGSRC_month_single,'2');
insert_data($HGSRC_year_joint,'3');
insert_data($HGSRC_year_family,'4');
insert_data($HGSRC_senior,'5');
insert_data($HGSRC_student,'6');
insert_data($HGSRC_junior,'7');

insert_data($HGSRC_OP_single,'11');
insert_data($HGSRC_OP_family,'12');
insert_data($HGSRC_OP_senior,'13');
insert_data($HGSRC_OP_junior,'14');

insert_data($HGSA_single,'21');
insert_data($HGSA_joint,'22');
insert_data($HGSA_family,'23');
insert_data($HGSA_senior,'24');
insert_data($HGSA_senior,'25');
insert_data($HGSA_junior,'26');

insert_data($keyfob_adult,'31');
insert_data($keyfob_junior,'32');

insert_data($credit_adult,'41');
insert_data($credit_junior,'42');


header("location:fees.php");

?>