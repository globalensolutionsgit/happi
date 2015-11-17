
<?php include("header.php"); ?>
<!-- header slider -->
<div class="header_slider" style="background-image:url(images/pattern_4.png); background-color:#222">

        	<div class="slides_container">
            	<div class="slide">
					<img src="images/home/B1.jpg" alt="">
                    <div class="slide_text bottom left">
						<div class="slide_title"><strong>TAHITI</strong></div>
	                    <p class="subtitle">Largest island in French Polynesia...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/B2.jpg" alt="">
					<div class="slide_text bottom right">
	                    <div class="slide_title"><strong>INDONESIA</strong></div>
	                    <p class="subtitle">Thousands of volcanic islands...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/B3.jpg" alt="">
                    <div class="slide_text bottom left">
	                    <div class="slide_title"><strong>DUBAI</strong></div>
	                    <p class="subtitle">Luxury shopping, ultramodern architecture and a lively nightlife scene...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/B4.jpg" alt="">
                    <div class="slide_text left middle">
	                    <div class="slide_title"><strong>MALAYSIA</strong></div>
	                    <p class="subtitle">Its beaches, rainforests and mix of Malay...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/B5.jpg" alt="">
                    <div class="slide_text center top">
	                    <div class="slide_title"><strong>PATTYA</strong></div>
	                    <p class="subtitle">Wild nightlife scene that attracts...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/B6.jpg" alt="">
                    <div class="slide_text right middle">
						<div class="slide_title"><strong>MALAYSIA</strong></div>
	                    <p class="subtitle">Its beaches, rainforests and mix of Malay...</p>
                    </div>
			  	</div>
          	</div>

            <div class="pagination_wrap">
            	<div class="pagination_inner">
				<ul class="pagination">
					<li><a href="#0">TAHITI</a></li>
	                <li><a href="#1">INDONESIA</a></li>
	                <li><a href="#2">DUBAI</a></li>
	                <li><a href="#3">MALAYSIA</a></li>
	                <li><a href="#4">PATTYA</a></li>
	                <li><a href="#5">MALAYSIAN</a></li>
	          	</ul>
                </div>
            </div>

          	<script>
				jQuery(document).ready(function($) {
						$('.header_slider').slides({
							generatePagination: false,
							generateNextPrev: true,
							play: 5000,
							pause: 3500,
							hoverPause: true,
							effect: 'fade',
							crossfade: true,
							preload: true,
							preloadImage: 'images/loading.gif'
						});
				});
			</script>
</div>
<!--/ header slider -->
</div>
</body>
</html>
