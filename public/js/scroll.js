function setCurrentSectionMenu(section) {
  var id = section.attr('id');
  //console.log('id: '+$(this).attr('id')+', direction: '+direction);	
  $('#navbar').find('.current').removeClass('current');		
  $('#navbar ul li a[href="#'+id+'"]').addClass('current');
}


$(function() { 

/*
  $(window).scroll(function() { 
    // biography fix when scrolling up
    //debug: console.log($('html').offset().top);
    if ( $('html').offset().top == 0 ) {
      $('#navbar').find('.current').removeClass('current');
      $('#navbar ul li a[href^="#bio"]').addClass('current');
    }
  });
*/

  //	var gOffset = 0;


    $('section').waypoint(function(event, direction) {
      setCurrentSectionMenu( $(this) );
    }, {
      offset: 0
    });

    
//    var OFFSET = 30;
//    var HEADER_HEIGHT = parseInt($('#header').height()) + OFFSET;


    var OFFSET = 10;

    $('a[href^=#]:not([href=#])').click(function(e){
      
      var href = $(this).attr("href");
      var yPos = $(href).offset().top;
    
      $('html, body')
      .animate({ scrollTop: yPos + OFFSET }, 1000);
       e.preventDefault();
      
      setCurrentSectionMenu( $(href) );
      
    });

  
  /*** STICKY HEADER BEGIN ***/
	$('#header').waypoint( function(e, direction) {
		$(this).toggleClass('sticky', direction === "down");
    $('#biography, #scores').toggleClass('marginTop', direction === "down");
		e.stopPropagation();
	});
  /*** STICKY HEADER END ***/

  $('.top').addClass('topHidden');
	$.waypoints.settings.scrollThrottle = 30;
	$('#wrapper').waypoint(function(event, direction) {
		$('.top').toggleClass('topHidden', direction === "up");
	}, {
		offset: '-100%'
	});
  
  $('.top').on('click', function(){
    scrollToContent();
  });
  
});