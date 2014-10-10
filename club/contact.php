<?php 
    session_start(); 
    $page ="location:../club/contact";
    $_SESSION['page'] = $page;

	function post_contact($title, $name, $email, $phone, $colour)
    {
        echo
        ('
        <div style="position:relative; float:left; width:428px; background-color:#ffffff; height:auto; border:2px solid #'.$colour.'; border-left:10px solid #'.$colour.'; margin:20px 0px 0px 20px;">
			<div style="position:relative; float:left; height:auto; padding:10px 0px 0px 20px; text-align:left;">
				<a class="arial16grey"><b>'.$title.'</b> - '.$name.'</a>
				<ul style="list-style-image:url(../image/bullet-'.$colour.'.png);">
				<li><a class="arial13grey"><b>Email:</b></a><a class="arial13grey hoverHG2" href="mailto:'.$email.'"> '.$email.'</a></li>
				<li><a class="arial13grey"><b>Phone:</b> '.$phone.'</a></li>
				</ul>
			</div>
		</div>
        '); 
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Contacts | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Club Contacts"/>

	<?php include("includes/google_analytics.php") ?>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Club Contacts</b></a></div>
		        <div id="Content1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:20px; padding: 0px 20px 20px 20px;">    
					<?php
						post_contact('Club Chairman', 'Robert Reid', 'chairman@hgsrc.co.uk', '07790 490031', '4db848');
						post_contact('Squash Captain', 'Alex Hartley', 'squashcaptain@hgsrc.co.uk', '07595 549416', 'a3bf40');
                        post_contact('Racketball Captain', 'Jon Carrington', 'racketball@hgsrc.co.uk', '07701 025512', '006a51');
						//post_contact('Coaching', 'James Orford', 'coaching@hgsrc.co.uk', '07733 317822', '006a51');
						post_contact('Juniors', 'David Albin', 'juniors@hgsrc.co.uk', '07776 226332', 'abd69c');
						post_contact('Membership Secretary', 'Robert Reid', 'membership@hgsrc.co.uk', '07790 490031', '00a651');
						post_contact('Web Site', 'Ben Raftery', 'webmaster@hgsrc.co.uk', '07796 420416', '4db848');
						//post_contact('Housekeeping', 'Sonia Bagley', 'housekeeping@hgsrc.co.uk', '07880 764219', 'a3bf40');
						post_contact('Development', 'Rudy Ike', 'development@hgsrc.co.uk', '07768 951433', '006a51');
						post_contact('Graphic Design', 'Russell Dowling', 'design@hgsrc.co.uk', '07958 513280', 'abd69c');
						post_contact('HGSA Club Manager', 'Sarah Banning', 'admin@hgsa.co.uk', '07432 736333', 'b2d234');
						post_contact('HGSA Membership Secretary', 'Richard Ransley', 'members@hgsa.co.uk', '01494 711475', '00a651');
					?>
					
					
				</div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>