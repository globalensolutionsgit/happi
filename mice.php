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
	       	    <h1>MICE</h1>

	            <div class="entry">
	           	  <p>We focus on the tour for Meetings, Incentives, Conferencing and Exhibitions for professional, academic or trade organization or other special interest group.</p>
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
						  Destination: {$_REQUEST['destination']},
						  No of days: {$_REQUEST['days']},
						  Purpose for travel: {$_REQUEST['purpose']},
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
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" id="mice">

								<div class="row alignleft">
                                    <label><strong>Corporate Name/Company Name</strong></label>
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

								<div class="row">
                                    <label><strong>Destination</strong></label>
                                    <input type="text" name="destination" id="destination" value="" class="inputtext input_full_edit required">
                                     <!-- <label class="error" for="destination" id="destination_error" style="color:red;">Please enter the destination </label> -->
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Number of Days</strong></label>
                                    <input type="text" name="days" id="days" value="" class="inputtext input_full_edit required">
                                     <!-- <label class="error" for="days" id="days_error" style="color:red;">Please enter the days </label> -->
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Purpose for Travel</strong></label>
                                    <input type="text" name="purpose" id="purpose" value="" class="inputtext input_full_edit required">
                                    <!-- <label class="error" for="purpose" id="purpose_error" style="color:red;">Please enter the purpose </label> -->
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Contact Number</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                    <!-- <label class="error" for="mobile" id="mobile_error" style="color:red;">Please enter the mobile number </label> -->
                                </div>

								<div class="clear"></div>

								<div class="row">
									<label><strong>Contact Person</strong></label>
									<input type="text" name="person" id="person" value="" class="inputtext input_full_edit required">
									<!-- <label class="error" for="person" id="person_error" style="color:red;">Please enter the person </label> -->
								</div>

                                <div class="row rowSubmit">
	                                <input type="submit" id="send" value="Send Enquiry" class="btn-submit">
	                                <a onclick="document.getElementById('mice').reset();return false" href="#" class="link-reset">Reset all fields</a>
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
