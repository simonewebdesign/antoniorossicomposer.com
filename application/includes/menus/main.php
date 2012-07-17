<?php

$menu = array(
	'it' => array(
		'contatti',
//		'video',
		'pubblicazioni',
		'foto',
		'eventi',
		'ascolti',
		'discografia',
		'biografia'
	),
	'en' => array(
		'contacts',
//		'videos',
		'papers',
		'photos',
		'events',
		'tracks',
		'discography',
		'biography'
	)
);

echo "<ul class=clearfix>";

foreach ( $menu[$lang] as $m ) {
	
	echo "<li>";
		echo '<a href="#' . $m . '"';
		echo '>' . ucfirst($m) . '</a>';
	echo "</li>";
}
echo "</ul>";