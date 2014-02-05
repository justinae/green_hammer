<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<BASE href="http://stinabeads.com/justin/green_hammer/">
<meta name="verify-v1" content="kbcIjQVLq9ZjOYXvCH3K3lST2xfqiOIxC8zNjsxG3Lo=" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Green Hammer, Design | Build | Energy in Portland, Oregon" />
<meta name="Keywords" content="green, green building, green builder, portland, oregon, portland oregon, sustainable building, sustainable, natural building, no voc, low voc, environmental, conscious, salvage, salvaged, reclaimed, salvage lumber, salvaged lumber, reclaimed lumber, lumber, wood, home, homes, new home, new homes, remodel, remodeling, green remodel, green remodeling, paint, painting, FSC, Forest Stewardship Council, LEED, construction, general contractor" />
<meta name="city" content="Portland" />
<meta name="state" content="Oregon" />

<title>Green Hammer Test - Design | Build | Energy in Portland, Oregon</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />

<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="scripts/jquery-1.2.6.min.js" type="text/javascript" ></script>
<script src="scripts/slideshow.js" type="text/javascript" ></script>

<link rel="icon" href="/justin/green_hammer/images/favicon.ico" type="image/x-icon">

</head>

<body>
<!--[if lte IE 6]><script src="/ie6/warning.js"></script><script>window.onload=function(){e("/ie6/")}</script><![endif]-->

<!-- Begin Page Wrapper -->
<div id="wrapper">

<?php include("header.html"); ?>

	<!-- Begin Slideshow -->
		<!-- this will work with any number of images -->
		<!-- set the active class on whichever image you want to show up as the default 
		(otherwise this will be the last image) -->

		<div id="slideshow">
        
       	  <div class="active"><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design1.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design2.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design3.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design4.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design5.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design6.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/design7.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/build1.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/build2.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/build3.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/build4.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/build5.jpg" alt="Green building in Portland Oregon" /></a></div>
                                    
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/build6.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy1.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy2.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy3.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy4.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy5.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy6.jpg" alt="Green building in Portland Oregon" /></a></div>
                                    
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy7.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy8.jpg" alt="Green building in Portland Oregon" /></a></div>
            
            <div><a href="/justin/green_hammer/portfolio.shtml"><img src="slideshow/energy9.jpg" alt="Green building in Portland Oregon" /></a></div>
    
		</div>
	<!-- End Slideshow -->

	  <!-- Begin Content -->
<div id="content_index_new">
<div id="mission">We are a small design and construction firm whose mission is to massively decrease energy consumption and carbon emissions in our built environment by designing and building ultra high-performance living and work spaces that inspire urban livability. Our passion is to integrate beauty, and affordability with the world’s highest standards for energy performance, while promoting responsible, non-toxic, and local materials. <a href="about_us.shtml">Learn more</a></div>

<div id="announcements">
      	
        
          <h2>Announcements</h2>
          
     

 <?php
   // Include the file that does all the work
   include("rssannouncement.php");
   $url = "http://greenhammerconstruction.wordpress.com/category/announcement/feed/"; //this is the blogs url
   $rss=new rssFeed($url);
   if($rss->error){
	  print "<h1>Error:</h1>\n<p><strong>$rss->error</strong></p>";
   }else{

	  $rss->parse();

	  
	  $rss->showStories();
   }
?>


          
<div id="social_media_new"><a href="http://www.facebook.com/profile.php?id=1799162363&sk=wall" target="_blank"><img src="images/facebook.gif" alt="Facebook" width="113" height="35" class="no_border" /></a> <a href="http://twitter.com/green_hammer" target="_blank"><img src="images/twitter.gif" alt="Twitter" width="117" height="35" class="no_border" /></a></div>

          
    <!-- AddThis Button BEGIN -->
