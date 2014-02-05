<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="verify-v1" content="kbcIjQVLq9ZjOYXvCH3K3lST2xfqiOIxC8zNjsxG3Lo=" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Green Hammer, Design | Build | Energy in Portland, Oregon" />
<meta name="Keywords" content="green, green building, green builder, portland, oregon, portland oregon, sustainable building, sustainable, natural building, no voc, low voc, environmental, conscious, salvage, salvaged, reclaimed, salvage lumber, salvaged lumber, reclaimed lumber, lumber, wood, home, homes, new home, new homes, remodel, remodeling, green remodel, green remodeling, paint, painting, FSC, Forest Stewardship Council, LEED, construction, general contractor" />
<meta name="city" content="Portland" />
<meta name="state" content="Oregon" />

<title>Green Hammer - Design | Build | Energy in Portland, Oregon</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />


<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
<!--[if lte IE 6]><script src="/ie6/warning.js"></script><script>window.onload=function(){e("/ie6/")}</script><![endif]-->

<!-- Begin Page Wrapper -->
<div id="wrapper">

	<?php include("header.html"); ?>

<div id="page_title"><img src="images/awards.gif" alt="Page Title: Contact" width="250" height="30" class="no_border" /></div>

<div id="sub_title_no_image"></div>
<div id="content_no_sidebar">

<?php
   // Include the file that does all the work
   include("rssaward.php");
   $url = "http://greenhammerconstruction.wordpress.com/category/award/feed/"; //this is the blogs url
   $rss=new rssFeed($url);
   if($rss->error){
	  print "<h1>Error:</h1>\n<p><strong>$rss->error</strong></p>";
   }else{

	  $rss->parse();

	  
	  $rss->showStories();
   }
?>
<div style="clear:both"></div>
	 
</div>
<!--End ccontent-->

</div>
<!--End wrapper-->

<!-- Begin Footer -->
<?php include("footer.html"); ?>
<!-- End Footer -->
<?php include("scripts/ga.js"); ?>

</body>
</html>