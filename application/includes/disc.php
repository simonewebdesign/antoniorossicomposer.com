<div class=disc>

	<a class="fancybox" rel=discs href="<?=ROOT?>img/covers/<?=$disc->id?>.png">
		<img class="lazy" src="<?=ROOT?>img/white.jpg" data-original="<?=ROOT?>img/covers/<?=$disc->id?>.png" width=260 height=260 alt="<?=$disc->title?>">
	</a>

	<div class=metadata>
		<span class=title><?=$disc->title?></span>
		<span class=author><?=$disc->author?></span>
		<span class=track><?=$disc->track?></span>
		<span class=album><?=$disc->album?></span>
		<span class=year><?=$disc->year?></span>
	</div>

</div>