<div id="addthis_new">
<div class="addthis_toolbox_new addthis_default_style">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4c2c18c44a974c07" class="addthis_button_compact">Share</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_myspace"></a>
<a class="addthis_button_google"></a>
<a class="addthis_button_twitter"></a></div>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4c2c18c44a974c07"></script>
<!-- AddThis Button END -->
          
    </div>
    
   	<div id="features">
   	  <div class="feature">
        	  <h4 class="box_header_top">Green Hammer Publishes &quot;Urbanize &amp; Insulate&quot;</h4>
        	  <p class="no_margin"><img src="images/urbanize_insulate_thumbnail.jpg" alt="Home Performance Testing" width="90" height="139" class="img_left" />Architectural designer and energy consultant <a href="crew.shtml#dylan">Dylan Lamar</a> has authored his first book, Urbanize &amp; Insulate: The Development of a Fossil-Fuel Exit Strategy. The book provides a succinct and well-researched account of how these two basic agendas can radically reduce carbon-emissions in the built environment. <a href="publications.shtml">Read more</a></p>
   	  </div>
              
              <div class="feature_separator"><img src="images/seperator_horizontal_color.gif" alt="Separator" class="no_border" /></div>

      <div class="feature">
              <h4 class="box_header_top">America's First Passive House Office Building</h4>
              <p class="no_margin"><a href="http://www.passivehouse.us/passiveHouse/PHIUSHome.html" target="_blank"><img src="images/PCUN.jpg" alt="Passive House Office Building" width="140" height="69" class="img_left" /></a>Green Hammer is collaborating on the design of America’s first <a href="passive_house.shtml">Passive House</a> office building, the CAPACES Leadership Institute, a project of Oregon’s nonprofit farmworker union, PCUN. Features include a super-insulated shell with triple-pane windows, airtight construction, heat-recovery ventilation, night-flush cooling, a planted roof and shading system, and increased thermal mass (earthen walls). The 2600 square foot office will use 70% less energy than a comparable conventional office building.</p>
      </div>
              
              <div class="feature_separator"><img src="images/seperator_horizontal_color.gif" alt="Separator" class="no_border" /></div>
            
      <div class="feature">
	          <h4 class="box_header_top">LEED Gold home in Estacada featured in Oregonian's Home and Garden Northwest</h4>
	          <p class="no_margin"><a href="portfolio/nash/portfolio.shtml"><img src="portfolio/nash/thumbnails/nash_web_13.jpg" alt="LEED Gold Home" class="img_left" width="136" height="90" /></a>This <a href="portfolio/nash/portfolio.shtml">home</a> features radiant floor heat, all natural <a href="http://www.durisolbuild.com/thermal-wall-forms.shtml" target="_blank">insulated concrete forms (ICFs)</a>, passive solar design, <a href="http://www.sips.org/content/about/index.cfm?pageId=7" target="_blank">structural insulated roof panels (SIPs)</a>, <a href="http://www.fscus.org/" target="_blank">FSC certified lumber</a>, a <a href="http://en.wikipedia.org/wiki/Bioswale" target="_blank">bioswale  rainwater management system</a>, and  much more! Check out our <a href="portfolio/nash/portfolio.shtml">portfolio</a>.</p>
	          <p class="no_margin">Read the <a href="http://www.oregonlive.com/hg/index.ssf/2008/11/an_estacada_home_melds_industr.html" target="_blank">article in Home and Garden NW</a>.</p>
      </div>
              
              <div class="feature_separator"><img src="images/seperator_horizontal_color.gif" alt="Separator" class="no_border" /></div>
            
      <div class="feature">
	          <h4 class="box_header_top">Green Hammer provides Home Performance Testing</h4>
	          <p class="no_margin"><img src="images/thermal image shot.jpg" alt="Home Performance Testing" width="130" height="130" class="img_left" />Green Hammer provides state of the art home  performance testing. Our <a href="http://www.bpi.org/" target="_blank">Building  Performance Institute</a> (BPI) certified technicians utilize their deep  construction knowledge and cutting edge technology to provide you with full  energy performance diagnostics and definitive solutions to save you energy. Read  more about <a href="http://www.bpi.org/standards.aspx">BPI standards</a>.</p>
      </div>
      <div style="clear:both"></div>
   	</div>
        
  
        
        <div style="clear:both"></div>

                
  </div>
    <!-- End Content -->
    
    <div id="partners_new">
        
		<a href="http://www.northwestenergystar.com/"><img src="images/ENE_NW_v_c.jpg" width="87" height="120" class="partner" alt="Energy Star" /></a>
		<a href="http://www.bpi.org/"><img src="images/BPI Logo web.jpg" alt="Building Performance Institute" width="107" height="150" class="partner" /></a> 
		<a href="http://www.fsc.org/"><img src="images/FSC_COC_GH.jpg" alt="Forest Stewardship Council" width="69" height="100" class="partner" /></a> 
		<a href="http://energytrust.org/trade-ally/"><img src="images/ET Trade allies Color.jpg" alt="Energy Trust" width="140" height="68" class="partner" /></a> 
		<a href="http://www.usgbc.org/"><img src="images/member_logo_blk.jpg" alt="US Green Building Council" width="72" height="72" class="partner" /></a> 
		<a href="http://www.usgbc.org/DisplayPage.aspx?CMSPageID=147"><img src="images/leed_homes_logo_orange.jpg" alt="LEED for Homes" width="92" height="136" class="partner" /></a>
        <a href="http://www.earthadvantage.org/"><img src="images/EAInstitute Logo_color_tag.jpg" alt="Earth Advantage Institute" width="112" height="50" class="partner" /></a>
	  <div style="clear:both"></div>
            
  </div>
    
</div>
<!-- End Page Wrapper -->

<!-- Begin Footer -->
<?php include("footer.html"); ?>
<!-- End Footer -->
<?php include("scripts/ga.js"); ?>

</body>
</html>