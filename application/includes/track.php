<div id=track<?=$track->id?> class=track itemscope itemtype="http://schema.org/MusicRecording">

	<h3 itemprop=name><?=$i?>) <?=$track->title?></h3>
<<<<<<< HEAD
  
	<audio preload=none controls>
  
    <?php foreach ($extensions as $ext) { ?>
      <source src="<?=ROOT?>media/audio/<?=$track->id?>.<?=$ext?>" itemprop=audio>
    <?php } ?>
    
    <?php if ($lang == 'en') { ?>
      <small>Your Web Browser doesn't support the HTML5 &lt;audio&gt; element. Please <a href="http://www.mozilla.org/firefox" class="upgrade-browser">upgrade it NOW</a>!</small>
    <?php } else { ?>
      <small>Il tuo Web Browser non supporta l'elemento HTML5 &lt;audio&gt;. <a href="http://www.mozilla.org/firefox" class="upgrade-browser">Aggiorna ORA il tuo Browser</a>!</small>
    <?php } ?>

=======
	<audio controls preload=none>
	<?php foreach ($extensions as $ext) { ?>
		<source src="<?=ROOT?>media/audio/<?=$track->id?>.<?=$ext?>" itemprop=audio>-
	<?php } ?>
	<?php if ($lang == 'en') { ?>
		<small>Your web browser doesn't support audio. Please <a href="http://www.mozilla.org/firefox" class="upgrade-browser">download Firefox</a> for free.</small>
	<?php } else { ?>
		<small>Il tuo browser web non supporta l'audio. <a href="http://www.mozilla.org/firefox" class="upgrade-browser">Scarica Firefox</a> gratuitamente.</small>
	<?php } ?>
>>>>>>> 2e15e17f6e67dbb10bff4cb884f3fc33ed0cf257
	</audio>

</div>