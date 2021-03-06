<div id=track<?=$track->id?> class=track itemscope itemtype="http://schema.org/MusicRecording">

	<h3 itemprop=name><?=$i?>) <?=$track->title?></h3>
  
	<audio preload=none controls>
  
    <?php foreach ($extensions as $ext) { ?>
      <source src="<?=ROOT?>media/audio/<?=$track->id?>.<?=$ext?>" itemprop=audio>
    <?php } ?>
    
    <?php if ($lang == 'en') { ?>
      <small>Your web browser doesn't support audio. Please <a href="http://www.mozilla.org/firefox" class="upgrade-browser">download Firefox</a> for free.</small>
    <?php } else { ?>
      <small>Il tuo browser web non supporta l'audio. <a href="http://www.mozilla.org/firefox" class="upgrade-browser">Scarica Firefox</a> gratuitamente.</small>
    <?php } ?>

	</audio>

</div>