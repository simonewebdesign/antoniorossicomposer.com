
//function startIntro() {


	/*** begin intro execution ***/

	var text = $('#intro h1').html().split('');

	$('#intro h1').html('');

	//var zindex=1;
	for(i in text) {
		$('#intro h1').append('<span>' + text[i] + '</span>'); // style="z-index:'+zindex+';"
	//	zindex++;
	}

	fadeInSuccessive("#intro span", 2900); // 36 secondi fino al suono metallico / (diviso) 12 lettere

	setTimeout( function() { 
		$("#intro h2").fadeIn(4000); // 4 secondi: durata del suono metallico
	}, 36000); // 36 secondi: inizio del suono metallico

	setTimeout( function() {
		$('#intro-wrapper').fadeOut('slow'); // tempo che ci mette il wrapper a scomparire
		$('body').css('overflow', 'visible');
	}, 45000); // durata della canzone

  /* end intro execution */
  
  
  
  
  /*
	$('#intro ul').css({
		'height':'100px',
		'margin-top':'50px',
	});
	$
	$('#intro ul li').css({
		'display': 'none',
		'float': 'left',
		'list-style': 'none',
		'padding-right':'50px',
		'font-size':'1.2em'
	});
	$('#intro ul li a').css('color','white');
	
	$('#intro h2').css({
		'height':'100px',
		'margin-top':'50px'
	});
	*/
  
  
//	setTimeout( function() {
//		$('#intro ul li:nth-child(1)').fadeIn(1000);
//	}, 3000);


	
	setTimeout( function() {
		$('#intro ul li:nth-child(2)').fadeIn(3000);
	}, 3000);

	setTimeout( function() {
		$('#intro ul li:nth-child(3)').fadeIn(3000);
	}, 8000);
	
	setTimeout( function() {
		$('#intro ul li:nth-child(4)').fadeIn(3000);
	}, 13000);

	setTimeout( function() {
		$('#intro ul li:nth-child(5)').fadeIn(3000);
	}, 18000);	

	setTimeout( function() {
		$('#intro ul li:nth-child(6)').fadeIn(3000);
	}, 23000);	

	setTimeout( function() {
		$('#intro ul li:nth-child(7)').fadeIn(3000);
	}, 28000);
	
	
	
	/*** end intro execution ***/
//}


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







$(function(){


/* floating background

	$('#bg').scroll(function(){
		var x = $('#bg').scrollTop();
		$('#bg').css('background-position','0% '+parseInt(-x/5)+'px');
	});
*/
	
	$('#skip-intro').on('click', function() {
		
		if ( document.getElementById('intro-audio').paused == false ) {
			document.getElementById('intro-audio').pause();
//			alert('music paused');
//		} else {
//			$('#intro-audio').play();
//			alert('music playing');
		}	
	
		$('#intro-wrapper').fadeOut('slow'); // tempo che ci mette il wrapper a scomparire	
		$('body').css('overflow', 'visible');
		
	});

/*	
	$('#navbar a').on('click', function() {
		
		$('#navbar').find('.current').removeClass('current');
		$(this).addClass('current');
	});
*/


/******************************************
*************** CONTACT FORM **************
******************************************/

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