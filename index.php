<?php $title = "Welcome"; ?>

<?php include 'includes/header.php'; ?>

<a href="/" id="logo"></a>

<div style="width: 100%;text-align: center;">
	<a href="#" id="nav-toggle"><span class="toggle-icon">+</span></a>
</div>

<div id="feature-slider" class="flexslider">
	<ul class="slides">
		<li><img src=" /images/commercial/JGPhotoCommercial-1.jpg" alt="" /></li>
		<li><img src="/images/commercial/JGPhotoCommercial-2.jpg" alt="" /></li>
		<li><img src="/images/commercial/JGPhotoCommercial-3.jpg" alt="" /></li>
		<li><img src="/images/commercial/JGPhotoCommercial-4.jpg" alt="" /></li>
		<li><img src="/images/commercial/JGPhotoCommercial-5.jpg" alt="" /></li>
		<li><img src="/images/commercial/JGPhotoCommercial-6.jpg" alt="" /></li>
	</ul>
</div><!-- END #feature-slider -->

<script type="text/javascript">
        // HOMEPAGE FEATURE SLIDER
        $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "fade",
              animationLoop: true,
              slideshowSpeed: 5500,
              animationSpeed: 800,
              touch: true, 
              controlNav: false,
              directionNav: false
              
          });
        });
</script>

<?php include 'includes/footer.php'; ?>
