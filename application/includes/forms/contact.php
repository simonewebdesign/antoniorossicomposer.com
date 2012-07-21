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
		
		<div id="response"></div>
		
	</fieldset>
	
</form>

