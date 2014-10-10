<?php 
    session_start(); 
    $page = $_SESSION['page'];

    if($_SESSION['loggedin'] != "true")
    { header($page); }

    if($_SESSION['access_level'] != "ADMIN-FULL")
    { header($page); }

    /*connect database*/
    mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
    mysql_select_db('hgsrcwebsite')or die("cannot select DB");
    
    $sql="SELECT * FROM fees";
    $result=mysql_query($sql);

    $rowset = array();
    while($row = mysql_fetch_row($result))
    $rowset[] = $row;

    $HGSRC_year_single = $rowset[0][2];
    $HGSRC_month_single = $rowset[1][2];
    $HGSRC_year_joint = $rowset[2][2];
    $HGSRC_year_family = $rowset[3][2];
    $HGSRC_senior = $rowset[4][2];
    $HGSRC_student = $rowset[5][2];
    $HGSRC_junior = $rowset[6][2];

    $HGSRC_OP_single = $rowset[7][2];
    $HGSRC_OP_family = $rowset[8][2];
    //$HGSRC_OP_senior = $rowset[9][2];
    $HGSRC_OP_junior = $rowset[10][2];

    $HGSA_single = $rowset[11][2];
    $HGSA_joint = $rowset[12][2];
    $HGSA_family = $rowset[13][2];
    $HGSA_senior = $rowset[14][2];
    $HGSA_student = $rowset[15][2];
    $HGSA_junior = $rowset[16][2];

    $keyfob_adult = $rowset[17][2];
    $keyfob_junior = $rowset[18][2];

    $credit_adult = $rowset[19][2];
    $credit_junior = $rowset[20][2];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Membership Edit | Holmer Green Squash & Racketball Club</title>
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
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Edit Fees</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:20px; padding:20px;">
                
                <?php 
                
                function list_entry($caption,$post_name,$value)
                {
                echo('
                    <div style="position:relative; float:left; width:200px; height:auto; line-height:30px;">
                    <a class="arial12grey">'.$caption.'</a>
                    </div>
                    <div style="position:relative; float:left; width:100px; height:auto;">
                    <input name="'.$post_name.'" type="text" value="'.$value.'" style=" width:50px; margin:4px; text-align:center;" maxlength="3" />
                    </div>
                    <br /><br />
                ');
                }
                
                echo('<form action="change-fees.php" method="post"><input type="submit" name="Submit" value="Post" style=" width:100px; height:24px; margin:4px;" /><br /><br />');

                echo('<div style="position:relative; float:left; width:300px; height:auto;">');

                list_entry('HGSRC Single Annual','HGSRC_year_single',$HGSRC_year_single);
                list_entry('HGSRC Single Monthly','HGSRC_month_single',$HGSRC_month_single);
                list_entry('HGSRC Joint Annual','HGSRC_year_joint',$HGSRC_year_joint);
                list_entry('HGSRC Family Annual','HGSRC_year_family',$HGSRC_year_family);
                list_entry('HGSRC Senior Annual','HGSRC_senior',$HGSRC_senior);
                list_entry('HGSRC Student Annual','HGSRC_student',$HGSRC_student);
                list_entry('HGSRC Junior Annual','HGSRC_junior',$HGSRC_junior);

                echo('</div><div style="position:relative; float:left; width:300px; height:auto;">');

                list_entry('HGSRC Off-Peak Single Annual','HGSRC_OP_single',$HGSRC_OP_single);
                list_entry('HGSRC Off-Peak Family Annual','HGSRC_OP_family',$HGSRC_OP_family);
                //('HGSRC Off-Peak Senior Annual','HGSRC_OP_senior',$HGSRC_OP_senior);
                list_entry('HGSRC Off-Peak Junior Annual','HGSRC_OP_junior',$HGSRC_OP_junior);
                
                list_entry('Keyfob Adult','keyfob_adult',$keyfob_adult);
                list_entry('Keyfob Junior','keyfob_junior',$keyfob_junior);

                list_entry('Opening Credit Adult','credit_adult',$credit_adult);
                list_entry('Opening Credit Junior','credit_junior',$credit_junior);

                echo('</div><div style="position:relative; float:left; width:300px; height:auto;">');

                list_entry('HGSA Single Annual','HGSA_single',$HGSA_single);
                list_entry('HGSA Joint Annual','HGSA_joint',$HGSA_joint);
                list_entry('HGSA Family Annual','HGSA_family',$HGSA_family);
                list_entry('HGSA Senior Annual','HGSA_senior',$HGSA_senior);
                list_entry('HGSA Student Annual','HGSA_student',$HGSA_student);
                list_entry('HGSA Junior Annual','HGSA_junior',$HGSA_junior);

                echo('</div>');
                
                ?>

                </form>
                
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>