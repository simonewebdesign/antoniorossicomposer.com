<?php

/***** The Custom Boot *****/

$lang = isset($get[0]) ? $get[0] : 'it';

// stylesheets
$css.= str_replace(':ph', 'modules/navbar', STYLESHEET);
$css.= str_replace(':ph', 'modules/contact-form', STYLESHEET);
$css.= str_replace(':ph', 'classes/disc', STYLESHEET);

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