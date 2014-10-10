
<?php 
    session_start(); 
    $page ="location:../membership/membership-courts";
    $_SESSION['page'] = $page;

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");

    $sql="SELECT * FROM fees";
    $result=mysql_query($sql);

    $rowset = array();
    while($row = mysql_fetch_row($result))
    $rowset[] = $row;

    $peak = number_format($rowset[21][2], 2, '.', '');
    $offpeak = number_format($rowset[22][2], 2, '.', '');
    $clubnight = number_format($rowset[23][2], 2, '.', '');
    $junior = number_format($rowset[24][2], 2, '.', '');
    $guest = number_format($rowset[25][2], 2, '.', '');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Court Fees | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Court Fees"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Court Fees - Effective September 2013</b></a></div>
		        
                <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:20px; padding:20px;">
                <a class="arial16grey"><b>45 Minutes, inclusive of lights</b></a><br />
                <a class="arial14grey hoverHG2" href="../download/HGSRC-CourtFees-Sep13.pdf" target="_blank">Click here to download the PDF version.</a>
                <br /><br />
                
                <div id="peak" style="position:relative; float:left; width:435px; background-color:#ffffff; height:220px; border:2px solid #4db848; border-left:10px solid #4db848; margin:10px;">
                    <div id="peak-text" style="position:relative; float:left; height:auto; padding:20px; text-align:left; line-height:24px;">
                    <a class="arial16grey"><b>PEAK Time - £4.50</b></a><br />
                    <ul style="list-style-image:url(../image/bullet-4db848.png);">
                        <li>
                        <a class="arial14grey"><b>Monday to Friday: </b><br /></a>
                        <table class="arial14grey">
                        <tr><td><b>Court 1</b></td><td style="padding-left:20px;">5:15pm - 9:45pm</td></tr>
                        <tr><td><b>Courts 2 & 3</b></td><td style="padding-left:20px;">5pm - 10:15pm</td></tr>
                        </table>
                        </li>
                    </ul>
                    </div>
                </div>

                <div id="offpeak" style="position:relative; float:left; width:435px; background-color:#ffffff; height:220px; border:2px solid #b2d234; border-left:10px solid #b2d234; margin:10px;">
                    <div id="offpeak-text" style="position:relative; float:left; height:auto; padding:20px; text-align:left; line-height:24px;">
                    <a class="arial16grey"><b>OFF-PEAK Time - £3.50</b></a><br />
                    <ul style="list-style-image:url(../image/bullet-b2d234.png);">
                        <li>
                        <a class="arial14grey"><b>Monday to Friday: </b><br /></a>
                        <table class="arial14grey">
                        <tr><td><b>Court 1</b></td><td style="padding-left:20px;">8:15am - 5:15pm</td></tr>
                        <tr><td><b>Courts 2 & 3</b></td><td style="padding-left:20px;">8am - 5pm</td></tr>
                        </table>
                        </li>
                        <li><a class="arial14grey"><b>Saturday & Sunday: </b><br /></a>
                        <table class="arial14grey">
                        <tr><td>8am - 10:15pm</td></tr>
                        </table>
                        </li>
                    </ul>
                    </div>
                </div>
				
                <!--

                <div id="clubnight" style="position:relative; float:left; width:900px; background-color:#ffffff; height:auto; border:2px solid #006a51; border-left:10px solid #006a51; margin:10px;">
                    <div id="clubnight-text" style="position:relative; float:left; height:auto; padding:20px; text-align:left; line-height:24px;">
                    <a class="arial16grey"><b>Club Nights – ALL Members – Courts 1 & 2</b></a><br />
                    <ul style="list-style-image:url(../image/bullet-006a51.png);">
                        <li><a class="arial14grey"><b>Monday - Over 50's Squash: </b>from 5.30pm to 7.30pm</a></li>
                        <li><a class="arial14grey"><b>Thursday - All Members Racketball: </b>from 6.45pm to 9pm</a></li>
                        <li><a class="arial14grey"><b>Friday - All Members Squash: </b>from 6pm to 9.30pm</a></li>
                        <li><a class="arial14grey"><b>Sunday - All Members Squash: </b>from 5pm to 9.30pm</a></li>
                    </ul>
                    <a class="arial16grey"><b>£<?php echo($clubnight); ?></b></a><br /><br />
                    <a class="arial14grey"><b>Note!</b> Court 3 – is available to ALL members at the prevailing Court Fee. If not booked, can be used for Club Nights.</a>
                    </div>
                </div>

                -->
				
                <div id="junior" style="position:relative; float:left; width:900px; background-color:#ffffff; height:auto; border:2px solid #006a51; border-left:10px solid #006a51; margin:10px;">
                    <div id="junior-text" style="position:relative; float:left; height:auto; padding:20px; text-align:left; line-height:24px;">
                    <a class="arial16grey"><b>Juniors & Family Children – ALL School Holidays - £2.50</b></a><br />
                    <ul style="list-style-image:url(../image/bullet-006a51.png);">
                        <li>
                        <a class="arial14grey"><b>Monday to Friday: </b><br /></a>
                        <table class="arial14grey">
                        <tr><td><b>Courts 2 & 3</b></td><td style="padding-left:20px;">8am - 5pm</td></tr>
                        </table>
                        </li>
                    </ul>
                    <a class="arial14grey"><b>Note!</b><br /> Court 1 – is available to ALL members at the prevailing Court Fee.</a>
                    </div>
                </div>

                <div id="guest" style="position:relative; float:left; width:900px; background-color:#ffffff; height:auto; border:2px solid #abd69c; border-left:10px solid #abd69c; margin:10px;">
                    <div id="guest-text" style="position:relative; float:left; height:auto; padding:20px; text-align:left; line-height:24px;">
                    <a class="arial16grey"><b>Guest Fee</b></a><br />
                    <ul style="list-style-image:url(../image/bullet-abd69c.png);">
                        <li><a class="arial14grey"><b>Members can invite guests to play at anytime </b></a></li>
                    </ul>
                    <a class="arial16grey"><b>£<?php echo($guest); ?></b> will be added to the prevailing Court Fee</a>
					<br />
					<br />
					<a class="arial14grey"><b>Note!</b>
					<br /> 
					PEAK – to a MAXIMUM of 12 per membership year.
					<br />
					OFF PEAK - UNLIMITED.
					</a>
                    </div>
                </div>
            </div>
        </div>

        <?php include("../includes/footer.php") ?>

    </div>
        
</div>
</body>
</html>