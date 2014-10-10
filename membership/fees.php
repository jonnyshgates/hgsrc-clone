<?php 
    session_start(); 
    $page ="location:../membership/fees";
    $_SESSION['page'] = $page;

    $HGSRC_year_single = 170;
    $HGSRC_month_single = 17;
    //$HGSRC_year_joint = $rowset[2][2];
    //$HGSRC_year_family = $rowset[3][2];
    $HGSRC_senior = 120;
    $HGSRC_student = 80;
    $HGSRC_junior = 60;

    $HGSRC_OP_single = 100;
    //$HGSRC_OP_family = $rowset[8][2];
    //$HGSRC_OP_senior = $rowset[9][2];
    $HGSRC_OP_junior = 40;

    $HGSA_single = 25;
    //$HGSA_joint = $rowset[12][2];
    $HGSA_family = 40;
    $HGSA_senior = 15;
    $HGSA_student = 15;
    $HGSA_junior = 10;

    $keyfob_adult = 10;
    $keyfob_junior = 5;

    $credit_adult = 30;
    $credit_junior = 20;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Membership Fees | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Membership Fees"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>Membership Subscription Fees – October 2013</b></a></div>
                <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:20px; padding:20px;">
                <a class="arial14grey">Membership Subscription Fees.</a> 
                <a class="arial14grey hoverHG2" href="../download/HGSRC_Membership_SUBSCRIPTION_Fees_Oct2013.pdf" >Click here to view the PDF version.</a>
                <br /><br />
                
                <?php

                function table_row($type,$description,$period,$HGSRC,$HGSA,$keyfob,$credit) // Makes a table row based on the correct data sent to it
                {
                    if ($period == 'year')
                    {
                    $total1 = ($HGSRC + $HGSA);
                    $total2 = ($HGSRC + $HGSA + $keyfob + $credit);
                    }
                    else if ($period == 'month')
                    {
                    $total1 = (12*$HGSRC + $HGSA);
                    $total2 = (12*$HGSRC + $HGSA + $keyfob + $credit);
                    $suffix = '/month <br />(£'.(3*$HGSRC).' upfront)';
                    }

                    echo('
                        <tr>
                            <td style="background-color:#dfe696 !important;"><b>'.$type.'</b><br />'.$description.'</td>
                            <td><b>£'.$HGSRC.$suffix.'</b></td>
                            <td><b>£'.$HGSA.'</b></td>
                            <td style="background-color:#bedfc8 !important;"><b>£'.$total1.'</b></td>
                            <td><b>£'.$keyfob.'</b></td>
                            <td><b>£'.$credit.'</b></td>
                            <td style="background-color:#bad69f !important;"><b>£'.$total2.'</b></td>
                        </tr>
                        ');
                }

                echo('
                    <table class="fees">
                        <tr>
                            <th rowspan="2" style="background-color:#a1c037;"><b>Membership<br />CATEGORIES</b></th>
                            <th colspan="3" style="background-color:#398271;"><b>ANNUAL</b></th>
                            <th colspan="2" style="background-color:#52aa6c;"><b>NEW MEMBERS</b></th>
                            <th rowspan="2" style="background-color:#212120;"><b>TOTAL</b></th>
                        </tr>
                        <tr>
                            <td style="background-color:#cdd757 !important;"><b>HGSRC<br />Fee</b></td>
                            <td style="background-color:#91bd66 !important;"><b>HGSA<br />Fee</b></td>
                            <td style="background-color:#d3df9d !important;"><b>TOTAL<br />Membership</b></td>
                            <td style="background-color:#b4cc5f !important;"><b>CLUB<br />Keyfob</b></td>
                            <td style="background-color:#bad69f !important;"><b>CLUB ACCOUNT<br />Opening Credit</b></td>
                        </tr>
                        <tr>
                            <th style="background-color:#284934;" colspan="7"><b>FULL - ANYTIME: 8am to last court booking 9:30pm</b></th>
                        </tr>
                    ');

                    table_row('Adult','19-64 yrs','year',$HGSRC_year_single,$HGSA_single,$keyfob_adult,$credit_adult);
                    table_row('Adult-Monthly','19-64 yrs','month',$HGSRC_month_single,$HGSA_single,$keyfob_adult,$credit_junior);
                    //table_row('Joint Adults','Partner/Spouse 19-64 yrs','year',$HGSRC_year_joint,$HGSA_joint,2*$keyfob_adult,2*$credit_adult);
                    //table_row('Family','2 Adults, 2 Children to 18 yrs','year',$HGSRC_year_family,$HGSA_family,2*$keyfob_adult + 2*$keyfob_junior,2*$credit_adult + 2*$credit_junior);
                    table_row('Senior','Over 65 yrs','year',$HGSRC_senior,$HGSA_senior,$keyfob_adult,$credit_adult);
                    table_row('Student','19-24 yrs','year',$HGSRC_student,$HGSA_student,$keyfob_junior,$credit_junior);
                    table_row('Junior','Under 19 yrs','year',$HGSRC_junior,$HGSA_junior,$keyfob_junior,$credit_junior);
                    
                    echo('
                        <tr>
                            <th style="background-color:#08634e;" colspan="7"><b>OFF-PEAK – Monday-Friday: 8am to last court booking 4:30pm Saturday-Sunday: 8am to last court booking 9.30pm</b></th>
                        </tr>
                        ');

                    table_row('Off-Peak Adult','19-64 yrs','year',$HGSRC_OP_single,$HGSA_single,$keyfob_adult,$credit_adult);
                    //table_row('Off-Peak Family','2 Adults, 2 Children to 18 yrs','year',$HGSRC_OP_family,$HGSA_family,2*$keyfob_adult + 2*$keyfob_junior,2*$credit_adult + 2*$credit_junior);
                    table_row('Off-Peak Junior','Under 19 yrs','year',$HGSRC_OP_junior,$HGSA_junior,$keyfob_junior,$credit_junior);

                    echo('
                        <tr>
                            <th style="background-color:#536d5d;" colspan="7"><b>FAMILY MIX & MATCH: Mix FULL & OFF-PEAK Categories – 20% off 2nd family member, 40% off subsequent family members*</b></th>
                        </tr>
                        <tr>
                            <th style="background-color:#ffffff; color:Black; height:15px;" colspan="7"><b>EXAMPLE MIX & MATCH CONFIGURATION:</b></th>
                        </tr>

                        <tr>
                            <td style="background-color:#dfe696 !important;"><b>Adult</b></td>
                            <td><b>£170</b></td>
                            <td rowspan="4"><b>£40</b></td>
                            <td rowspan="4" style="background-color:#bedfc8 !important;"><b>£350</b></td>
                            <td><b>£10</b></td>
                            <td><b>£30</b></td>
                            <td rowspan="4" style="background-color:#bad69f !important;"><b>£480</b></td>
                        </tr>
                        <tr>
                            <td style="background-color:#dfe696 !important;"><b>Adult Off-Peak</b><br />20% off</td>
                            <td><b>£80</b></td>
                            <td><b>£10</b></td>
                            <td><b>£30</b></td>
                        </tr>
                        <tr>
                            <td style="background-color:#dfe696 !important;"><b>Junior</b><br />40% off</td>
                            <td><b>£36</b></td>
                            <td><b>£5</b></td>
                            <td><b>£20</b></td>
                        </tr>
                        <tr>
                            <td style="background-color:#dfe696 !important;"><b>Junior Off-Peak</b><br />40% off</td>
                            <td><b>£24</b></td>
                            <td><b>£5</b></td>
                            <td><b>£20</b></td>
                        </tr>
                    </table>
                    <a class="arial12black">*Requires two or more members at the same address</a>
                    ');
                ?>

                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>