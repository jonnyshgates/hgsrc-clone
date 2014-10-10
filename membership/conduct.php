
<?php 
    session_start(); 
    $page ="location:../membership/membership-application";
    $_SESSION['page'] = $page;

    //$to = "ben.raftery@abl-systems.co.uk";
    //$subject = "Test mail";
    //$message = "Hello! This is a simple email message.";
    //$from = "someonelse@example.com";
    //$headers = "From:" . $from;
    //mail($to,$subject,$message,$headers);
    //echo "Mail Sent.";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Application | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Membership Application"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Application Form</b></a></div>
		        
                <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                <a class="arial14grey">Application Form.</a>
                <a class="arial14grey hoverHG2" href="../download/HGSRC%20Membershiip%20APPLICATION%20Form%20October%202012.pdf" target="_blank">Click here to download the PDF version.</a>
                <br /><br />

                <!--

                <form action="change-fees.php" method="post">

                <div id="type" style="position:relative; float:left; width:900px; background-color:#ffffff; height:auto; border:2px solid #75ad3f; margin:10px;">
                    <div id="radio1" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 0px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Adult</b></a><br />
                    </div>
                    <div id="radio2" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 0px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Joint Adults</b></a><br />
                    </div>
                    <div id="radio3" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 0px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Family</b></a><br />
                    </div>
                    <div id="radio4" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 0px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Senior</b></a><br />
                    </div>
                    <div id="radio5" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 0px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Junior</b></a><br />
                    </div>
                    <div id="radio6" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 15px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Adult Monthly</b></a><br />
                    </div>
                    <div id="radio7" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 15px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Off-Peak Adult</b></a><br />
                    </div>
                    <div id="radio8" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 15px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Off-Peak Family</b></a><br />
                    </div>
                    <div id="radio9" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 15px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Student</b></a><br />
                    </div>
                    <div id="radio10" style="position:relative; float:left; width:140px; height:auto; padding: 15px 0px 15px 30px; text-align:left; line-height:20px;">
                    <input type="radio" name="radio_adult" /><a class="arial14grey"><b> Off-Peak Junior</b></a><br />
                    </div>
                </div>

                <div id="Details" style="position:relative; float:left; width:900px; background-color:#ffffff; height:auto; border:2px solid #75ad3f; margin:10px;">
                    
                    <div id="AddressCaption" style="position:relative; float:left; width:60px; height:auto; text-align:center; margin-left:40px; margin-top:20px; line-height:24px;">
                        <a class="arial14grey"><b>Address</b></a>
                    </div>
                    <div id="Address1" style="position:relative; float:left; width:740px; height:auto; text-align:left; margin-left:20px; margin-top:20px; line-height:24px;">
                        <input type="text" name="address1" style="width:740px;"/>
                    </div>
                    <div id="Address2" style="position:relative; float:left; width:820px; height:auto; text-align:left; margin-left:40px; line-height:24px;">
                        <input type="text" name="address2" style="width:820px;"/>
                    </div>
                    <div id="Address3" style="position:relative; float:left; width:420px; height:auto; text-align:left; margin-left:40px; line-height:24px;">
                        <input type="text" name="address3" style="width:420px;"/>
                    </div>
                    <div id="PostcodeCaption" style="position:relative; float:left; width:80px; height:auto; text-align:center; margin-left:20px; line-height:24px;">
                        <a class="arial14grey"><b>Post Code </b></a>
                    </div>
                    <div id="PostcodeInput" style="position:relative; float:left; width:280px; height:auto; text-align:left; margin-left:20px; line-height:24px;">
                        <input type="text" name="postcode" style="width:280px;"/>
                    </div>
                    <div id="HomePhoneCaption" style="position:relative; float:left; width:100px; height:auto; text-align:center; margin-left:40px; margin-top:20px; line-height:24px;">
                        <a class="arial14grey"><b>Home Phone</b></a>
                    </div>
                    <div id="HomePhoneInput" style="position:relative; float:left; width:140px; height:auto; text-align:left; margin-left:20px; margin-top:20px; line-height:24px;">
                        <input type="text" name="homephone" style="width:140px;"/>
                    </div>
                    <div id="MobilePhoneCaption" style="position:relative; float:left; width:100px; height:auto; text-align:center; margin-left:20px; margin-top:20px; line-height:24px;">
                        <a class="arial14grey"><b>Mobile Phone</b></a>
                    </div>
                    <div id="MobilePhoneInput" style="position:relative; float:left; width:140px; height:auto; text-align:left; margin-left:20px; margin-top:20px; line-height:24px;">
                        <input type="text" name="mobilephone" style="width:140px;"/>
                    </div>
                    <div id="WorkPhoneCaption" style="position:relative; float:left; width:100px; height:auto; text-align:center; margin-left:20px; margin-top:20px; line-height:24px;">
                        <a class="arial14grey"><b>Work Phone</b></a>
                    </div>
                    <div id="WorkPhoneInput" style="position:relative; float:left; width:140px; height:auto; text-align:left; margin-left:20px; margin-top:20px; line-height:24px;">
                        <input type="text" name="workphone" style="width:140px;"/>
                    </div>


                </div>

                </form>
                
                -->

                <?php
                ?>
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>