<?php

session_start();

/*connect database*/
mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
mysql_select_db('hgsrcwebsite')or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);


$key = 'master';
$string = ' '.$mypassword.' ';
$mypassword = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));

$sql="SELECT * FROM members WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$row = mysql_fetch_row($result);

// Register $myusername, $mypassword and redirect to file "$page"
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
$_SESSION['myfullname'] = $row[2]." ".$row[3];
$_SESSION['access_level'] = $row[4];

$_SESSION['loggedin'] = "true";
    if ($_SESSION['page'] == '')
    {
    header("location:../index");
    }
    else
    {
    header($_SESSION['page']);
    }
}
else 
{
$_SESSION['loggedin'] = "wrong";
header($_SESSION['page']);
}
?>