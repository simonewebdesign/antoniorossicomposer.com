<?php

$menu = array(
	'it' => array(
		'contacts'  	=> 'Contatti',
		'videos' 		=> 'Video',
		'papers'	 	=> 'Pubblicazioni',
		'photos' 		=> 'Foto',
		'events'		=> 'Eventi',
		'discography'	=> 'Discografia',
		'biography'		=> 'Biografia'
	),
	'en' => array(
		'contacts'  	=> 'Contacts',
		'videos' 		=> 'Videos',
		'papers'	 	=> 'Papers',
		'photos' 		=> 'Photos',
		'events'		=> 'Events',
		'discography'	=> 'Discography',
		'biography'		=> 'Biography'
	)
);

echo "<ul class=clearfix>";

foreach ( $menu[$lang] as $menu_slug => $menu_entry ) {
	
	echo "<li>";
		echo '<a href="#' . $menu_slug . '"';
		echo '>' . $menu_entry . '</a>';
	echo "</li>";
}
echo "</ul>";