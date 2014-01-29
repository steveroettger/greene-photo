$(document).ready(function() {
	
	// HOMEPAGE FEATURE SLIDER
		$(window).load(function() {
			$('#interior-slider').flexslider({
		    	animation: "fade",
		        controlNav: false,
		        directionNav: true,
		        prevText: "<span class='arrow-prev'><</span>",
		        nextText: "<span class='arrow-next'>></span>",
		        animationLoop: true,
		        slideshow: true,
		        pauseOnAction: false,
		        pauseOnHover: false,
		        touch:true,
		        multipleKeyboard:true,
		        slideshowSpeed: 4500,
		        animationSpeed: 800
		    });
		});
		    
		var startWindowScroll;
		$('#nav-toggle').magnificPopup({
			fixedContentPos:true,
			removalDelay: 500, //delay removal by X to allow out-animation
			callbacks: {
				beforeOpen: function() {
			       this.st.mainClass = this.st.el.attr('data-effect');
			       startWindowScroll = $(window).scrollTop();
			    },
			    close: function () {
			    	$(window).scrollTop(startWindowScroll);
			    }
			},
		    midClick: true
		});
		
		var timer;
		var fadeInBuffer = false;
		$(document).mousemove(function () {
			if (!fadeInBuffer) {
		    	if (timer) {
		        	clearTimeout(timer);
		            timer = 0;
		        }
		        $("a.flex-prev").fadeIn(600);
		        $("a.flex-next").fadeIn(600);
		        $('html').css({ cursor: '' });
		        } else {
		            fadeInBuffer = false;
		        }
		
		        timer = setTimeout(function () {
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
		              $("a.flex-prev").fadeIn(600);
		              $("a.flex-next").fadeIn(600);
		              $('html').css({ cursor: '' });
		              } else {
		                  fadeInBuffer = false;
		              }
		      
		              timer = setTimeout(function () {
		                  $("a.flex-prev").fadeOut(2000);
		                  $("a.flex-next").fadeOut(2000);
		                  $('html').css({
		                      cursor: 'none'
		              });
		                  fadeInBuffer = true;
		              }, 5000)
		});
		
			
	//	 HOMEPAGE FEATURE SLIDER
	//    $(window).load(function() {
	//    	$('#feature-slider').flexslider({
	//        	animation: "fade",
	//            controlNav: false,
	//            directionNav: true,
	//            prevText: "<span class='arrow-prev'><</span>",
	//            nextText: "<span class='arrow-next'>></span>",
	//            animationLoop: true,
	//            slideshow: true,
	//            pauseOnAction: false,
	//            pauseOnHover: false,
	//            touch:true,
	//            multipleKeyboard:true,
	//            slideshowSpeed: 4500,
	//            animationSpeed: 800
	//        });
	//    });
	//    
	//    var startWindowScroll;
	//    $('#nav-toggle').magnificPopup({
	//    	type: 'inline',
	//		fixedContentPos: false,
	//    	fixedBgPos: true,
	//    	overflowY: 'scroll',
	//    	removalDelay: 500, delay removal by X to allow out-animation
	//    	callbacks: {
	//    		beforeOpen: function() {
	//    	       this.st.mainClass = this.st.el.attr('data-effect');
	//    	       startWindowScroll = $(window).scrollTop();
	//    	    },
	//    	    close: function () {
	//    	    	$(window).scrollTop(startWindowScroll);
	//    	    }
	//    	},
	//        midClick: true
	//    });
	</script>
		    	
});