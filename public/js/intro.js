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


/*** BEGIN INTRO EXECUTION ***/
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
  scrollToContent();
}, 45000); // durata della canzone

/*** END INTRO EXECUTION ***/