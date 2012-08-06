<?php

include_once '../config/email.php';

require_once('recaptchalib.php');
$privatekey = "6LfuLtQSAAAAAKF08Sk38oq0lQxFF30Fpoa4AWGa";
$resp = recaptcha_check_answer ($privatekey,
							$_SERVER["REMOTE_ADDR"],
							$_POST["recaptcha_challenge_field"],
							$_POST["recaptcha_response_field"]);

if (!$resp->is_valid) { // What happens when the CAPTCHA was entered incorrectly
	echo "<p style='color:#800'>Il messaggio non è stato inviato. Riprovare. (reCAPTCHA said: " . $resp->error . ")</p>";	

} else { // Your code here to handle a successful verification

	// needs ($_POST): name, email, subject, message
	$to = MAIL_TO;
//debug	$to = 'info@playpc.it';

	$header = "From: {$_POST['name']} <{$_POST['email']}>";

	/* mail(to,subject,message,additional_headers,additional_parameters) */
	if ( mail($to, '[DAL SITO] '.$_POST['subject'], $_POST['message'], $header) )
		echo "<p style='color:#0e0;background:rgba(0,0,0,.2);text-shadow:0 0 1px #000;'>Il messaggio è stato recapitato correttamente.</p>";
	else
		echo "<p style='color:#800'>Il messaggio non è stato inviato. Riprovare.</p>";

}