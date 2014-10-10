<?php

session_start();

if($_SESSION['loggedin'] != "true")
{ header("location:../news/news"); }

/*connect database*/
mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
mysql_select_db('hgsrcwebsite')or die("cannot select DB");

// username and password sent from form 
$title=$_POST['title']; 
$type=$_POST['type']; 
$content1=$_POST['content1'];
$content2=$_POST['content2'];
$content3=$_POST['content3'];
$timestamp = date("F j, Y, g:i a");
$author=$_SESSION['myfullname'];

// To protect MySQL injection (more detail about MySQL injection)
$title = stripslashes($title);
$title = mysql_real_escape_string($title);
$content1 = stripslashes($content1);
$content1 = mysql_real_escape_string($content1);
$content2 = stripslashes($content2);
$content2 = mysql_real_escape_string($content2);
$content3 = stripslashes($content3);
$content3 = mysql_real_escape_string($content3);

$content= $content1."<br /><br />".$content2."<br /><br />".$content3;

$insert="INSERT INTO article (type, title, content, author, timestamp) VALUES('$type','$title','$content','$author','$timestamp')";

mysql_query($insert) or die(mysql_error());

header($_SESSION['page']);

?>