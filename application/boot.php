<?php

/***** The Custom Boot *****/

$lang = isset($get[0]) ? $get[0] : 'it';

// stylesheets
$css.= str_replace(':ph', 'modules/navbar', 		STYLESHEET);
$css.= str_replace(':ph', 'modules/contact-form', 	STYLESHEET);
$css.= str_replace(':ph', 'classes/disc', 			STYLESHEET);
$css.= str_replace(':ph', 'classes/track', 			STYLESHEET);
$css.= str_replace(':ph', 'classes/event',			STYLESHEET);
$css.= str_replace(':ph', 'classes/paper', 			STYLESHEET);

// meta tags
$meta = array(
	'it' => array(
		'description' => 'Sito ufficiale di Antonio Rossi. Le sue ultime opere musicali, video, foto, eventi e molto altro ancora.',
		'keywords'	  => 'antonio rossi, opere musicali, musica classica, antonio rossi video, antonio rossi foto, antonio rossi eventi, antonio canzoni, antonio rossi composer'
	),
	'en' => array(
		'description' => 'Antonio Rossi\'s official website, including the latest music, albums, songs, music videos, events and more updates.',
		'keywords'	  => 'antonio rossi, classical music, antonio rossi composer, antonio, rossi, antonio album, antonio songs, antonio rossi music, antonio rossi events, antonio photos, antonio videos'
	)
);

$sections = array(
	'biography' 	=> 'biografia',
	'events' 		=> 'eventi',
	'discography'	=> 'discografia',
	'tracks'		=> 'ascolti',
	'photos'		=> 'foto',
	'publications'	=> 'pubblicazioni',
	'videos'		=> 'video',
	'contacts'		=> 'contatti'
);
/*
$sections = array(
	'it' => array(
		'biografia',
		'eventi',
		'discografia',
		'ascolti',
		'foto',
		'pubblicazioni',
		'video',		
		'contatti'
	),
	'en' => array(
		'biography',
		'events',
		'discography',
		'tracks',
		'photos',
		'papers',
		'videos',		
		'contacts'
	)
);
*/

$sections_main = array(
	'it' => array(
		'biografia',
//		'eventi',
		'discografia',
		'ascolti',
		'foto',
		'pubblicazioni',
		'video',		
		'contatti'
	),
	'en' => array(
		'biography',
//		'events',
		'discography',
		'tracks',
		'photos',
		'papers',
		'videos',		
		'contacts'
	)
);
	
$sections_aside =  array(
	'it' => array('eventi'),
	'en' => array('events')
);