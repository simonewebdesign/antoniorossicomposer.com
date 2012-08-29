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
  <link rel="stylesheet" href="<?=ROOT?>fonts/before-the-rain.css">
  <link rel="stylesheet" href="<?=ROOT?>fonts/apolline.css">
  <script src="<?=ROOT?>js/libs/modernizr.custom.min.js"></script>
</head>
<body>

<div id="intro-wrapper">

	<div id="intro">
		<h1><span>A</span><span>n</span><span>t</span><span>o</span><span>n</span><span>i</span><span>o</span><span>R</span><span>o</span><span>s</span><span>s</span><span>i</span></h1>
		<h2>Composer</h2>
	</div>
	
	<div id="skip-intro">
	<?=$lang == 'it' ? 'Salta' : 'Skip'?> Intro <br>↓
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
	
		<?php // MAIN MENU
			echo "<ul class=clearfix>";

			$menu = array_reverse($sections);
			
			foreach ( $menu as $en => $it ) {
				
				$menu_title = $lang == 'it' ? $it : $en; 
				
				echo "<li>";
					echo '<a href="#' . $en . '"';
					echo '>' . ucfirst($menu_title) . '</a>';
				echo "</li>";
			}
			echo "</ul>";
		?>
		
	</div>

</div>

<div id=wrapper class=clearfix> <!-- 2 columns: main and aside -->

	<div id=main role=main>
	<?php
  
  unset($sections['events']); // events section is excluded from main. It's hardcoded on #aside.
  
	foreach ($sections as $en => $it) {
    // printing sections    
    $section_title = $lang == 'it' ? $it : $en;
    
    echo "<section id=$en class=clearfix>";
      echo "<h2>" . ucfirst($section_title) . "</h2>";
      include_once INC . "sections/$en.php";
    echo "</section>";
	}
	?>	
	</div>

	<div id=aside role=complementary>
		<section id=scores class=clearfix>
		<?php include INC . 'example_scores.php'; ?>
		</section>
		<hr>
		<img class=noborder src="<?=ROOT?>img/cit-<?=$lang?>.png">
		<hr>
		<section id=events class=clearfix>
			<h2><?=$lang == 'it' ? 'Eventi' : 'Events'?></h2>
			<?php include INC . 'sections/events.php'; ?>
		</section>
	</div>

</div>

<div id=footer>
	<div id=footer-content>
  
  	<nav>
			<ul>
				<li><a class="top" title="Back to top">Top</a></li>
			</ul>
		</nav>
  
  
	Web Design by <a href="http://www.playpc.it">Playpc.it</a>
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

  <script src="<?=ROOT?>js/libs/jquery-1.8.0.min.js"></script>
  
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

  <!-- up the volume -->
  <script>
  $(function(){
  
    var lang = '<?=$lang?>';
  
    if (Modernizr.audio) {
      // HTML5 audio supported
      if (lang == 'en') {
        $('#intro-wrapper').append('<p class="up-volume">Up the volume...</p>');
      } else {
        $('#intro-wrapper').append('<p class="up-volume">Alza il volume...</p>');
      }
      // fare l'animazione $('.up-volume') che va su e opacity va a 0.
      setTimeout( function(){
        $('.up-volume').animate({
          opacity: 0,
          bottom: '50px'
        }, 3000);
      }, 2000);
    } else {
      // HTML5 audio not supported
      if (lang == 'en') {
        $('#intro-wrapper').append('<p>Your web browser doesn\'t support some of the technologies used in this site.<br>For a better navigation experience, we invite you to download <a style="color:orange" href="http://mozilla.org/firefox">Mozilla Firefox</a>. It\'s free.</p>');
      } else {
        $('#intro-wrapper').append('<p>Il tuo web browser non supporta alcune delle tecnologie usate all\'interno di questo sito.<br>Per una migliore esperienza di navigazione, ti consigliamo di scaricare gratuitamente <a style="color:orange" href="http://mozilla.org/firefox">Mozilla Firefox.</a>');
      }
    
    }
  });
  </script>
  
  <script>
    var _gaq=[['_setAccount','<?=ANALYTICS_CODE?>'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>