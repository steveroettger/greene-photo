<?php $title = "Example Template"; ?>

<?php include 'includes/head.php'; ?>

<div id="interior-header">
	<h1><a href="/" id="logo">Jay Greene<br/> Photography</a></h1>
	<h2>Example Template</h2>
	
	<?php include 'includes/toggle.php'; ?>
</div><!-- END #interior-header -->

<!-- LOAD MODAL  -->
<?php include 'includes/modal.php'; ?>

<div id="interior-content-container">
	<div id="interior-content">
		
		<div class="logo">
			<img src="/images/logo.jpg" alt="" />
		</div><!-- END .logo -->
		
		<h1>Image Purchase and License Agreement</h1>
		
		<h2>For Nobles Pond</h2>
		
		<div id="left-interior">
			<p>By clicking on the link below you will <b>download</b> your file collection and <b>agree</b> to the following <b>license agreement</b>:</p>
			
			<p>Paid usage and creation charges allow Nobles Pond unlimited nonexclusive regional advertising use.</p>
			
			<p>If you agree to these terms please click the link below to download your Jay Greene Photo image collection.</p>
			
			<p>The files are zipped and may require unzipping after download.</p>
			
			<a href="#">Click Here</a>
		</div><!-- END #left-interior -->	
		
		<div id="right-interior">
			<h2>Contact Us</h2>
			<p>
				East Coast Office<br />
				605 N. Market Street St.2<br />
				Wilmington, DE 19801<br />
				<a href="mailto:jg@jaygreenephoto.com">jg@jaygreenephoto.com</a><br/>
				Tel: 302.733.0400
			</p>
			
			<p>
				West Coast Office<br />
				1430 N. Martel Avenue<br />
				Los Angeles, CA 90046<br />
				<a href="mailto:jessica@jaygreenephoto.com">jessica@jaygreenephoto.com</a><br/>
				Tel: 302.740.4906
			</p>
			
			<ul>
				<li>
					<a href="https://www.facebook.com/JayGreenePhoto" target="_blank">
						<img src="/images/fb-icon.png" alt="Jay Greene Photography" />
					</a>
				</li>
				<li>
					<a href="http://www.houzz.com/pro/jaygreenephoto/jay-greene-photography" target="_blank">
						<img src="http://www.houzz.com/res/1833/pic/badge36_36.png?v=1833" alt="Jay Greene Photography" width="36" height="36" border="0" />
					</a>
				</li>
				<li>
					<a href="http://www.linkedin.com/in/jaygreenephoto" target="_blank">
						<img src="/images/linkedin-icon.png" alt="Jay Greene Photography" />
					</a>
				</li>
				<li>
					<a href="http://www.jaygreenephoto.blogspot.com/" target="_blank">
						<img src="/images/blogger-icon.png" alt="Jay Greene Photography" />
					</a>
				</li>
			</ul>
			
		</div><!-- END #right-interior -->	
		
	</div><!-- END #interior-content -->
	
</div><!-- END #interior-content-container -->

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