<div class="disc clearfix">

	<a class="fancybox" rel="discs" href="<?=ROOT?>img/covers/<?=$disc->id?>.png">
		<img class="lazy" src="<?=ROOT?>img/trans.gif" data-original="<?=ROOT?>img/covers/<?=$disc->id?>.png" width=200 alt="<?=$disc->title?>">
	</a>

	<div class=metadata>
		<h3 class=title><?=$disc->title?></h3>
		<h4 class=author><?=$disc->author?></h4>
		<span class=track><?=$disc->track?></span><br>
		<span class=album><?=$disc->album?></span>
		<span class=year><?=$disc->year?></span>
	</div>

</div>