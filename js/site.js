$(document).ready(function() {
	
	// ON PAGE LOAD FADE IN AND FADE OUT LOGO & NAV TOGGLE BUTTON	
	$( window ).load(function () {

		// FADE IN LOGO, DELAY, AND THEN FADE OUT
		$("#logo").hide().fadeIn(2000).delay(100).fadeOut(2000);
		
		// FADE IN TOGGLE BUTTON, DELAY, AND THEN FADE OUT	
		$("#nav-toggle").hide().fadeIn(2000).delay(100).fadeOut(2000);
	});
	
	// FADE TOGGLE LOGO ON HOVER FEATURE SLIDER
	$("body").delay(5000).hover(function () {		
		$("#logo").fadeToggle(1000);
	});
	 
	// FADE TOGGLE NAV TOGGLE BUTTON ON HOVER FEATURE SLIDER
	$("body").hover(function () {		
		$("#nav-toggle").fadeToggle(1000);
	});
	
});