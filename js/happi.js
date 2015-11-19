jQuery(document).ready(function(){
    //This is for home page automatic height based on screen
	var hi8 = $(window).height()-112;
    $('.header_slider').css("height",hi8);

    //jquery for dynamic height for slider image height
    var slide_hi8 = $(window).height()-163;
    $('.header_slider .slides_container, .header_slider .slide').css("height",slide_hi8);
});
