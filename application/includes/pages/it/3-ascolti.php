<h2>Ascolti</h2>

<?php

$tracks = $db->query("SELECT * FROM tracks");
$extensions = array('mp3','ogg'); 


while ( $track = $tracks->fetchObject() ) {

	echo "<h3>" . $track->title . "</h3>";
	
	echo "<audio controls preload=none>";
	foreach ($extensions as $ext) {
		echo '<source src="' . ROOT . 'media/audio/' . $track->id . '.' . $ext . '">';
	}
	echo "</audio>";
}