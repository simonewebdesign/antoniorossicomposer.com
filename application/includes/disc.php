<div class="disc clearfix">

	<a class="fancybox" rel="discs" href="<?=ROOT?>img/covers/<?=$disc->id?>.png">
		<img class="lazy" src="<?=ROOT?>img/trans.gif" data-original="<?=ROOT?>img/covers/<?=$disc->id?>.png" width=200 alt="<?=$disc->title?>">
	</a>

	<div class=metadata>
		<h4 class=title><?=$disc->title?></h4>
		<h5 class=author><?=$disc->author?></h5>
		<span class=track><?=$disc->track?></span>
		<span class=album><?=$disc->album?></span>
		<span class=year><?=$disc->year?></span>
	</div>

</div>