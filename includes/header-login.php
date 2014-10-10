<div id="logo"><a href="../index"><img src="../image/logo320x50.png" alt="Holmer Green Squash & Racketball Club" /></a></div>

<div id="login">

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script>
    $(document).ready(function() {
    $('a.login-window').click(function() {

    //Getting the variable's value from a link
    var loginBox = $(this).attr('href');

    //Fade in the Popup
    $(loginBox).fadeIn(300);

    //Set the center alignment padding + border see css style
    var popMargTop = ($(loginBox).height() + 24) / 2;
    var popMargLeft = ($(loginBox).width() + 24) / 2;

    $(loginBox).css({
    'margin-top' : -popMargTop,
    'margin-left' : -popMargLeft
    });

    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);

    return false;
    });

    // When clicking on the button close or the mask layer the popup closed
    $('a.close, #mask').live('click', function() {
    $('#mask , .login-popup').fadeOut(300 , function() {
    $('#mask').remove();
    });
    return false;
    });
    });

  </script>

  <div id="login-box" class="login-popup">
    <a href="#" class="close">
      <img src="../image/close_pop.png" class="btn_close" title="Close Window" alt="Close" />
    </a>
    <form action="../members/checklogin.php" method="post">
      <a class="arial14grey">User Name: </a>
      <input name="myusername" type="text" style=" width:100px; height:16px; font-size:14px; margin: 10px 10px 10px 4px;" maxlength="10" />
      <a class="arial14grey">Password: </a>
      <input name="mypassword" type="password" style=" width:100px; height:16px; font-size:14px; margin: 10px 10px 10px 4px;" maxlength="50" />
      <button type="submit" name="Submit" style="font-size:14px; color:#666666; width:100px; line-height:14px; height:24px; margin:10px 0 0 10px;">Log In</button>
    </form>
  </div>
    
    <?php

    /* Members login area */

    $loggedin = $_SESSION['loggedin'];
    
    if($loggedin == "true")
    {
    $fullname =$_SESSION['myfullname'];
    echo ('<a class="arial12grey" style="display:inline-block; background-color:#ffffff; padding:0 10px 0 10px;">Logged in as '.$fullname.'</a>
    <a class="arial12grey" style="display:inline-block; background-color:#efefef; padding:0 10px 0 10px;" href="../members/logout">Log Out</a>');
    }
    else if($loggedin == "wrong")
    { 
    echo ('
    <a class="arial12grey" style="display:inline-block; background-color:#ffffff; padding:0 10px 0 10px;">Incorrect username or password</a>
    <a  class="login-window" href="#login-box" style="display:inline-block; background-color:#efefef; padding:0 10px 0 10px; font-size:12px; color:#666666; text-decoration:none;">Log In</a>
    ');
    $_SESSION['loggedin'] = "false";
    }
    else
    {
    echo ('
    <a class="arial12grey" style="display:inline-block; background-color:#ffffff; padding:0 10px 0 10px;">Not Logged In</a>
    <a href="#login-box" class="login-window" style="display:inline-block; background-color:#efefef; padding:0 10px 0 10px; font-size:12px; color:#666666; text-decoration:none;">Log In</a>
    ');
    }
    ?>

</div>

<div id="navigation">
    <ul class="navigation">
        <li><a class= "arial14white" href="../index.php">Home</a></li>
        <li><a class= "arial14white" href="../club/main">About Us</a>
        <ul>
            <li><a class= "arial14dgrey" href="../club/club">The Club</a></li>
            <li><a class= "arial14dgrey" href="../club/contact">Contact</a></li>
            <li><a class= "arial14dgrey" href="../club/location">Location</a></li>
            <li><a class= "arial14dgrey" href="../club/AGM" style="border-bottom:1px solid #284934;">AGM Information</a>
              <ul>
                <li><a class= "arial14dgrey" href="../club/AGM">2011</a></li>
                <li><a class= "arial14dgrey" href="../club/AGM" style="border-bottom:1px solid #284934;">2012</a></li>
              </ul>
            </li>
        </ul>
        </li>
        <li><a class= "arial14white" href="../squash/main">Squash</a>
            <ul>
            <li><a class= "arial14dgrey" href="../squash/squash-rules" style="border-bottom:1px solid #284934;">Rules</a></li>
            <!--<li><a class= "arial14dgrey" href="../squash/squash-ladies" >Ladies</a></li>-->
            </ul>
        </li>
        <li><a class= "arial14white" href="../racketball/main">Racketball</a>
            <ul>
            <li><a class= "arial14dgrey" href="../racketball/history">History</a></li>
            <li><a class= "arial14dgrey" href="../racketball/club">Club</a></li>
            <li><a class= "arial14dgrey" href="../racketball/benefits">Benefits</a></li>
            <li><a class= "arial14dgrey" href="../racketball/equipment">Equipment</a></li>
            <li><a class= "arial14dgrey" href="../racketball/rules" style="border-bottom:1px solid #284934;">Rules</a></li>
            </ul>
        </li>
        <li><a class= "arial14white" href="../leagues/leagues">Leagues</a>
            <ul>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=1">Squash: Champions</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=2">Squash: All Members</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=3">Squash: Over 55's</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=4">Squash: Juniors</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=5">Squash: Ladies</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=6">Squash: Doubles</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=7" style="border-bottom:1px solid #284934;">Racketball</a></li>
            </ul>
        </li>
        <!--
        <li><a class= "arial14white" href="">Tournaments</a>
            <ul>
            <li><a class="arial14dgrey" href="../tournaments/squash2020">Squash 2020</a></li>
            <li><a class="arial14dgrey" href="../tournaments/junior2012">Autumn Juniors 2012</a></li>
            <li><a class="arial14dgrey" href="../tournaments/summer2012">Summer Teams 2012</a></li>
            <li><a class="arial14dgrey" href="../tournaments/honours" style="border-bottom:1px solid #284934;">Past Honours</a></li>
            </ul>
        </li>
        -->
        <li><a class= "arial14white" href="../teams/main">Teams</a>
            <ul>
            <li><a class= "arial14dgrey" href="../news/news">News</a></li>
            <?php
            if($_SESSION['loggedin'] == "true")
            { echo ('<li><a class= "arial14dgrey" href="../teams/rankings">Mens Rankings</a></li>'); }
            ?>
            <li><a class= "arial14dgrey" href="../teams/HGSRC1">HGSRC Mens 1</a></li>
            <li><a class= "arial14dgrey" href="../teams/HGSRC2">HGSRC Mens 2</a></li>
            <li><a class= "arial14dgrey" href="../teams/HGSRC3">HGSRC Mens 3</a></li>
            <li><a class= "arial14dgrey" href="../teams/juniors1">HGSRC Juniors 1</a></li>
            <li><a class= "arial14dgrey" href="../teams/juniors2" style="border-bottom:1px solid #284934;">HGSRC Juniors 2</a></li>
            </ul>
        </li>
        <!--
        <li><a class= "arial14white" href="../juniors/juniors">Juniors</a></li>
        -->
        <!--
        <li><a class= "arial14white" href="../coaching/coaching">Coaching</a></li>
        -->
        <li><a class= "arial14white" href="../membership/main">Membership</a>
            <ul>
            <?php
            if($_SESSION['loggedin'] == "true" && $_SESSION['access_level'] == "ADMIN-FULL")
            { echo ('<li style="background-image:url(../image/navbg4.png) !important;"><a class= "arial14white" href="../members/member-lookup">Edit Members</a></li>'); }
            ?>
            <li><a class= "arial14dgrey" href="../membership/membership-fees">Subscription Fees</a></li>
            <li><a class= "arial14dgrey" href="../membership/court-fees">Court Fees</a></li>
            <li><a class= "arial14dgrey" href="../membership/membership-application">Application Form</a></li>
            <li><a class= "arial14dgrey" href="../membership/services" style="border-bottom:1px solid #284934;">Stringing</a></li>
            <!--<li><a class= "arial14dgrey" href="../membership/membership-FAQs" ">FAQs</a></li>-->
            </ul>
        </li>
        <li><a class= "arial14white" href="../booking/bookonline">Court Booking</a>
            <ul>
            <li><a class= "arial14dgrey" href="../booking/bookonline">Club System</a></li>
            <li><a class= "arial14dgrey" href="../booking/configurations">Configurations</a></li>
            <li><a class= "arial14dgrey" href="../booking/FAQs" style="border-bottom:1px solid #284934;">FAQs</a></li>
            </ul>
        </li>            
    </ul>		    
</div>