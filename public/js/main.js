		var pageAnimOffset = 100;
		
	 	$(document).ready(function() {	
			PO.init();
			initializeMap();
			if(!PO.oldIE && !PO.iPhone && !PO.android){
				$('.fadeInDrop').css({'opacity':0});
				$('.subSection').css({'opacity':0});
				$('.head').css({'opacity':0});
			}
			/*if(PO.FF || PO.IE){
				$('#servicesList').css({'margin-top':0});	
			}*/
			$('.text_en').hide();
			$('.portfolioDetail').hide();
			
			/*** blue line ***/
			$('body').prepend('<div id="canvas_container"></div>');
			var paper = new Raphael(document.getElementById('canvas_container'), 610, 755); 
			var liner = paper.path("M610 0L610 0");
			liner.animate({  
    			path: "M610 0L0 750"  
			}, 1500, 'linear');
			liner.attr ("stroke", "#3FE0FF");
			
			$('#navDiv').append('<div id="nav_canvas_container"></div>');
			var nav_paper = new Raphael(document.getElementById('nav_canvas_container'), 95, 112); 
			var nav_liner = nav_paper.path("M95 0L5 112");
			nav_liner.attr ("stroke", "#3FE0FF");
			
			addActions();
			fadeInTitle();
			readXML();
			showPortfolioPreview();
			
			/*** window scroll ***/
			$(window).scroll(function(){
				checkElements();
			});
			
		});
	
		function addActions(){			
			/*** nav ***/
			$('nav a').live("click", function(e) {
				e.preventDefault();
				var elementClicked = $(this).attr("href");
				var destination = $(elementClicked).position().top;
				
				if(PO.FF || PO.IE){
					$('html').animate({ scrollTop: destination-80}, 1200, 'easeInOutExpo');
				}else{
					$('body').animate({ scrollTop: destination-80}, 1200, 'easeInOutExpo');
				}
				$('nav a').removeClass('selected');	
				//$('#scrollContainer').scrollTo(elementClicked, 500, 'easeInOutExpo');
			   	return false;
			});
				
			/*** portfolioDiv ***/
			$('.portfolioDiv').click(function(e){
				e.preventDefault();
				showHidePortfolioDiv($(this).attr('data-id'));
			});
			
			$('.portfolioDiv').mouseenter(function(e){
				if($('#' + $(this).attr('data-id')).hasClass('open')){
					$('#tooltip_project').attr('src', 'img/work/tooltip_close_project.png');
				}else{
					$('#tooltip_project').attr('src', 'img/work/tooltip_open_project.png');
				}
				$('#tooltip_project').css({'top':e.pageY-80, 'left':e.pageX-10});	
				$('#tooltip_project').show();
			});
			
			$('.portfolioDiv').mouseleave(function(e){
				$('#tooltip_project').hide();
			});
			
			$('.portfolioDiv').mousemove(function(e){
				$('#tooltip_project').show();
				$('#tooltip_project').css({'top':e.pageY-80, 'left':e.pageX-10});	
			});
		
			/*** case_study_button ***/
			$('.case_study_button').click(function(e){
              	e.preventDefault();
                showHidePortfolioDiv($(this).attr('data-id'));  
				e.stopPropagation();
            });
			
			$('.close_case_study_button').click(function(e){
              	e.preventDefault();
                closePortfolioDiv($(this).attr('data-id'));  
				e.stopPropagation();
            });
			
			/*** logo ***/
			$('.logo').click(function(e){
				e.preventDefault();
				if(PO.FF || PO.IE){
					$('html').animate({ scrollTop: 0}, 1200, 'easeInOutExpo');
				}else{
					$('body').animate({ scrollTop: 0}, 1200, 'easeInOutExpo');
				}
			});
			
			/*** buttons ***/
			$('.button').mouseover(function() {
				$(this).attr('src', $(this).attr('src').split('button').join('button_over'));
			});
			$('.button').mouseout(function() {
				$(this).attr('src', $(this).attr('src').split('button_over').join('button'));
			});
			
			/*** social ***/
			$('.social_link').mouseover(function(e){
				$('#tooltip_' + $(this).attr('data-id')).css({'top':e.pageY-40, 'left':e.pageX+10});	
				$('#tooltip_' + $(this).attr('data-id')).show();							 
			});
			$('.social_link').mouseout(function(){
				$('#tooltip_' + $(this).attr('data-id')).hide();							 
			});
			
			$('.social_link').mousemove(function(e){
				$('#tooltip_' + $(this).attr('data-id')).css({'top':e.pageY-40, 'left':e.pageX+10});						
			});
			
			 
		}
		
		
		
		/************************ CONTENT ************************/
		function readXML(){
			$.ajax({
			  type: "GET",
				 url: 'xml/agency.xml',
				 dataType: "xml",
				 success: function(xml) {
				 	if(PO.android){
				 		alert("success");
				 	}
					var awardXML = $(xml).find('section[id="awards"]');
					writeAwards(awardXML);
					var clientXML = $(xml).find('section[id="clients"]');
					writeClients(clientXML);
					var servicesXML = $(xml).find('section[id="services"]');
					writeServices(servicesXML);
				 },
				 error:function(e){
					//console.log(e); 
					if(PO.android){
				 		alert("error");
				 	}
				}
			}); //close $.ajax
		}
		
		function writeAwards(xml){
			$(xml).find('award').each(function(){
				var a = $('<span class="award"></span>');	
				var awardLink = $('<a href="' + $(this).attr('link') + '" target="_blank"></a>');
				a.append(awardLink);
				
				awardLink.append($('<span class="awardName">' + $(this).attr('name') + '</span>'));
				awardLink.append($('<span>&nbsp;/&nbsp;' + $(this).attr('year') + '&nbsp;/&nbsp;' + $(this).attr('project') + '</span>')); 
				$('#awardsSection').append(a)
				$('#awardsSection').append('<br>');
			});
		}
		
		function writeClients(xml){
			$('#clients').empty();
			$(xml).find('client').each(function(){
				$('#clients').append($('<img src="' + $(this).attr('logo') + '">'));
			});
		}
		
		function writeServices(xml){
			var numServices = $(xml).find('service').length;
			counter=0;
			$(xml).find('service').each(function(){
				if(counter < numServices-1){
					$('#servicesList').append($('<span class="service"> ' + $(this).text() + ' /</span>'));
				}else{
					$('#servicesList').append($('<span class="service"> ' + $(this).text() + ' </span>'));
				}
				counter++;
			});
			
		}
		
		/************************ END CONTENT ************************/
		
		
		/******************* WINDOW SCROLL FUNCTIONS *****************/
		function checkElements(){
			var scrollTop = $(window).scrollTop();
			var wH =  $(window).height();
			if(PO.iDevice){
				wH = window.innerHeight;
			}
			checkMenuHighlight(scrollTop, wH);
			checkStats(scrollTop, wH);
			checkFadeIn(scrollTop, wH);
			checkSubsections(scrollTop, wH);
			checkClients(scrollTop,wH);
			checkServices(scrollTop,wH);			
		}
	
		/*** menu highlight ***/
		function checkMenuHighlight(scrollTop, wH){
			$('section').each(function(){
				if($(this).offset().top <= scrollTop + 80){
					$('nav a').removeClass('selected');	
					$('nav a[href="#' + $(this).attr('id') + '"]').addClass('selected');	
					
				}				 
			});
		}
		
		/*** stats ***/
		function checkStats(scrollTop, wH){
			if($('#statsHolder').offset().top <= parseInt(scrollTop) + wH/2){
				var elemTop = $('#statsHolder').offset().top;
				if(!$('#statsHolder').hasClass('animated') && (parseInt(elemTop) <= parseInt(scrollTop + wH/2))){
					var statCounter=0;
					$('#aboutSection').find('.statsBlock').each(function(){
						$(this).delay(100*statCounter).animate({width:$(this).attr('data-width')}, 800);		
						statCounter++;
					});
					$('#statsHolder').addClass('animated');
				}				
			}	
		}
		
		function checkFadeIn(scrollTop, wH){			
			$('.fadeInDrop').each(function(){
				var elemTop = $(this).offset().top;
				if(PO.oldIE || PO.iPhone || PO.android){
					return;	
				}
				if($(this).css('opacity')== 0 && (parseInt(elemTop) <= parseInt(scrollTop + wH - pageAnimOffset))){
					
					 
					//set height so animations don't knock it out
					
					//$(this).css('height',$(this).height());					 
					$(this).fadeTo(2000, 1);
					
					var counter = 0;
					/*** awards ***/
					$(this).find('.award').each(function(){
						$(this).css({'opacity':0, 'marginTop':-10}).delay(counter*100 + 500).animate({
							marginTop:0,
							opacity:1
					  	}, 600, 'linear');
						counter++;
					});
					/*** end awards ***/
										
				}						 
			});			
		}
		
		
		function checkSubsections(scrollTop, wH){
			var counter = 0;
			$('.subSection').each(function(){
				var elemTop = $(this).offset().top;
				if($(this).css('opacity')== 0 && (parseInt(elemTop) <= parseInt(scrollTop + wH - pageAnimOffset))){
					$(this).css({'marginTop':-20}).delay(counter*200).animate({
						opacity: 1,
						marginTop:0
					}, { queue: true, duration: 500 });	
					
					counter++;
				}
			});
		}
		
		function checkClients(scrollTop, wH){
			if($('#clients').offset().top <= parseInt(scrollTop) + wH/2){
				animateClients();					
			}
		}
		
		function checkServices(scrollTop, wH){
			$('#servicesPaper').each(function(){
				var elemTop = $(this).offset().top;
				if($(this).attr('data-animated')== 'false' && (parseInt(elemTop) <= parseInt(scrollTop + wH - pageAnimOffset))){
					$(this).attr('data-animated', 'true');
					var anim = Raphael.animation({"r": 89}, 500, 'easeOut');
					var servicesPaper = new Raphael(document.getElementById('servicesPaper'), 982, 180); 
					var c1 = servicesPaper.circle(90, 90, 0);
					c1.attr('fill', '#3FE0FF');
					c1.attr('stroke', '#3FE0FF');
					c1.animate(anim.delay(200));
					
					var c2 = servicesPaper.circle(310, 90, 0);
					c2.attr('fill', '#3FE0FF');
					c2.attr('stroke', '#3FE0FF');
					c2.animate(anim.delay(400));
					
					var c3 = servicesPaper.circle(530, 90, 0);
					c3.attr('fill', '#3FE0FF');
					c3.attr('stroke', '#3FE0FF');
					c3.animate(anim.delay(400));
					
					var c4 = servicesPaper.circle(750, 90, 0);
					c4.attr('fill', '#3FE0FF');
					c4.attr('stroke', '#3FE0FF');
					c4.animate(anim.delay(600));
				}
			});
			
			counter=0;
			$('.services').each(function(){
				var elemTop = $(this).offset().top;
				if($(this).css('opacity')== 0 && (parseInt(elemTop) <= parseInt(scrollTop + wH - pageAnimOffset))){
					$(this).delay(counter*200 + 500).fadeTo(1000, 1);
					counter++;
				}
			});			
			
			$('.service').each(function(){
				var elemTop = $(this).offset().top;
				if($(this).css('opacity')== 0 && (parseInt(elemTop) <= parseInt(scrollTop + wH - pageAnimOffset))){
					$(this).delay(Math.floor(Math.random()*20)*200).fadeTo(800, 1);
				}
			});				
		}
		
		/******************* END WINDOW SCROLL FUNCTIONS *****************/
		
		
		/*********************** ANIMATION FUNCTIONS *********************/
		function fadeInTitle(){
			if(PO.oldIE || PO.iPhone || PO.android){
				return;	
			}
			var counter = 0;
			$('.head').each(function(){
				var mTop = $(this).css('marginTop');
				 //set height so animations don't knock it out
				$(this).css({'marginTop':parseInt(mTop)-20});
				$(this).delay(1000+(200*counter)).animate({
					opacity: 1,
					marginTop:mTop
				  }, 1000, 'linear');
				counter++;						 
			});	
		}
	
		
		function animateClients(){
			if(!($('#clients').hasClass('animated'))){
				var counter = 0;
				$('#clients img').each(function(){
					var ticks = counter*250;
					$(this).delay(ticks).fadeIn(2500, 'linear');
					counter++;
				});				
				$('#clients').addClass('animated');
			}
		}
		
		/********************* END ANIMATION FUNCTIONS *******************/
						  
		/****************************** PORTFOLIO ****************************/
		function showPortfolioPreview(){
			$('.portfolioDiv .bgImg').each(function(){
				$(this).attr('data-num', 1)
				loadPortfolioPreview($(this));									   
			});
			
		}
		
		function loadPortfolioPreview(imgDiv){
			var previewPath = 'img/work/preview/';
			var numPreviews = 4;
			var timeoutLength = 8000;
			
			var img = new Image();
			var num = parseInt($(imgDiv).attr('data-num'));
			var src =  previewPath + $(imgDiv).attr('data-id') + '_h_0' + $(imgDiv).attr('data-num') + '.jpg';
				
			if(num==numPreviews){
				$(imgDiv).attr('data-num', 1);
			}else{
				$(imgDiv).attr('data-num',num+=1);
			}
			
	  		$(img).load( function() {
 				$(this).fadeIn(1000, function(){
					$(this).parent().find('img:not(:last)').remove();
				});
				setTimeout(function(){loadPortfolioPreview($(imgDiv))}, timeoutLength);
			})
			.hide()
			.attr('src', src)
			.appendTo($(imgDiv));
			
		}
		
		function showHidePortfolioDiv(divName){
			if($('#' + divName).hasClass('open')){
				closePortfolioDiv(divName);
				$('#tooltip_project').attr('src', 'img/work/tooltip_open_project.png');
				return;
			}
			openPortfolioDiv(divName);	
		}
		 
		function openPortfolioDiv(divName){
			$('#' + divName).slideDown(1500);
			$('#' + divName).addClass('open');
			$('#tooltip_project').attr('src', 'img/work/tooltip_close_project.png');
				
			$('.case_study_button').each(function(){
				if($(this).attr('data-id')==divName){
					$(this).hide();
				}									  
			});
			$('.close_case_study_button').each(function(){
				if($(this).attr('data-id')==divName){
					$(this).show();
				}									  
			});
			$('#' + divName + ' .imgHolder').each(function(){
				if($(this).find('img').hasClass('absImg')){
					return;	
				}
				var src = $(this).find('.wireframe').attr('src').split('w.png').join('.png');
				var img = new Image();
				$(img).load(function(){
 					$(this).fadeIn(1000, function(){
						$(this).parent().find('.wireframe').css({'visibility':'hidden'});					  
					});
					
				})
				.hide()
				.attr('src', src)
				.addClass('absImg')
				.appendTo($(this));
			});	 
		}
		
		function closePortfolioDiv(divName){
			$('#' + divName).slideUp(1000);
			$('#' + divName).removeClass('open');
			$('.case_study_button').each(function(){
				if($(this).attr('data-id')==divName){
					$(this).show();
				}									  
			});
			$('.close_case_study_button').each(function(){
				if($(this).attr('data-id')==divName){
					$(this).hide();
				}									  
			});
		}
		 
		 
		 /**************************** END PORTFOLIO **************************/