<?php

$discs = $db->query("SELECT * FROM discs");
while ( $disc = $discs->fetchObject() ) {
	include INC . 'disc.php';
}