<?php

session_start();

if($_SESSION['loggedin'] != "true")
{ header($page); }

if($_SESSION['access_level'] != "ADMIN-FULL")
{ header($page); }

/*connect database*/
mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
mysql_select_db('hgsrcwebsite')or die("cannot select DB");

function makesafe($data)
{
    $data = stripslashes($data);
    $data = mysql_real_escape_string($data);
    return $data;
}

$memberpassword = makesafe($_POST['memberpassword']);

// encrypt posted password
$key = 'master';
$string = ' '.$memberpassword.' ';
$memberpassword = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));

$originalusername = makesafe($_POST['originalusername']);

$memberusername = makesafe($_POST['memberusername']);

$memberfirstname = makesafe($_POST['memberfirstname']);

$memberlastname = makesafe($_POST['memberlastname']);

$memberphone = makesafe($_POST['memberphone']);

$membermobile = makesafe($_POST['membermobile']);

$memberemail = makesafe($_POST['memberemail']);

// test if it's an existing or new user

$sql="SELECT * FROM members where USERNAME = '$originalusername'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

    if ($_SESSION['foundmember'] == true) //existing
    {
        //echo ($originalusername.' '.$memberusername);
        $update="UPDATE members SET username='$memberusername', password='$memberpassword', firstname='$memberfirstname', lastname='$memberlastname', email='$memberemail', phone='$memberphone', mobile='$membermobile' WHERE username = '$originalusername'";
        mysql_query($update) or die(mysql_error());
        $_SESSION['confirmation'] = 'Successfully updated member '.$memberusername;
    }
    else
    {
        $insert="INSERT INTO members (username, password, firstname , lastname, access, email, phone, mobile) VALUES ('$memberusername',  '$memberpassword',  '$memberfirstname',  '$memberlastname',  'MEMBER', '$memberemail', '$memberphone', '$membermobile')";
        mysql_query($insert) or die(mysql_error());
        $_SESSION['confirmation'] = 'Successfully added member '.$memberusername;
    }

header("location:member-lookup");

?>