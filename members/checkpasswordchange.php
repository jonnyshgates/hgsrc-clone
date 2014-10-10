<?php

session_start();

/*connect database*/
mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
mysql_select_db('hgsrcwebsite')or die("cannot select DB");

// username and password from session
$myusername=$_SESSION['myusername']; 
$mypassword=$_SESSION['mypassword'];

// take posted old password and encrypt to match session password
$oldpassword=$_POST['oldpassword'];
$key = 'master';
$string = ' '.$oldpassword.' ';
$oldpassword = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));

$newpassword1=$_POST['newpassword1'];
$newpassword2=$_POST['newpassword2'];

// To protect MySQL injection
$newpassword1 = stripslashes($newpassword1);
$newpassword2 = stripslashes($newpassword2);
$newpassword1 = mysql_real_escape_string($newpassword1);
$newpassword2 = mysql_real_escape_string($newpassword2);

// test if passwords match & above minimum characters
if ($newpassword1 == $newpassword2 && $oldpassword == $mypassword && strlen($newpassword1) > 4 )
{
$_SESSION['matched'] = "matched";
$newpassword = $newpassword1;
$key = 'master';
$string = ' '.$newpassword.' ';
$newpassword = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
$update="UPDATE members SET password='$newpassword' where username='$myusername' and password='$mypassword'";
mysql_query($update) or die(mysql_error());
$_SESSION['loggedin'] = "false";
header("location:../members/change-password.php");
}
else if (strlen($newpassword1) < 4)
{
    $_SESSION['matched'] = "short";
    header("location:../members/change-password.php");
}
else
{
$_SESSION['matched'] = "different";
header("location:../members/change-password.php");
}

?>

// code to decrypt:
//$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");