<?php

	// needs ($_POST): name, email, subject, message
	$to = 'xyzzy@autistici.org';
	
	$header = "From: {$_POST['name']} <{$_POST['email']}>";
	
	/* mail(to,subject,message,additional_headers,additional_parameters) */
	if ( mail($to, $_POST['subject'], $_POST['message'], $header) )
		echo "<p style='color:#0e0;background:rgba(0,0,0,.2);text-shadow:0 0 1px #000;'>Il messaggio è stato recapitato correttamente.</p>";
	else
		echo "<p style='color:#800'>Il messaggio non è stato inviato. Riprovare.</p>";	