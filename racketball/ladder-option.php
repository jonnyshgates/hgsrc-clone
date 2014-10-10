<?php 
    session_start(); 
    $page ="location:../index";
    $_SESSION['page'] = $page;

    if($_SESSION['loggedin'] != "true")
    { header($page); }
    
    $choice = $_GET['choice'];
    $user = $_SESSION['myusername'];
    
    if(isset($choice))
    {
        /*connect database*/
        mysql_connect('213.171.193.146','hgsrcwebsite','PasswordH1')or die("cannot connect");
        mysql_select_db('hgsrcwebsite')or die("cannot select DB");
        
        $sql="SELECT * FROM members where r_ladder > 0";

        $result = mysql_query($sql);
        $count=mysql_num_rows($result);

        if ($choice == 'join')
        {
            $sql="SELECT * FROM members where username = '$user'";
            $result = mysql_query($sql);
            $row = mysql_fetch_row($result);

            if ($row[6] == 0)
            {
                $position = $count + 1;
                $update="UPDATE members SET r_ladder='$position' WHERE username = '$user'";
		        mysql_query($update) or die(mysql_error());
            }
        }

        if ($choice == 'leave')
        {
            $sql="SELECT * FROM members where username = '$user'";
            $result = mysql_query($sql);
            $row = mysql_fetch_row($result);
             
            // set user position to 0
            $update="UPDATE members SET r_ladder='0' WHERE username = '$user'";
		    mysql_query($update) or die(mysql_error());

            // move everyone below up one position
            for($i=$row[6]; $i<$count; $i++)
		    {
			    $old = $i+1;
			    $update="UPDATE members SET r_ladder='$i' WHERE r_ladder = '$old'";
			    mysql_query($update) or die(mysql_error());
		    }
            
        }
    }

    header("location:ladder");
    
?>