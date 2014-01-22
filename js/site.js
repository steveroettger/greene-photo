$(document).ready(function() {
	
	$( window ).load(function () {
				
		// ON PAGE LOAD FADE IN LOGO & NAV TOGGLE BUTTON
		$("#logo").hide().fadeIn(1000);
		$("#nav-toggle").hide().fadeIn(1000);
				
		// IF MOUSE LEAVES BODY FADE OUT LOGO & NAV TOGGLE BUTTON
//		$("body").mouseleave( function() {
//			$("#logo").fadeOut(2000);
//			$("#nav-toggle").fadeOut(2000);
//		});
				
		// IF MOUSE ENTERS BODY FADE IN LOGO & NAV TOGGLE BUTTON
//		$("body").mouseenter( function() {
//			$("#logo").fadeIn(600);
//			$("#nav-toggle").fadeIn(600);
//		});
	});
	
	var timer;
	var fadeInBuffer = false;
	$(document).mousemove(function () {
		if (!fadeInBuffer) {
	    	if (timer) {
	        	clearTimeout(timer);
	            timer = 0;
	        }
	        $('#logo').fadeIn(600);
	        $("#nav-toggle").fadeIn(600);
	        $("a.flex-prev").fadeIn(600);
	        $("a.flex-next").fadeIn(600);
	        $('html').css({ cursor: '' });
	        } else {
	            fadeInBuffer = false;
	        }
	
	        timer = setTimeout(function () {
	            $('#logo').fadeOut(2000);
	            $("#nav-toggle").fadeOut(2000);
	            $("a.flex-prev").fadeOut(2000);
	            $("a.flex-next").fadeOut(2000);
	            $('html').css({
	                cursor: 'none'
	        });
	            fadeInBuffer = true;
	    }, 5000)
	});
	
	$(document).bind('touchmove',function(e){
	      e.preventDefault();
	      if (!fadeInBuffer) {
	          	if (timer) {
	              	clearTimeout(timer);
	                  timer = 0;
	              }
	              $('#logo').fadeIn(600);
	              $("#nav-toggle").fadeIn(600);
	              $("a.flex-prev").fadeIn(600);
	              $("a.flex-next").fadeIn(600);
	              $('html').css({ cursor: '' });
	              } else {
	                  fadeInBuffer = false;
	              }
	      
	              timer = setTimeout(function () {
	                  $('#logo').fadeOut(2000);
	                  $("#nav-toggle").fadeOut(2000);
	                  $("a.flex-prev").fadeOut(2000);
	                  $("a.flex-next").fadeOut(2000);
	                  $('html').css({
	                      cursor: 'none'
	              });
	                  fadeInBuffer = true;
	              }, 5000)
	});
	    	
});