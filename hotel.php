<?php include("header.php"); ?>

<div id="middle" class="cols2">
	<div class="container_12">

		<!-- breadcrumbs -->
        <div class="breadcrumbs">
        	<p><a href="index.html">Homepage</a> <span class="separator">&gt;</span> <span>Services</span></p>
        </div>
        <!--/ breadcrumbs -->

        <!-- content -->
        <div class="container_12">

            <!-- post details -->
        	<div class="post-detail">
	       	    <h1>HOTEL</h1>

	            <div class="entry">
	           	  <p>We help you to stay out from your usual place based on the category you like.</p>
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
						  Check in: {$_REQUEST['checkin']},
						  Check out: {$_REQUEST['checkout']},
						  City: {$_REQUEST['city']},
						  Adult: {$_REQUEST['adult']},
						  Child : {$_REQUEST['child']},
						  Mobile No : {$_REQUEST['mobile']},
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
                           		<h3>Enquiry Form</h3>
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
                                    <label class="error" for="email" id="email_error" style="color:red;">Please enter the email</label>
                                </div>

                                <div class="clear"></div>

								<div class="row alignleft">
									<label><strong>Checkin</strong></label>
									<input type="text" name="checkin" id="date_in" value="" class="inputtext_edit input_middle required">
									<label class="error" for="checkin" id="checkin_error" style="color:red;">Please enter the email</label>
								</div>

								<div class="space"></div>

								<div class="row  alignleft">
									<label><strong>Checkout</strong></label>
									<input type="text" id="date_out" name="checkout" value="" class="inputtext_edit input_middle required">
									<label class="error" for="checkout" id="checkout_error" style="color:red;">Please enter the email</label>
								</div>

								<div class="clear"></div>

                                <div class="row">
                                    <label><strong>City</strong></label>
                                    <input type="text" name="city" id="city" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="city" id="city_error" style="color:red;">Please enter the email</label>
                                </div>

								<div class="clear"></div>

								<div class="row alignleft">
									<label><strong>Adult</strong></label>
									<input type="text" name="adult" id="adult" value="" class="inputtext_edit input_middle required">
									<label class="error" for="adult" id="adult_error" style="color:red;">Please enter the email</label>
								</div>

								<div class="space"></div>

								<div class="row  alignleft">
									<label><strong>Child</strong>(Below 12 years)</label>
									<input type="text" id="child" name="child" value="" class="inputtext_edit input_middle required">
									<label class="error" for="child" id="child_error" style="color:red;">Please enter the email</label>
								</div>

								<div class="clear"></div>


								<div class="row">
                                    <label><strong>Mobile NO.</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="mobile" id="mobile_error" style="color:red;">Please enter the mobile number </label>
                                </div>

                                <div class="row rowSubmit">
	                                <input type="submit" id="send" value="Send Enquiry" class="btn-submit">
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


        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
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
         
          var checkin = $('input[name="checkin"]').val();
          if (checkin == "") {
            $("label#checkin_error").show();
            $("input#date_in").focus();
            return false;
          }
          var checkout = $('input[name="checkout"]').val();
          if (checkout == "") {
            $("label#checkout_error").show();
            $("input#date_out").focus();
            return false;
          }
          var city = $('input[name="city"]').val();
          if (city == "") {
            $("label#city_error").show();
            $("input#city").focus();
            return false;
          }
          var adult = $('input[name="adult"]').val();
          if (adult == "") {
            $("label#adult_error").show();
            $("input#adult").focus();
            return false;
          }
          var child = $('input[name="child"]').val();
          if (child == "") {
            $("label#child_error").show();
            $("input#child").focus();
            return false;
          }
          var mobile = $('input[name="mobile"]').val();
          var mobile_val= (mobile).length;
          
          if (mobile_val != 10 ){
              $("label#mobile_error").show();
              $("input#mobile").focus();
              return false;
          }
          });
          });
</script>
<!--/ middle -->
<?php include("footer.php"); ?>
