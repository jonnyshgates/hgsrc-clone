<?php 
    session_start(); 
    $page ="location:../index";
    $_SESSION['page'] = $page;

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['access_level'] != "ADMIN-FULL")
    { header($page); }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Member Lookup | Holmer Green Squash & Racketball Club</title>
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
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Look Up Member</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:20px; padding:20px;">
                    
                    <div style="position:relative; float:left; width:400px; top:8px; height:auto;">
                    <form action="../members/member-edit" method="post">
                    <a class="arial12grey">User Name: </a>
                    <input name="memberusername" type="text" style=" width:100px; margin:4px;" maxlength="20" />
                    <input type="submit" name="Submit" value="Edit" style=" width:60px; margin:4px;" />
                    </form>
                    </div>
                    <div style="position:relative; float:left; width:400px; top:8px; height:auto;"><a class="arial12red"><?php echo($_SESSION['confirmation']); ?></a></div>
                    
                

            
                
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>