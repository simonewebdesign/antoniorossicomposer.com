<h2>Ascolti</h2>

<?php

$tracks = $db->query("SELECT * FROM tracks");
$extensions = array('mp3','ogg'); 

$i=1;
while ( $track = $tracks->fetchObject() ) {
	include INC . 'track.php';
	$i++;
}