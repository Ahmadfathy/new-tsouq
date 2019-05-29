<script src="<?php echo $js; ?>vendor/jquery-library.js"></script>
<script src="<?php echo $js; ?>vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
<script src="<?php echo $js; ?>bootstrap-select.min.js"></script>
<script src="<?php echo $js; ?>jquery-scrolltofixed.js"></script>
<script src="<?php echo $js; ?>owl.carousel.min.js"></script>
<script src="<?php echo $js; ?>jquery.mmenu.all.js"></script>
<script src="<?php echo $js; ?>packery.pkgd.min.js"></script>
<script src="<?php echo $js; ?>jquery.vide.min.js"></script>
<script src="<?php echo $js; ?>scrollbar.min.js"></script>
<script src="<?php echo $js; ?>prettyPhoto.js"></script>
<script src="<?php echo $js; ?>countdown.js"></script>
<script src="<?php echo $js; ?>parallax.js"></script>
<script src="<?php echo $js; ?>gmap3.js"></script>
<script src="<?php echo $js; ?>main.js"></script>

<script>
	$(document).ready(function() {
	 	// Get current page URL
	 	var url = window.location.href;
	 	// remove # from URL
	 	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	 	// remove parameters from URL
	 	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	 	// select file name
	 	url = url.substr(url.lastIndexOf("/") + 1);
	 	// If file name not avilable
	 	if(url == ''){url = 'index.php';}
	 	// Loop all menu items
	 	$('nav li').each(function(){
	  	// select href
	  	var href = $(this).find('a').attr('href');
	  	// Check filename
	  	if(url == href){
	   		// Add active class
	   		$(this).addClass('item-select');
	   	}
	 	});
	});
</script>