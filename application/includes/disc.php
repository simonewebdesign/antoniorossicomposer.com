<div class=disc>

	<a class="fancybox" rel=discs href="<?=ROOT?>img/covers/<?=$disc->id?>.png">
		<img class="lazy" src="<?=ROOT?>img/trans.gif" data-original="<?=ROOT?>img/covers/<?=$disc->id?>.png" width=240 height=240 alt="<?=$disc->title?>">
	</a>

	<div class=metadata>
		<span class=title><?=$disc->title?></span>
		<span class=author><?=$disc->author?></span>
		<span class=track><?=$disc->track?></span>
		<span class=album><?=$disc->album?></span>
		<span class=year><?=$disc->year?></span>
	</div>

</div>