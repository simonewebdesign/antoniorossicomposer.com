

/******************************************
*************** CONTACT FORM **************
******************************************/
$(function(){

	$('#contact-form').on('submit', function(e) {

		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		var recaptcha_challenge_field = $('#recaptcha_challenge_field').val();
		var recaptcha_response_field = $('#recaptcha_response_field').val();

		var request = {"name": name, "email": email, "subject": subject, "message": message, "recaptcha_challenge_field": recaptcha_challenge_field, "recaptcha_response_field": recaptcha_response_field};
		
		$('#response').load( ROOT + 'ajax_send_mail.php', request ); //, function() { alert('callback!'); }
		
		e.preventDefault();
    
	});
});



/**********************
******** AUDIO ********
**********************/

if (Modernizr.audio) {
  console.log('Audio supported!');

  var audio = document.createElement("audio");
  
  if (Modernizr.audio.ogg) {
    audio.src = 'media/audio/01.ogg';
  } else 
  if (Modernizr.audio.mp3) {
    audio.src = 'media/audio/01.mp3';
  }

  audio.addEventListener("canplaythrough", function() {
    console.log('The file is loaded and ready to play!');
    audio.play();
    
    // intro must play here.
    /*
    $.getScript("js/intro.js", function(data, textStatus, jqxhr) {
      console.log('Intro external JS file loaded!');
      console.log(data); //data returned
      console.log(textStatus); //success
      console.log(jqxhr.status); //200
    });
    */
  }, false);

}else{
  console.log('audio NOT supported');
}



/******* BEGIN SKIP INTRO *********/
function scrollToContent() {
  console.log('Intro has been skipped or finished.');
  $('html').animate({ scrollTop: $('#intro-wrapper').height() }, "slow");
}

$('#skip-intro').on('click', function(){
  if ( audio.paused == false ) {
    audio.pause();
  }
  scrollToContent(); 
});
/******* END SKIP INTRO **********/