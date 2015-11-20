<?php include("header.php"); ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.expsigned_in=true"></script>
  <script>
	  function initialize() {
		  var myLatlng = new google.maps.LatLng(13.0764846,80.235458);
		  var mapOptions = {
		  zoom: 15,
		  center: myLatlng
	  };
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	  var contentString = '<div id="content">'+
	  '<div id="siteNotice">'+
	  '</div>'+
	  '<div id="bodyContent">'+
	  '<p><b>Happijourney</b></b></p>'+
	  '<p>No.144,Mount Poonamallee High Road,</p>'+
	  '<p>Ayyapanthangal,Chennai-600056</p>'+
	  '<p>info@happijourney.com</p>'+
	  '<p>+91-9962511220</p>'+
	  '</div>'+
	  '</div>';
	  var infowindow = new google.maps.InfoWindow({
		  content: contentString
	  });
	  var marker = new google.maps.Marker({
		  position: myLatlng,
		  map: map,
		  title: 'happijourney'
	  });
	  google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map,marker);
	  });
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
<div id="middle" class="cols2">
	<div class="container_12">

		<!-- breadcrumbs -->
        <div class="breadcrumbs">
        	<p><a href="index.html">Homepage</a> <span class="separator">&gt;</span> <span>Contact us</span></p>
        </div>
        <!--/ breadcrumbs -->

        <!-- content -->
        <div class="content">

            <!-- post details -->
        	<div class="post-detail">
	       	    <h1>Write us a message:</h1>

	            <div class="entry">
	           	  <p>We encourage you to share your ideas and improvements with us.Please see the contact information for our most requested . If you still don’t see what you’re looking for, please contact our support:</p>
	            </div>


	        </div>
	        <!--/ post details -->
			<?php
			//if "email" variable is filled out, send email
			  if (isset($_POST['submit']))  {

			  //Email information
			  $admin_email = "info@happijourney.com";
			  $email = $_REQUEST['email'];
			  $comment = "You have received a message!,
			  			 Name: {$_REQUEST['yourname']},
						 Email: {$_REQUEST['email']},
						 Website: {$_REQUEST['url']},
						 Message: {$_REQUEST['message']},
			  ";

			  //send email
			  mail($admin_email, "Contact Us Form", $comment, "From:" . $email);

			  //Email response
			  echo "Thank you for contacting us!";
			  }

			  //if "email" variable is not filled out, display the form
			  else  {
			?>
          	<!-- contact form -->
                        <div class="add-comment contact-form">

                            <div class="add-comment-title">
                           		<h3>Leave a COMMENT</h3>
                            </div>

                            <div class="comment-form">
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

                                <div class="row alignleft">
                                    <label><strong>Name</strong></label>
                                    <input type="text" name="yourname" id="name" value="" class="inputtext input_middle required">
                                    <label class="error" for="name" id="name_error" style="color:red;">Please enter the name.</label>
                                </div>

                                <div class="space"></div>

                                <div class="row  alignleft">
                                    <label><strong>Email</strong> (never published)</label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle required">
                                    <label class="error" for="name" id="email_error" style="color:red;">Please enter the email</label>
                                </div>

                                <div class="clear"></div>

                                <div class="row">
                                    <label><strong>Website</strong></label>
                                    <input type="text" name="url" id="url" value="" class="inputtext input_full">
                                    <label class="error" for="url" id="url_error" style="color:red;">Please enter the url</label>
                                </div>

                                 <div class="row">
                                    <label><strong>Comment</strong></label>
                                    <textarea cols="30" rows="10" name="message" id="message" class="textarea textarea_middle required"></textarea>
                                    <label class="error" for="message" id="message_error" style="color:red;">Please enter the source</label>
                                </div>

                                <div class="row rowSubmit">
	                                <input type="submit" value="Send Message" class="btn-submit" name="submit">
	                                <a onclick="document.getElementById('commentForm').reset();return false" href="#" class="link-reset">Reset all fields</a>
                             	</div>
                            </form>
                            </div>
                        </div>
                <!--/ contact form -->
				<?php
  }
?>
        </div>
        <!--/ content -->

        <!-- sidebar -->
        <div class="sidebar">

            <!-- widget_contact -->
	        <div class="widget-container widget_contact">
	            <div class="inner">

	                <div class="contact-address">
	                	<div class="name"><strong>Happi Journey</strong></div>
						<div class="address">No.144,Mount Poonamallee High Road,</div>
						<div class="address">Ayyapanthangal,Chennai-600056</div>
						<div class="phone"><em>Phone:</em> <span>+91-9962511220</span></div>
		                <div class="mail"><em>Email:</em> <a href="mailto:info@happijourney.com">info@happyjourney.com</a></div>
					</div>

					<!-- <div class="contact-social">
		            	<div><strong>Call us:</strong> <br> <a href="#" class="btn btn_skype">Skype</a></div>
		                <div><strong>Follow us:</strong> <br> <a href="#" class="btn btn_twitter">Twitter</a></div>
		                <div><strong>Join us:</strong> <br> <a href="#" class="btn btn_fb">Facebook</a></div>
		           	<div class="clear"></div>
		            </div> -->

				</div>
			</div>
	        <!--/ widget_contact -->

            <div class="contact-map">
				<div id="map-canvas"></div>
            </div>

        </div>
        <!--/ sidebar -->

        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">
   $('.error').hide();
 $("#send").click(function(event){
         $('.error').hide();
          var name = $('input[name="yourname"]').val();
          if (name == "") {
            $("label#name_error").show();
            $("input#name").focus();
            return false;
          }
           var email = $('input[name="email"]').val();
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
           if( !emailReg.test( email ) ) {

            $("label#email_error").show();
            $("input#email").focus();
            return false;
          }
          var url = $('input[name="url"]').val();
          if (url == "") {
            $("label#url_error").show();
            $("input#url").focus();
            return false;
          }
          var message = $('#message').val();
          if (message == "") {
            $("label#message_error").show();
            $("input#message").focus();
            return false;
          }
          });
</script>
<!--/ middle -->
<?php include("footer.php"); ?>
