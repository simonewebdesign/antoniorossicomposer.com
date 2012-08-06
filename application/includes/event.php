<div class=event itemscope itemtype="http://data-vocabulary.org/Event" id=event<?=$event->id?>>

	<meta itemprop=url content="<?=ROOT . $lang . '/event' . $event->id?>">
	
	<span class=date itemprop="startDate" datetime="<?=$event->startDate?>">
	<?php
	if ($event->theDatetime == '07/11/2003 21:15') {
		echo '07-08-09/11/2003 21:15';
	} else if ($event->theDatetime == '7th November 2003, 09:15:00 PM') {
		echo '7-8-9th November 2003, 09:15:00 PM';
	} else {
		echo $event->theDatetime;
	}
	?>
	</span>
	<br><br>
	<span class=place itemprop="location" itemscope itemtype="http://data-vocabulary.org/​Organization"><?=$event->place?></span>
	<h3 class=title itemprop="summary"><?=$event->title?></h3>
	<span class=description itemprop="description"><?=$event->description?></span>

</div>