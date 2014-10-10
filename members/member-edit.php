<?php 
    session_start(); 
    $page ="location:../index";
    $_SESSION['page'] = $page;

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['access_level'] != "ADMIN-FULL")
    { header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $memberusername=$_POST['memberusername'];

    $sql="SELECT * FROM members where USERNAME = '$memberusername'";
    
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);


    if ($count == 1)
    {
    $_SESSION['foundmember'] = true;
    $row = mysql_fetch_row($result);
    $key = 'master';
    $password = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($row[1]), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    $password = str_replace(" ","",$password);
    }
    else $_SESSION['foundmember'] = false;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Edit Member | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Edit Members</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:20px; padding:20px;">

                <?php
                    
                    echo('

                    <form action="../members/post-member" method="post">
                    <input type="hidden" name="originalusername" value="'.$memberusername.'">
					<div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">User Name:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="memberusername" type="text" value="'.$memberusername.'" readonly style=" width:200px; padding:4px;" maxlength="100" /></div>
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">Password:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="memberpassword" type="password" value="'.$password.'" style=" width:200px; padding:4px;" maxlength="100" /></div>
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">First Name:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="memberfirstname" type="text" value="'.$row[2].'" style=" width:200px; padding:4px;" maxlength="100" /></div>
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">Last Name:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="memberlastname" type="text" value="'.$row[3].'" style=" width:200px; padding:4px;" maxlength="100" /></div>
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">Home Tel:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="memberphone" type="text" value="'.$row[16].'" style=" width:200px; padding:4px;" maxlength="100" /></div>
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">Mobile:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="membermobile" type="text" value="'.$row[17].'" style=" width:200px; padding:4px;" maxlength="100" /></div>
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">Email:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;"><input name="memberemail" type="text" value="'.$row[15].'" style=" width:200px; padding:4px;" maxlength="100" /></div>
                    
                    <!--
                    <div style="position:relative; float:left; width:80px; top:8px; height:auto;"><a class="arial12grey">Access Level:</a></div>
                    <div style="position:relative; float:left; width:860px; height:auto;">
                    <select name="membertype" style=" width:200px; padding:4px;">
                    <option >MEMBER</option>
                    <option >ADMIN-LEAGUES</option>
                    <option >ADMIN-TEAMS</option>
                    <option >ADMIN-FULL</option>
                    </select>
                    </div>
                    -->

                    <div style="position:relative; float:left; width:940px; padding-top:20px; height:auto;"><input type="submit" value="Save Member" class="arial14black" style=" width:280px; height:40px; " /></div>
                    
                    </form>
                
                    ')
                ?>
            
                
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>
<!--
code to decrypt:
$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
-->