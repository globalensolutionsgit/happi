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
	       	    <h1>EVENT MANAGEMENT</h1>

	            <div class="entry">
	           	  <p>We take care of your events to make you to relax with your friends and family. The Company’s services include Road shows, Exhibition, Seminars & Conferences, Sound & Lights, Wedding Management, Family Celebrations and more.</p>
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
						  No of Guest: {$_REQUEST['guest']},
						  vanue: {$_REQUEST['vanue']},
						  Event Date: {$_REQUEST['date']},
						  Contact Number: {$_REQUEST['mobile']},
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
                                    <label><strong>Name</strong></label>
                                    <input type="text" name="yourname" id="name" value="" class="inputtext input_middle required">
                                </div>

                                <div class="space"></div>

                                <div class="row  alignleft">
                                    <label><strong>Email</strong> (never published)</label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle required">
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>No.of Guest</strong></label>
                                    <input type="text" name="guest" id="guest" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Vanue</strong></label>
                                    <input type="text" name="vanue" id="vanue" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Date</strong></label>
                                    <input type="text" name="date" id="date" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Contact Number</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                </div>

								<div class="clear"></div>

								<div class="row">
									<label><strong>Contact Person</strong></label>
									<input type="text" name="person" id="person" value="" class="inputtext input_full_edit required">
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
<!--/ middle -->
<?php include("footer.php"); ?>
