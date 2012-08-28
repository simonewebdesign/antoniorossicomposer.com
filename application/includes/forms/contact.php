<?php
$form['it']['legend'] 		= 'Lascia un messaggio';
$form['en']['legend'] 		= 'Leave a message';
$form['it']['name'] 		= 'Nome';
$form['en']['name'] 		= 'Name';
$form['it']['email'] 		= 'Email';
$form['en']['email'] 		= 'Email';
$form['it']['subject'] 		= 'Oggetto';
$form['en']['subject'] 		= 'Subject';
$form['it']['message']		= 'Messaggio';
$form['en']['message']		= 'Message';
$form['it']['submit']		= 'Invia';
$form['en']['submit']		= 'Submit';
$form['it']['subject_placeholder'] = 'Saluti';
$form['en']['subject_placeholder'] = 'Hello!';
?>

<form id=contact-form method=POST> <!-- ajax_send_mail -->
	
	<fieldset>
	
		<legend><?=$form[$lang]['legend']?></legend>
	
		<p class=clearfix>
			<label for=name><?=$form[$lang]['name']?></label>
			<input id=name name=name type=text maxlength=50 required>
		</p>
		<p class=clearfix>
			<label for=email><?=$form[$lang]['email']?></label>
			<input id=email name=email type=email maxlength=200 required>
		</p>
		<p class=clearfix>
			<label for=subject><?=$form[$lang]['subject']?></label>
			<input id=subject name=subject type=text maxlength=100 placeholder="<?=$form[$lang]['subject_placeholder']?>">
		</p>
		<p class=clearfix>
			<label for=message><?=$form[$lang]['message']?></label>
			<textarea id=message name=message rows=10 cols=30 required></textarea>
		</p>
		
		<p class=clearfix>
		<?php
			// including reCAPTCHA widget -- https://developers.google.com/recaptcha/docs/php?hl=it-IT
		    require_once('recaptchalib.php');
		    $publickey = "6LfuLtQSAAAAAKUu45WzzMqehtZBGcqOQ91M92FZ"; // you got this from the signup page
		    echo recaptcha_get_html($publickey);
		?>
		</p>
		
		<input type="submit" name="submit" value="<?=$form[$lang]['submit']?>">
		
		<div id="response"></div>
		
	</fieldset>
	
</form>