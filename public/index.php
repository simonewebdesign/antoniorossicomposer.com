<?php include_once '../library/bootstrap.php'; ?>
<!doctype html>


<?=CREDITS?>


<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="<?=$lang?>"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <title>Antonio Rossi Composer</title>
  <meta name="description" content="<?=$meta[$lang]['description']?>">
  <meta name="keywords"	content="<?=$meta[$lang]['keywords']?>">
  <meta name="author" content="<?=$settings['site']['author']?>">
  <meta name="robots" content="<?=($template['name'] == 'backoffice') ? 'noindex,nofollow' : 'index,follow'?>">
  <meta name="viewport" content="width=device-width; "> <!-- user-scalable=0 -->
  <link rel="icon" type="image/png" href="<?=ROOT?>favicon.png">
  <?=$css?>
  <link rel="stylesheet" href="fonts/before-the-rain.css">
  <link rel="stylesheet" href="fonts/apolline.css">
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  
</head>
<body>

<div id="intro-wrapper">
	<audio id="intro-audio" autoplay>
	<source src="media/audio/01.ogg" type="audio/ogg">
	  <source src="media/audio/01.mp3" type="audio/mp3">
	</audio>

	<div id="intro">
		<h1>AntonioRossi</h1>
		<h2>Composer</h2>
		
		<?php include INC . 'menus/main.php'; ?>		
	</div>
	
	<div id="skip-intro">
	Skip Intro &raquo;
	</div>
</div>


<!-- <div id=bg></div> -->

<div id=header class="clearfix">

	<div id=navbar class=clearfix role=navigation>
	
		<h1 id=logo>
			<a href="#">
				AntonioRossi
			</a>
		</h1>
	
		<?php include INC . 'menus/main.php'; ?>
		
	</div>

</div>

<div id=wrapper class=clearfix> <!-- 2 columns: main and aside -->

	<div id=main role=main>
	
	<?php
	
	$pages = array_reverse($menu[$lang]);
//	var_dump($pages);
	$p_count = 1;
	
	foreach ($pages as $page) {
		if ($page != 'eventi' && $page != 'events') {
			echo "<section id=$page class=clearfix>";
				include_once INC . 'pages/' . $lang . "/$p_count-$page.php";
			echo "</section>";
		}
		$p_count++;		
	}
	?>
		
	</div>

	<div id=aside role=complementary>
		<?php include_once INC . 'pages/' . $lang . '/aside.php'; ?>
	</div>

</div>

<div id=footer>
	<div id=footer-content>
	Web Design by <a href="http://playpc.it">Playpc.it</a>
	</div>
</div>

<div id=flags>
	<a href="<?=ROOT?>">
		<img src="<?=ROOT?>img/flags/it.png" width=32 height=32 alt="Italiano">
	</a>
	<a href="<?=ROOT?>en">
		<img src="<?=ROOT?>img/flags/en.png" width=32 height=32 alt="English">
	</a>

</div>


  <!-- End of Content /// JavaScript Begin --->

<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script> 
  
  <script>
	var ROOT = '<?=ROOT?>';
	var ABSOLUTE_ROOT = '<?=ABSOLUTE_ROOT?>';
  </script>
  
  <script src="<?=ROOT?>js/script.js"></script>
  <script src="<?=ROOT?>plugins/lazyload/jquery.lazyload.min.js"></script>
  
  <?php if ( $template['name'] == 'backoffice' ) { ?>
  <script src="<?=ROOT?>js/ajax.js"></script>
  <script src="<?=ROOT?>js/backoffice.js"></script> 
  <?php } ?>

  <!-- begin fancybox -->
	<!-- Add mousewheel plugin -->
	<script type="text/javascript" src="<?=ROOT?>plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="<?=ROOT?>plugins/fancybox/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=ROOT?>plugins/fancybox/source/jquery.fancybox.pack.js?v=2.0.6"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="<?=ROOT?>plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=ROOT?>plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
	<script type="text/javascript" src="<?=ROOT?>plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.0"></script>

	<link rel="stylesheet" href="<?=ROOT?>plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
	<script type="text/javascript" src="<?=ROOT?>plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				padding : 0
			});
		});
	</script>
  <!-- end 	 fancybox -->
  
  <script src="<?=ROOT?>plugins/waypoints/waypoints.min.js"></script>
  <script src="<?=ROOT?>js/scroll.js"></script>
  <!--
  <script>
    var _gaq=[['_setAccount','<?=ANALYTICS_CODE?>'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  -->
</body>
</html>