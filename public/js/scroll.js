




$((function() { 

  $(window).scroll(function() { // biography fix when scrolling up
    console.log($('html').offset().top);
    if ( $('html').offset().top == 0 ) {
      $('#navbar').find('.current').removeClass('current');
      $('#navbar ul li a[href^="#bio"]').addClass('current');
    }
  });


  //	var gOffset = 0;


    $('section').waypoint(function(event, direction) {

      var id = $(this).attr('id');
      //console.log('id: '+$(this).attr('id')+', direction: '+direction);	
      $('#navbar').find('.current').removeClass('current');		
      $('#navbar ul li a[href="#'+id+'"]').addClass('current');
      
  //		console.log('id: '+$(this).attr('id')+', direction: '+direction);			
  //		gOffset = direction === 'down' ? 160 : 0;
  //		$.waypoints('refresh');
      
  //		console.log(gOffset);
  //console.log($('html').offset().top);	
      
    }, {
      offset: 160
    });
    


  /*
    $(document).scrollTop(0); // quick reset in case user refreshes the page
    
    var OFFSET = 30;
    var HEADER_HEIGHT = parseInt($('#header').height()) + OFFSET;

    $('a[href^=#]:not([href=#])').click(function(e){
        $('html, body')
        .animate({
                   scrollTop: $($(this).attr("href"))
                   .offset().top - HEADER_HEIGHT }, 1200)
        .animate({
                   scrollTop: $($(this).attr("href"))
                   .offset().top - HEADER_HEIGHT - 20 }, 300)
        .animate({
                   scrollTop: $($(this).attr("href"))
                   .offset().top - HEADER_HEIGHT }, 600);			 
           
         e.preventDefault();
    });
  */

});