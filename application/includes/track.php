<div id=track<?=$track->id?> class=track itemscope itemtype="http://schema.org/MusicRecording">

	<h3 itemprop=name><?=$i?>) <?=$track->title?></h3>
  
	<audio preload=none controls>
  
    <?php foreach ($extensions as $ext) { ?>
      <source src="<?=ROOT?>media/audio/<?=$track->id?>.<?=$ext?>" itemprop=audio>
    <?php } ?>
    
    <?php if ($lang == 'en') { ?>
      <small>Your Web Browser doesn't support the HTML5 &lt;audio&gt; element. Please <a href="http://www.mozilla.org/firefox" class="upgrade-browser">upgrade it NOW</a>!</small>
    <?php } else { ?>
      <small>Il tuo Web Browser non supporta l'elemento HTML5 &lt;audio&gt;. <a href="http://www.mozilla.org/firefox" class="upgrade-browser">Aggiorna ORA il tuo Browser</a>!</small>
    <?php } ?>

	</audio>

</div>