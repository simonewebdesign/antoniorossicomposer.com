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

/*** intro execution ***/

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
}, 35000); // 36 secondi: inizio del suono metallico

setTimeout( function() {
	$('#intro-wrapper').fadeOut('slow'); // tempo che ci mette il wrapper a scomparire
	$('body').css('overflow', 'visible');
}, 45000); // durata della canzone

/*** end intro execution ***/



$(document).ready(function(){


/*	$('#bg').scroll(function(){
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

//    .attr('rel', 'gallery')
	
});