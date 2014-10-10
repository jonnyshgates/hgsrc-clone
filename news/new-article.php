<?php 
    session_start(); 
    $page ="location:../news/news";
    $_SESSION['page'] = $page;

    if($_SESSION['loggedin'] != "true")
    { header($page); }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>New Article | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="New Article"/>

</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        
            <div id="box-fullwidth">
                <div id="Heading1" style="position:relative; float:left; background-color:#284934; width:980px; height:40px; text-align:center; line-height:40px; "><a class="arial16white"><b>New Article</b></a></div>
		        <div id="Text1" style="position:relative; float:left; width:940px; height:auto; text-align:left; line-height:20px; padding:20px;">
                
                <form action="post-article.php" method="post">
                <div class="arial12grey" style="width:100%; margin-bottom:20px;">
                <a class="arial12grey">Type of Article:</a>
                <input type="radio" name="type" value="Squash Teams" checked style="margin-left:20px;"/>Squash Teams
                <input type="radio" name="type" value="Racketball Teams" style="margin-left:20px;"/>Racketball Teams
                </div>
                <a class="arial12grey">Title:</a><br />
                <input name="title" type="text" style=" width:800px; margin:4px;" maxlength="200" />
                <input type="submit" name="Submit" value="Post" style=" width:100px; height:24px; margin:4px;" /><br />
                <a class="arial12grey">Paragraph 1:</a><br />
                <textarea name="content1" rows="100" cols="50" style=" font-family: Arial, Helvetica, sans-serif; width:930px; height:160px; margin:4px; max-width:930px; max-height:160px;" maxlength="1000" ></textarea><br />
                <a class="arial12grey">Paragraph 2:</a><br />
                <textarea name="content2" rows="100" cols="50" style=" font-family: Arial, Helvetica, sans-serif; width:930px; height:160px; margin:4px; max-width:930px; max-height:160px;" maxlength="1000" ></textarea><br />
                <a class="arial12grey">Paragraph 3:</a><br />
                <textarea name="content3" rows="100" cols="50" style=" font-family: Arial, Helvetica, sans-serif; width:930px; height:160px; margin:4px; max-width:930px; max-height:160px;" maxlength="1000" ></textarea><br />
                </form>
                
                </div>
            </div>

            <?php include("../includes/footer.php") ?>

        </div>
        
</div>
</body>
</html>