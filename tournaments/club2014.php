<?php 
    session_start(); 
    $page ="location:../tournaments/club2014";
    $_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Club Closed Squash Tournament 2014 | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Club Closed Squash Tournament 2014"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>HGSRC Closed Squash Tournament 2014</b></a></div>
		        <div class="honours" style="left:250px;">

                 <div style=" width:400px; height:10px; background-image:url(../image/woodbg-t.png)"></div>
                    <div style=" width:320px; height:auto; background-image:url(../image/woodbg.png); padding:40px;">
                    <a class="arial20-ddb93d">
                    2014 Winners<br /><br />
                    </a>
                    <a class="arial16-ddb93d">
                 Mens A Winner - Alex Hartley<br /><br />       
                 Mens B Winner - Dean Herritty<br /><br />          
                 Mens C Winner - Matthew Wooster<br /><br />
                 Veterans Winner - Mike Hartley<br /><br /> 
                 Ladies Winner - Rebecca Meyrick<br /><br />
                 Mens A Plate - Phil Beukes<br /><br />       
                 Mens B Plate - David Cawley<br /><br />          
                 Mens C Plate - Matty Gallagher<br /><br />
                 </a>
                    </div>
                    <div style=" width:400px; height:10px; background-image:url(../image/woodbg-b.png)"></div>
                    </div>
                 <div style="margin-left:auto; margin-right:auto; width:1000px; text-align:left; ">
        <?php
        /*
        if( $_SESSION['entry'] == 'sent')
        {
        echo('
        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
        <a class="arial18grey">Thanks for entering and good luck!</a>
        </div>
        ');
        }

        if( $_SESSION['entry'] == 'none')
        {
        echo('
        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
        <a class="arial18grey">You didn\'t tick any boxes!</a>
        </div>
        ');
        }


        $_SESSION['entry'] = '';

        


        if($_SESSION['loggedin'] == "true")
        {

        

        

       

        

        echo('

        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 0 0;">
        <a class="arial13grey">Please enter your details below to register for the tournament.</a>
        </div>

        <div style="position:relative; float:left; width:570px; height:400px; padding: 30px 0 0 300px; margin-bottom:30px;">
            <div style="position:relative; float:left; background-color:#284934; width:400px; height:40px; text-align:center; line-height:40px;">
                <a class="arial16white"><b>Entry Form</b></a>
            </div>
            <div style="position:relative; background-color:#dddddd; float:left; width:398px; height:auto; padding-top:20px; padding-bottom:20px; border-left:1px solid #284934; border-right:1px solid #284934; border-bottom: 1px solid #284934;">
                <form action="../includes/post-enquiry.php" method="post">
                    <div class="entryFormHeading"><a class="arial13grey">Name:</a></div>
                    <div class="entryFormInput"><input name="name" type="text" value="'.$fullname.'" style=" width:260px; margin:0px; border:none;" maxlength="200" /></div>
                    <div class="entryFormHeading"><a class="arial13grey">Email:</a></div>
                    <div class="entryFormInput"><input name="email" type="text" style=" width:260px; margin:0px; border:none;" maxlength="200" /></div>
                    <div style="position:relative; float:left; width:398px; height:auto; line-height:40px; padding:0 0 0 40px; text-align:left;">
                        <a class="arial13grey">Please tick the competition(s) you\'d like to enter below*</a><br />
                        <input type="checkbox" name="comp[]" value="Mens A Singles"/><label class="arial13grey">Mens A Singles</label><br />
                        <input type="checkbox" name="comp[]" value="Mens B Singles" /><label class="arial13grey">Mens B Singles</label><br /> 
                        <input type="checkbox" name="comp[]" value="Mens C Singles" /><label class="arial13grey">Mens C Singles</label><br />  
                        <input type="checkbox" name="comp[]" value="Veterans Singles" /><label class="arial13grey">Veterans (over 45) Singles</label><br />  
                        <input type="checkbox" name="comp[]" value="Ladies Singles" /><label class="arial13grey">Ladies Singles</label><br />     
                    </div>
                    <div style="position:relative; float:left; width:180px; height:30px; padding:30px 0px 0px 20px;">
                        <input type="submit" name="Submit" value="SUBMIT ENTRY" class="form-button" style=" width:358px; height:30px;" />
                    </div>
                    <div style="position:relative; float:left; width:398px; height:auto; line-height:40px; padding: 20px 0 0 40px; text-align:left;">
                        <a class="arial13grey">*Any member can enter one of the mens or ladies singles competitions and the veterans if eligible.</a>  
                    </div>
                </form>
            </div>
        </div>

        ');

        

        }

        else
        {
            echo('

        <div style="position:relative; float:left; width:100%; text-align:center; padding: 30px 0 30px 0;">
        <a class="arial13grey">Please log in to view the tournament results.</a>
        </div>
        ');
        }

        */
        ?>

    </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>