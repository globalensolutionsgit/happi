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
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" id="hotel_form">

								<div class="row alignleft">
                                    <label><strong>Name</strong></label>
                                    <input type="text" name="yourname" id="name" value="" class="inputtext input_middle required">
                                    <!-- <label class="error" for="name" id="name_error" style="color:red;">Please enter the name.</label> -->

                                </div>

                                <div class="space"></div>

                                <div class="row  alignleft">
                                    <label><strong>Email</strong></label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle required">
                                    <!-- <label class="error" for="email" id="email_error" style="color:red;">Please enter the email</label> -->
                                </div>

                                <div class="clear"></div>

								<div class="row alignleft">
									<label><strong>Checkin</strong></label>
									<input type="text" name="checkin" id="date_in" value="" class="inputtext_edit input_middle required">
									<!-- <label class="error" for="checkin" id="checkin_error" style="color:red;">Please enter the email</label> -->
								</div>

								<div class="space"></div>

								<div class="row  alignleft">
									<label><strong>Checkout</strong></label>
									<input type="text" id="date_out" name="checkout" value="" class="inputtext_edit input_middle required">
									<!-- <label class="error" for="checkout" id="checkout_error" style="color:red;">Please enter the email</label> -->
								</div>

								<div class="clear"></div>

                                <div class="row">
                                    <label><strong>City</strong></label>
                                    <input type="text" name="city" id="city" value="" class="inputtext input_full_edit required">
                                    <!-- <label class="error" for="city" id="city_error" style="color:red;">Please enter the email</label> -->
                                </div>

								<div class="clear"></div>

								<div class="row alignleft">
									<label><strong>Adult</strong></label>
									<input type="text" name="adult" id="adult" value="" class="inputtext_edit input_middle required">
									<!-- <label class="error" for="adult" id="adult_error" style="color:red;">Please enter the email</label> -->
								</div>

								<div class="space"></div>

								<div class="row  alignleft">
									<label><strong>Child</strong>(Below 12 years)</label>
									<input type="text" id="child" name="child" value="" class="inputtext_edit input_middle required">
									<!-- <label class="error" for="child" id="child_error" style="color:red;">Please enter the email</label> -->
								</div>

								<div class="clear"></div>


								<div class="row">
                                    <label><strong>Mobile NO.</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                    <!-- <label class="error" for="mobile" id="mobile_error" style="color:red;">Please enter the mobile number </label> -->
                                </div>

                                <div class="row rowSubmit">
	                                <input type="submit" id="send" value="Send Enquiry" class="btn-submit">
	                                <a onclick="document.getElementById('hotel_form').reset();return false" href="#" class="link-reset">Reset all fields</a>
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

<!--/ middle -->
<?php include("footer.php"); ?>
