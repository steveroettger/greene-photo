<?php $title = "Welcome"; ?>

<?php include 'includes/head.php'; ?>
<script type="text/javascript" src="/js/site.js"></script>
<link rel="stylesheet" type="text/css" href="/css/feature-flexslider.css">

<?php include 'includes/header.php'; ?>

<div id="feature-slider" class="flexslider">
	<ul class="slides">
		<li style="background: url('/images/commercial/JGPhotoCommercial-1.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/commercial/JGPhotoCommercial-2.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/commercial/JGPhotoCommercial-3.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/commercial/JGPhotoCommercial-4.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/commercial/JGPhotoCommercial-5.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/commercial/JGPhotoCommercial-6.jpg') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
	</ul>
	
	<div id="footer">
		<p>&copy; <?php echo date("Y") ?> Jay Greene Photography.</p>
	</div><!-- END #footer -->
	
</div><!-- END #feature-slider -->

<script type="text/javascript">
		
	// HOMEPAGE FEATURE SLIDER
    $(window).load(function() {
    	$('#feature-slider').flexslider({
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
    	type: 'inline',
		fixedContentPos: false,
    	fixedBgPos: true,
    	overflowY: 'scroll',
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
</script>

<?php include 'includes/footer.php'; ?>
