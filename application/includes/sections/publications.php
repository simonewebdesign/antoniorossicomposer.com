<!--

1 - DISSOLVENZE ATONALI per Quartetto di Saxofoni, Pianoforte e Sequenza Elettronica - PRENDINOTA EDIZIONI MUSICALI E. 482 P. (Prima edizione Maggio 2012)

2 - PRELUDIO Con vicinanza Bachiana per Pianoforte  -     PRENDINOTA EDIZIONI MUSICALI E. 452 P. (Prima edizione Marzo 2012)

3 - SEI CONTRAPPUNTI  per Pianoforte - II Volume (VII a XII)  PRENDINOTA EDIZIONI MUSICALI E. 484 P. (Prima edizione Giugno 2012)

4 - SEI CONTRAPPUNTI per Pianoforte -   PRENDINOTA EDIZIONI MUSICALI E. 451 P. (Prima edizione Marzo 2012)

5 - SUITE EUGUBINA per Violoncello e Banda Sinfonica -   PRENDINOTA EDIZIONI MUSICALI E. 453 P. (Prima edizione Dicembre 2011)

-->

<?php

$papers = array(
	array(
//		'image' => '1.jpg',
		'caption' => 'DISSOLVENZE ATONALI per Quartetto di Saxofoni, Pianoforte e Sequenza Elettronica - PRENDINOTA EDIZIONI MUSICALI E. 482 P. (Prima edizione Maggio 2012)'
	),
	array(
//		'image' => '2.jpg',
		'caption' => 'PRELUDIO Con vicinanza Bachiana per Pianoforte  -     PRENDINOTA EDIZIONI MUSICALI E. 452 P. (Prima edizione Marzo 2012)'
	),
	array(
//		'image' => '3.jpg',
		'caption' => 'SEI CONTRAPPUNTI  per Pianoforte - II Volume (VII a XII)  PRENDINOTA EDIZIONI MUSICALI E. 484 P. (Prima edizione Giugno 2012)'
	),	
	array(
//		'image' => '4.jpg',
		'caption' => 'SEI CONTRAPPUNTI per Pianoforte -   PRENDINOTA EDIZIONI MUSICALI E. 451 P. (Prima edizione Marzo 2012)'
	),	
	array(
//		'image' => '5.jpg',
		'caption' => 'SUITE EUGUBINA per Violoncello e Banda Sinfonica -   PRENDINOTA EDIZIONI MUSICALI E. 453 P. (Prima edizione Dicembre 2011)'
	)
);


foreach ($papers as $paper) {
	include INC . 'paper.php';
}