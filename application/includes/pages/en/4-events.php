<h2>Events</h2>

<?php 

$en_format_string = "%M %D, %Y - %I:%m %p";

$format_string = $lang == 'it' ? DATE_FORMAT_DATETIME : $en_format_string;

$events_query = "SELECT title_$lang as `title`, description_$lang as `description`, place_$lang as `place`, date_format(eventDate, '$format_string') as theDatetime FROM events ORDER BY eventDate DESC";

$events = $db->query($events_query);

while ( $event = $events->fetchObject() ) {
	include INC . 'event.php';
	echo "<hr>";
}