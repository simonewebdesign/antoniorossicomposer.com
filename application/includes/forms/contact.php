<?php
if (isset($_POST['submit'])) {

	$header = "From: ".$_POST['name']." <".$_POST['email'].">";
	
	/* mail(to,subject,message,additional_headers,additional_parameters) */
	if (!mail(MAIL_TO, $_POST['subject'], $_POST['message'], $header))
		echo "<p style='color:#800'>Il messaggio non è stato inviato. Riprovare.</p>";
	else
		echo "<p style='color:green'>Il messaggio è stato recapitato correttamente.</p>";
}
?>

<form id=contact-form method=POST action="<?=ROOT?>contatti">
	
	<fieldset><legend>Lascia un messaggio</legend>
	
		<p class=clearfix>
			<label for=name>Nome</label>
			<input id=name name=name type=text maxlength=50 required>
		</p>
		<p class=clearfix>
			<label for=email>Email</label>
			<input id=email name=email type=email maxlength=200 required>
		</p>
		<p class=clearfix>
			<label for=subject>Oggetto</label>
			<input id=subject name=subject type=text maxlength=100 placeholder="Ciao!">
		</p>
		<p class=clearfix>
			<label for=message>Messaggio</label>
			<textarea id=message name=message rows=10 cols=30 required></textarea>
		</p>
		
		<input type="submit" name="submit" value="Invia">
		
	</fieldset>
	
</form>