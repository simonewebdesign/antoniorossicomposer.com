

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
  console.log(audio);
  
  if (Modernizr.audio.ogg) {
    console.log('ogg format is supported!');
    audio.src = ROOT + 'media/audio/01.ogg';
  } else 
  if (Modernizr.audio.mp3) {
    console.log('mp3 format is supported!');
    audio.src = ROOT + 'media/audio/01.mp3';
  } else {
    console.log('ogg and mp3 are not supported.');
  }
  
  audio.preload = 'auto';
  
  var fired = false;
  
  audio.addEventListener("canplaythrough", function(){
    
    if (!fired) {
      console.log('The "canplaythrough" event has been fired!');
      audio.play();
      console.log('Audio is now playing!');
      fired = true;
    }
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

  /*
  audio.removeEventListener("canplaythrough", function(){ 
    console.log('EventListener canplaythrough has been removed.');
  }, false);
  */
  
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