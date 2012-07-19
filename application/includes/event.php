<div class=event itemscope itemtype="http://data-vocabulary.org/Event" id=event<?=$event->id?>>

	<meta itemprop=url content="<?=ROOT . $lang . '/event' . $event->id?>">
	
	<span class=date itemprop="startDate" datetime="<?=$event->startDate?>"><?=$event->theDatetime?></span>
	<br><br>
	<span class=place itemprop="location" itemscope itemtype="http://data-vocabulary.org/​Organization"><?=$event->place?></span>
	<h3 class=title itemprop="summary"><?=$event->title?></h3>
	<span class=description itemprop="description"><?=$event->description?></span>

</div>