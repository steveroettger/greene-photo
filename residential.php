<?php $title = "Residential Portfolio"; ?>

<?php include 'includes/head.php'; ?>
<link rel="stylesheet" type="text/css" href="/css/interior-flexslider.css">

<div id="interior-header">
	<h1><a href="/" id="logo">Jay Greene<br/> Photography</a></h1>
	<h2>Residential Portfolio</h2>
	
	<?php include 'includes/toggle.php'; ?>
</div><!-- END #interior-header -->

<!-- LOAD MODAL  -->
<?php include 'includes/modal.php'; ?>

<!-- BEGIN INTERIOR SLIDER  -->
<div id="interior-slider" class="flexslider">
	<ul class="slides">
		<li style="background: url('/images/residential/JGPhotoResidential-1.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-2.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-3.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-4.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-5.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-6.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-7.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-8.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-9.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
		<li style="background: url('/images/residential/JGPhotoResidential-10.jpg') no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;">
		</li>
	</ul>	

	<div id="footer">
		<p>&copy; <?php echo date("Y") ?> Jay Greene Photography.</p>
	</div><!-- END #footer -->
	
</div><!-- END #interior-slider -->

<script type="text/javascript">
		
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
    
</script>

<?php include 'includes/footer.php'; ?>
