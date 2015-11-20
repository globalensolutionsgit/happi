
<?php include("header.php"); ?>
<!-- header slider -->
<div class="header_slider" style="background-image:url(images/pattern_4.png); background-color:#222">

        	<div class="slides_container">
            	<div class="slide">
					<img src="images/home/001.jpg" alt="">
                    <div class="slide_text bottom left">
						<div class="slide_title"><strong>INDONESIA</strong></div>
	                    <p class="subtitle">Thousands of volcanic islands...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/002.jpg" alt="">
					<div class="slide_text bottom right">
	                    <div class="slide_title"><strong>DUBAI</strong></div>
	                    <p class="subtitle">Luxury shopping, ultramodern architecture and a lively nightlife scene...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/003.jpg" alt="">
                    <div class="slide_text bottom left">
	                    <div class="slide_title"><strong>THAILAND</strong></div>
	                    <p class="subtitle">Tropical beaches, opulent royal palaces, ancient ruins...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/004.jpg" alt="">
                    <div class="slide_text left middle">
	                    <div class="slide_title"><strong>SINGAPORE</strong></div>
	                    <p class="subtitle">Tropical climate and multicultural population.</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/005.jpg" alt="">
                    <div class="slide_text center top">
	                    <div class="slide_title"><strong>SRILANKA</strong></div>
	                    <p class="subtitle">Is a rugged land of rainforest...</p>
                    </div>
			  	</div>
                <div class="slide">
					<img src="images/home/006.jpg" alt="">
                    <div class="slide_text right middle">
						<div class="slide_title"><strong>MALAYSIA</strong></div>
	                    <p class="subtitle">Its beaches, rainforests and mix of Malay...</p>
                    </div>
			  	</div>
          	</div>

            <div class="pagination_wrap">
            	<div class="pagination_inner">
				<ul class="pagination">
					<li><a href="#0">INDONESIA</a></li>
	                <li><a href="#1">DUBAI</a></li>
	                <li><a href="#2">THAILAND</a></li>
	                <li><a href="#3">SINGAPORE</a></li>
                    <li><a href="#4">SRILANKA</a></li>
	                <li><a href="#5">MALAYSIA</a></li>
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
