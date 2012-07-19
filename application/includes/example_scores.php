<?php

$scores_title = $lang == 'it' ? "Partiture d'esempio" : "Example Scores";
$scores_path = 'media/scores/';
$scores = scandir($scores_path);
?>

<hr>

<h3><?=$scores_title?></h3>

<ul>
<?php
foreach ($scores as $score) {
	if ( is_file($scores_path.$score) ) {
?>
	<li>
		<a href="<?=$scores_path.$score?>"><?=str_replace('.pdf','',$score)?></a>
	</li>
<?php
	}
}
?>
</ul>