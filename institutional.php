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
	       	    <h1>INSTITUTIONAL PACKAGE</h1>

	            <div class="entry">
	           	  <p>We offer a short trip for pleasure to a beautiful place for institutions including both schools and colleges with Industrial Visit related to their subjects which gives a temporary relief from their routine work or studies.</p>
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
						  College Name/School Name: {$_REQUEST['yourname']},
						  Email: {$_REQUEST['email']},
						  Destination: {$_REQUEST['destination']},
						  No of days: {$_REQUEST['days']},
						  IV details: {$_REQUEST['message']},
						  Mobile No : {$_REQUEST['mobile']},
						  Contact Person : {$_REQUEST['person']},
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
                                    <label><strong>College Name/School Name</strong></label>
                                    <input type="text" name="yourname" id="name" value="" class="inputtext input_middle required">
                                </div>

                                <div class="space"></div>

                                <div class="row  alignleft">
                                    <label><strong>Email</strong> (never published)</label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle required">
                                </div>

                                <div class="clear"></div>

								<div class="row">
                                    <label><strong>Destination</strong></label>
                                    <input type="text" name="destination" id="destination" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Number of Days</strong></label>
                                    <input type="text" name="days" id="days" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>

								<div class="row">
								   <label><strong>IV details(Department)</strong></label>
								   <textarea cols="30" rows="10" name="message" class="textarea_edit textarea_middle required"></textarea>
							   </div>

							   	<div class="clear"></div>

								<div class="row">
                                    <label><strong>Mobile NO.</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="row">
                                    <label><strong>Contact Person</strong></label>
                                    <input type="text" name="person" id="person" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>
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
<!--/ middle -->
<?php include("footer.php"); ?>
