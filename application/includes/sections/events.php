<?php 

$en_format_string = "%D %M %Y, %h:%i %p";

$format_string = $lang == 'it' ? DATE_FORMAT_DATETIME : $en_format_string;

$events_query = "SELECT id, title_$lang as `title`, description_$lang as `description`, place_$lang as `place`, date_format(eventDate, '$format_string') as theDatetime, date_format( eventDate, '%m-%d-%YT%d:%i-08:00' ) AS startDate FROM events ORDER BY eventDate DESC";

$events = $db->query($events_query);

while ( $event = $events->fetchObject() ) {
	include INC . 'event.php';
	echo "<hr>";
}