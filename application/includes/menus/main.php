<?php

$menu = array(
//	'' 				=> 'Home',
	'contacts'  	=> 'Contatti',
	'videos' 		=> 'Video',
	'publications' 	=> 'Pubblicazioni',
	'photos' 		=> 'Foto',
	'events'		=> 'Eventi',
	'discography'	=> 'Discografia',
	'biography" class="current'		=> 'Biografia'
);

echo "<ul class=clearfix>";

foreach ( $menu as $menu_slug => $menu_entry ) {
	
//	$current = $menu_slug == $template_name ?: false;
	
	echo "<li>";
//		if ($current) { $menu_slug.= '#'; }
		echo '<a href="#' . $menu_slug . '"';
//		if ($current) { echo ' class=selected'; }
		echo '>' . $menu_entry . '</a>';
	echo "</li>";
}
echo "</ul>";