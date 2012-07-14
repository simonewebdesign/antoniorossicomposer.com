<div itemscope itemtype="http://schema.org/MusicRecording" class=track id=track<?=$track->id?>>
	<h3 itemprop=name><?=$track->title?></h3>
	<audio controls preload=none>
	<?php foreach ($extensions as $ext) { ?>
		<source src="<?=ROOT?>media/audio/<?=$track->id?>.<?=$ext?>" itemprop=audio>-
	<?php } ?>
	</audio>
	<!--<meta itemprop="duration" content="PT6M33S">-->
</div>
<!--
<script>
// tracks' duration
var track = document.getElementById('track<?=$track->id?>');
var meta = track.getElementsByTagName('meta')[0];
var audio = track.getElementsByTagName('audio')[0];
var audio = track.getElementsByTagName('audio')[1];
var duration = audio.duration;
meta.setAttribute('content','PT');

console.log( duration  );
</script>
-->