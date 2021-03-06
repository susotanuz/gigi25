<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="max-age=86400"/>

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>gigi25</title>
  <meta name="description" content="Multimedia content admin">
  <meta name="author" content="Suso">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php echo base_url('css/reset.css');?>">
  <link media="only screen and (min-device-width: 481px)" href="<?php echo base_url('css/960.css');?>" type= "text/css" rel="stylesheet">
  <link media="only screen and (min-device-width: 481px)" href="<?php echo base_url('css/960_12_col.css');?>" type= "text/css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('css/jquery.fancybox-1.3.4.css');?>">
  <link media="only screen and (max-device-width: 480px)" href="<?php echo base_url('css/mobil.css');?>" type= "text/css" rel="stylesheet">
  <link media="only screen and (min-device-width: 481px)" href="<?php echo base_url('css/style.css');?>" type= "text/css" rel="stylesheet">
  <!-- 960gs 16_col and 24_col files comented, chose choose the file that you need  
  <link rel="stylesheet" href="<?php #echo base_url('css/960_16_col.css');?>">
  <link rel="stylesheet" href="<?php #echo base_url('css/960_24_col.css');?>"> 
  -->   
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo base_url('js/libs/modernizr-2.0.6.min.js');?>"></script>
</head>

<body>

  <div id="container">
    <header class="container_12">
		<?php $this->load->view('includes/header');?>
	</header>		  
    <div id="main" role="main">
		<?php $this->load->view($main_content);?>
    </div>
    <footer class="container_12">
		<?php $this->load->view('includes/footer');?>
    </footer>
  </div> <!--! end of #container -->

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->


  <!-- scripts concatenated and minified via ant build script--> 
  <script defer src="<?php echo base_url('js/libs/jquery-1.6.2.js');?>"></script>  
  <script defer src="<?php echo base_url('js/libs/jquery.easing-1.3.js');?>"></script>  
  <script defer src="<?php echo base_url('js/libs/jquery.fancybox-1.3.4.js');?>"></script>
  <script defer src="<?php echo base_url('js/libs/jquery.mousewheel-3.0.4.js');?>"></script>
  <script defer src="<?php echo base_url('js/libs/ajaxupload.js');?>"></script>
  <script defer src="<?php echo base_url('js/libs/jquery.scrollTo.js');?>"></script>
  <script defer src="<?php echo base_url('js/script.js');?>"></script>
  <script defer src="<?php echo base_url('js/plugins.js');?>"></script>
  
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
