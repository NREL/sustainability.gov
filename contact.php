<?php
if( isset($_POST['email']) )
{
	$to = 'dee_s_siegel@ceq.eop.gov';
	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
	<title>Office of Federal Sustainability | Thank You for Contacting the Office of Federal Sustainability</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="manifest.json">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
  <link rel="stylesheet" href="css/colors/slate.css" />
  <link href="js/mainmenu/sticky.css" rel="stylesheet">
  <link href="js/mainmenu/bootstrap.css" rel="stylesheet">
  <link href="js/mainmenu/fhmm.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="js/revolutionslider/rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="js/revolutionslider/css/slider_main.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
  <link rel="stylesheet" href="js/carousel/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="js/carousel/skin.css" />
  <link rel="stylesheet" href="js/form/sky-forms.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="js/lightbox/jquery.fancybox.css" media="screen" />
  <link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" type="text/css" href="tipuesearch/css/tipuesearch.css">
</head>
<body>
<div class="wrapper_boxed">
	<div class="site_wrapper">
		<header id="header">	
    	<div id="trueHeader">
				<div class="wrapper">
					<div class="container">
						<div class="logo"><a href="index.html" id="logo"></a></div>
						<div class="searchform">
							<form action="search.html">
								<div class="tipue_search_left"><input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required></div>
								<div class="tipue_search_right"><img src="tipuesearch/search.png" class="tipue_search_icon"></div>
								<div style="clear: both;"></div>
							</form>
						</div>
						<div class="clearfix"></div>
						<div class="menu_main">
							<nav class="navbar navbar-default fhmm" role="navigation">
								<div class="navbar-header"><button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">Menu <i class="fa fa-bars tbars"></i></button></div>        
		            <div id="defaultmenu" class="navbar-collapse collapse">
		              <ul class="nav navbar-nav">
			              <li><a href="index.html">Home</a></li>
			              <li><a href="policy.html">Policy</a></li>
			              <li><a href="performance.html">Performance Data</a></li>
			              <li><a href="resources.html">Resources &amp; Guidance</a></li>
		              </ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
  	</header>
		<div class="clearfix"></div>
		<div class="page_title2">
			<div class="container">
				<div class="title"><h1>Thank You</h1></div>
				<div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> Contact Us</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="container">
    	<div class="content_fullwidth">
      	<div class="one_half">
        	<h2>Thank You for Contacting the Office of Federal Sustainability</h2><p>We'll be in touch shortly.</p>
      	</div>
				<div class="one_half last">
					<div class="address_info">
						<h3>Address <i>Info</i></h3>
	          <ul>
	            <li> <strong>Council on Environmental Quality</strong><br />
	              730 Jackson Place<br />Washington, D.C.</li>
	          </ul>
        	</div>
					<h3>Find the <strong>Address</strong></h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.0651630393477!2d-77.04058958474154!3d38.89962515441803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bc6fce7b63%3A0x20e185642b24244a!2s730+Jackson+Pl+NW%2C+Washington%2C+DC+20506!5e0!3m2!1sen!2sus!4v1507749248718" style="width:100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    	</div>
    </div>
		<div class="clearfix margin_top7"></div>
			<div class="footer1">
				<div class="container">
			   <div class="one_third">
			    <ul>
			      <li><img src="images/ofs_ceq_sm.png" alt="CEQ Logo" /><br /> 730 Jackson Place<br />Washington, D.C.<br /><br /></li>
			    </ul>     
				</div>
		    <div class="one_fourth" style="padding-top:23px; margin-left:20px">
					<div>
			      <h3 class="nocaps">Government Sites</h3>
			      <ul>
			        <li><a href="https://www.whitehouse.gov">The White House</a></li>
			      </ul>
			    </div>
		    </div>		    
		    <div class="one_fourth" style="padding-top:23px; margin-left:20px">
		      <h3 class="nocaps">About This Site</h3>
		      <ul>
		      	<li><a href="privacy.html">Privacy Policy</a></li>
		        <li><a href="contact.html">Contact Us</a></li> 
		      </ul>
		    </div>
    	</div>
		</div>
		<div class="clearfix"></div>
		<div class="copyright_info">
		  <div class="container">
		    <div>CEQ acknowledges and appreciates the support and service provided by the U.S. Department of Energy's Federal Energy Management Program supporting this website.</div>
		  </div>
		</div>
		<a href="#" class="scrollup">Scroll</a>
	</div>
</div>
<script type="text/javascript" src="js/universal/jquery.js"></script>
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/mainmenu/bootstrap.min.js"></script>
<script src="js/mainmenu/fhmm.js"></script>
<script type="text/javascript" src="js/carousel/jquery.jcarousel.min.js"></script>
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>
<script src="js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
</script>
<script type="text/javascript" src="js/accordion/custom.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/custom.js"></script>
<script type="text/javascript" src="js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js"></script>
<script src="js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-374977-27']);
	_gaq.push(['_trackPageview']);
	
	(function() {
	  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main3.js"></script>
<script defer src="js/carousel/jquery.flexslider.js"></script>
<script defer src="js/carousel/custom.js"></script>
<script type="text/javascript" src="js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/lightbox/custom.js"></script>
<script type="text/javascript">
	// Menu drop down effect
	$('.dropdown-toggle').dropdownHover().dropdown();
	$(document).on('click', '.fhmm .dropdown-menu', function(e) {
	  e.stopPropagation()
	})
</script>
</body>
</html>