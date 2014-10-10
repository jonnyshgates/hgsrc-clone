<div id="logo"><a href="../index"><img src="../image/logo320x50.png" alt="Holmer Green Squash & Racketball Club" /></a></div>

<div id="Login" style="position:relative; float:left; width:520px; height:60px; line-height:24px;"  align="right" >
    <form action="../members/checklogin.php" method="post">
    <a class="arial12grey">User Name: </a>
    <input name="myusername" type="text" style=" width:100px; height:12px; margin:4px;" maxlength="10" />
    <a class="arial12grey">Password: </a> 
    <input name="mypassword" type="password" style=" width:100px; height:12px; margin:4px;" maxlength="50" />
    <input type="submit" name="Submit" value="Login" style=" width:60px; margin:4px;" />
    </form>
    
    <?php

    /* test for mobile browser - http://detectmobilebrowser.com */

    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)
    ||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c
    |p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( 
    |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1
    |p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01
    |mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
    $mobile = 'true';

    /* Members login area */

    $loggedin = $_SESSION['loggedin'];
    
    if($loggedin == "true")
    {
    $fullname =$_SESSION['myfullname'];
    echo ('<a class="arial12grey">Logged in as '.$fullname.'</a><br /><a class="arial12grey hoverHG2" href="../members/logout">Log Out</a>');
    }
    else if($loggedin == "wrong")
    { 
    echo ('<a class="arial12grey">Incorrect username or password</a>');
    $_SESSION['loggedin'] = "false";
    }
    else
    {
    echo ('<a class="arial12grey">Not Logged In</a>');
    }
    ?>

</div>

<div id="navigation">
    <ul class="navigation">
        <li><a class= "arial14white" href="../index.php">Home</a></li>
        <li><a class= "arial14white" href="../club/main">About Us</a>
        <?php
        if($mobile != 'true')
        echo('
          <ul>
            <li><a class= "arial14dgrey" href="../club/club">The Club</a></li>
            <li><a class= "arial14dgrey" href="../club/contact">Contact</a></li>
            <li><a class= "arial14dgrey" href="../club/location">Location</a></li>
            <li><a class= "arial14dgrey" href="../club/AGM" style="border-bottom:1px solid #284934;">AGM</a>
                <!--
                <ul>
                <li><a class= "arial14dgrey" href="../club/constitution">Constitution</a></li>
                <li><a class= "arial14dgrey" href="../club/organisation">Organsiation</a></li>
                <li><a class= "arial14dgrey" href="../club/AGM">AGM</a></li>
                <li><a class= "arial14dgrey" href="../club/minutes" style="border-bottom:1px solid #284934;">Meeting Minutes</a></li>
                </ul>
                -->
            </li>
          </ul>
        ');
        ?>
        </li>
        <li><a class= "arial14white" href="../squash/main">Squash</a>
        <?php
        if($mobile != 'true')
        echo('
          <ul>
            <li><a class= "arial14dgrey" href="../squash/squash-rules" style="border-bottom:1px solid #284934;" >Rules</a></li>
          </ul>
        ');
        ?>
        </li>
        <li><a class= "arial14white" href="../racketball/main">Racketball</a>
        <?php
        if($mobile != 'true')
        echo('
          <ul>
            <li><a class= "arial14dgrey" href="../racketball/history">History</a></li>
            <li><a class= "arial14dgrey" href="../racketball/benefits">Benefits</a></li>
            <li><a class= "arial14dgrey" href="../racketball/equipment">Equipment</a></li>
            <li><a class= "arial14dgrey" href="../racketball/rules" style="border-bottom:1px solid #284934;">Rules</a></li>
          </ul>
        ');
        ?>
        </li>
        <li><a class= "arial14white" href="../leagues/leagues">Leagues</a>
         <?php
        if($mobile != 'true')
        echo('
            <ul>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=2">Squash: All Members</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=3">Squash: 55 & Over</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=4">Squash: Juniors</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=5">Squash: Ladies</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=6">Squash: Doubles</a></li>
            <li><a class= "arial14dgrey" href="../leagues/leagues?ID=7" style="border-bottom:1px solid #284934;">Racketball</a></li>
            </ul>
        ');
        ?>
        </li>

        <li><a class= "arial14white" href="../teams/main">Teams</a>
          <?php
          if($mobile != 'true')
          {
          echo('
            <ul>
            <li><a class= "arial14dgrey" href="../news/news">News</a></li>
            ');
            if($_SESSION['loggedin'] == "true")
            { echo ('<li><a class= "arial14dgrey" href="../teams/rankings">Mens Rankings</a></li>'); }
          echo('
            <li><a class= "arial14dgrey" href="../teams/results?team=M1">HGSRC Mens 1</a></li>
            <li><a class= "arial14dgrey" href="../teams/results?team=M2">HGSRC Mens 2</a></li>
            <li><a class= "arial14dgrey" href="../teams/results?team=M3">HGSRC Mens 3</a></li>
            <li><a class= "arial14dgrey" href="../teams/results?team=J1">HGSRC Juniors 1</a></li>
            <li><a class= "arial14dgrey" href="../teams/results?team=J2">HGSRC Juniors 2</a></li>
            <li><a class= "arial14dgrey" href="../teams/results?team=J3">HGSRC Juniors 3</a></li>
            <li><a class= "arial14dgrey" href="../teams/results?team=R1" style="border-bottom:1px solid #284934;">HGSRC Racketball 1</a></li>
            </ul>
          ');
          }
          ?>
        </li>
        <li><a class= "arial14white" href="../juniors/juniors">Juniors</a>
        </li>

        <li><a class= "arial14white" href="../tournaments/main">Tournaments</a>
        <?php
        if($mobile != 'true')
        echo('
            <ul>
            <li><a class= "arial14dgrey" href="../tournaments/STST2014">STST 2014</a></li>
            <li><a class= "arial14dgrey" href="../tournaments/nationalschools2014">National Schools 2014</a></li>
            <li><a class= "arial14dgrey" href="../tournaments/club2014">Club Closed Squash 2014</a></li>
            <li><a class= "arial14dgrey" href="../tournaments/juniors2014">Junior Squash 2014</a></li>
            <li><a class="arial14dgrey" href="../tournaments/juniors2013">Juniors Bucks vs USA</a></li>
            <li><a class="arial14dgrey" href="../tournaments/STST2013">STST 2013</a></li>
            <li><a class="arial14dgrey" href="../tournaments/honours" style="border-bottom:1px solid #284934;">Past Honours</a></li>
            </ul>
        ');
        ?>
        
        </li>
        <!--<li><a class= "arial14white" href="../coaching/coaching">Coaching</a></li>-->
        <li><a class= "arial14white" href="../membership/main">Membership</a>
          <?php
          if($mobile != 'true')
          {
          echo('  
            <ul>
            ');
            if($_SESSION['loggedin'] == "true" && $_SESSION['access_level'] == "ADMIN-FULL")
            { echo ('<li style="background-image:url(../image/navbg4.png) !important;"><a class= "arial14white" href="../members/member-lookup">Edit Members</a></li>'); }
           echo('
            <li><a class= "arial14dgrey" href="../membership/fees">Subscription Fees</a></li>
            <li><a class= "arial14dgrey" href="../membership/court-fees">Court Fees</a></li>
            <li><a class= "arial14dgrey" href="../membership/application">Application Form</a></li>
            <li><a class= "arial14dgrey" href="../membership/services">Stringing</a></li>
            <li><a class= "arial14dgrey" href="../membership/conduct">Codes of Conduct</a></li>
            <li><a class= "arial14dgrey" href="../membership/subscription">Subscription Policy</a></li>
            <li><a class= "arial14dgrey" href="../membership/healthsafety" style="border-bottom:1px solid #284934;">Health & Safety Policy</a></li>
            <!--<li><a class= "arial14dgrey" href="../membership/membership-FAQs" ">FAQs</a></li>-->
            </ul>
            ');
            }
            ?>
        </li>
        <li><a class= "arial14white" href="../booking/bookonline">Court Booking</a>
          <?php
          if($mobile != 'true')
          echo('  
            <ul>
            <li><a class= "arial14dgrey" href="../booking/bookonline">Club System</a></li>
            <li><a class= "arial14dgrey" href="../booking/configurations">Configurations</a></li>
            <li><a class= "arial14dgrey" href="../booking/FAQs" style="border-bottom:1px solid #284934;">FAQs</a></li>
            </ul>
          ');
          ?>
        </li>            
    </ul>		    
</div>