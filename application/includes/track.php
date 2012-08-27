<div itemscope itemtype="http://schema.org/MusicRecording" class=track id=track<?=$track->id?>>
	<h3 itemprop=name><?=$i?>) <?=$track->title?></h3>
	<audio controls preload=none>
	<?php foreach ($extensions as $ext) { ?>
		<source src="<?=ROOT?>media/audio/<?=$track->id?>.<?=$ext?>" itemprop=audio>-
	<?php } ?>
	<?php if ($lang == 'en') { ?>
		<small>Your Web Browser doesn't support the HTML5 &lt;audio&gt; element. Please <a href="http://www.mozilla.org/firefox" class="upgrade-browser">upgrade it NOW</a>!</small>
	<?php } else { ?>
		<small>Il tuo Web Browser non supporta l'elemento HTML5 &lt;audio&gt;. <a href="http://www.mozilla.org/firefox" class="upgrade-browser">Aggiorna ORA il tuo Browser</a>!</small>
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