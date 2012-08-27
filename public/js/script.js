/******* BEGIN SKIP INTRO *********/
function scrollToContent() {
  console.log('intro skipped!');
  $('html').animate({ scrollTop: $('#intro-wrapper').height() }, "slow");
}
$('#skip-intro').on('click', function(){
  if ( document.getElementById('intro-audio').paused == false ) {
    document.getElementById('intro-audio').pause();
  }	
  scrollToContent(); 
});
/******* END SKIP INTRO **********/



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

  audio.addEventListener("canplaythrough", function () {
    console.log('The file is loaded and ready to play!');
    audio.play();
    
    /*** BEGIN INTRO EXECUTION ***/

    var text = $('#intro h1').html().split('');

    $('#intro h1').html('');

    //var zindex=1;
    for(i in text) {
      $('#intro h1').append('<span>' + text[i] + '</span>'); // style="z-index:'+zindex+';"
    //	zindex++;
    }

    /* function fadeInSuccessive (intro animation) */
    function fadeInSuccessive(selector, t) {
        var items = $(selector);
        var index = 0;

        function next() {
            if (index < items.length) {
                items.eq(index++).fadeIn(t, next);
            }
        }
        next();
    }

    fadeInSuccessive("#intro span", 2900); // 36 secondi fino al suono metallico / (diviso) 12 lettere

    setTimeout( function() { 
      $("#intro h2").fadeIn(4000); // 4 secondi: durata del suono metallico
    }, 36000); // 36 secondi: inizio del suono metallico

    setTimeout( function() {
      scrollToContent();
    }, 45000); // durata della canzone

    /*** END INTRO EXECUTION ***/
    
  }, false);

}else{
  console.log('audio NOT supported');
  document.write('blah.');
}

//document.getElementById('intro-audio').src = Modernizr.audio.ogg ? ROOT + 'media/audio/01.ogg' :
//                                             Modernizr.audio.mp3 ? ROOT + 'media/audio/01.mp3';














/*** old code ........................ */

/*

isAppLoaded = null;

function loadAudio(uri)
{
    var audio = new Audio();
    //audio.onload = isAppLoaded; // It doesn't work!
    audio.addEventListener('canplaythrough', isAppLoaded, false); // It works!!
    audio.src = uri;
    return audio;
}

if ( loadAudio('media/audio/01.ogg') ) {
	alert('audio loaded!');
} else {
	alert('audio not loaded.');
}
*/



//var isAppLoaded = false;
//document.getElementById('intro-audio').addEventListener('canplaythrough', isAppLoaded, false);
//alert(isAppLoaded);

//var audio = document.getElementById("intro-audio");
//audio.addEventListener('loadeddata', function() { console.log('youcanplaythroughrightnow!!'); }, false);
//audio.addEventListener('loadedmetadata', loadedMetadataFunction, false);