var PO = {
	webkit:true,
	FF:false,
	OO:false,
	IE:false,
	iDevice:false,
	iPhone:false,
	iPad:false,
	currentPage:'',
	oldIE:false,
	android:false
}

PO.init = function(){
	PO.getWebkit();
	PO.getiDevice();
	
	$(window).resize(function() {
  		PO.doResize();
	})
}


PO.getWebkit = function(){
	PO.webkit = true;
	PO.FF = /Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent);
	PO.OO = /Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent);
	PO.IE = /MSIE[\/\s](\d+\.\d+)/.test(navigator.userAgent);
	
	//ID 6-8 doesn't support leadingWhitespace so use it to detect IE version
	PO.oldIE = !($.support.leadingWhitespace);
	
	
	if (PO.FF || PO.OO || PO.IE) {
		//test for Firefox and OPERA and IE
		PO.webkit = false;
	}
	
	var ua = navigator.userAgent.toLowerCase();
	PO.android = ua.indexOf("android") > -1; 
		
}

PO.getiDevice = function(){
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		PO.iDevice = true
	}
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) ){
		PO.iPhone = true;	
	}
	if(navigator.userAgent.match(/iPad/i)){
		PO.iPad = true;	
	}
}


PO.doResize = function(){
	
}

PO.getParameterByName = function( name ){
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	if( results == null )
		return "";
	else
		return decodeURIComponent(results[1].replace(/\+/g, " "));
}



//create the main menu
PO.readMenu = function(pSection, pName){
	PO.currentPage = pName;
	document.createElement('nav'); // for IE
	return;
	
	$("#navbar ul").load("menu.php", function(response, status, xhr) {
		if (status == "error") {
			var msg = "Sorry but there was an error: ";
			$("#error").html(msg + xhr.status + " " + xhr.statusText);
		}else{
			var sel = $("nav").find('#menu_'+pSection);
			sel.addClass('selected');
			
			
		}
	});
	
	
	
}