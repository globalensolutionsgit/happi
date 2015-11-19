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
	       	    <h1>CRUISE</h1>

	            <div class="entry">
	           	  <p>Sail your ship with the waves of Happi Journey. Enjoy the sea with our Cruise package.</p>
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
						  Date of travel: {$_REQUEST['date']},
						  Number of Days: {$_REQUEST['days']},
						  Contact Number: {$_REQUEST['mobile']},
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
                           		<h3>Cruise Enquiry Form</h3>
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

								<div class="row">
                                    <label><strong>Destination</strong></label>
                                    <input type="text" name="destination" id="destination" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="destination" id="destination_error" style="color:red;">Please enter the destination </label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Number of Days</strong></label>
                                    <input type="text" name="days" id="days" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="days" id="days_error" style="color:red;">Please enter the days.</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Travel Date</strong></label>
                                    <input type="text" name="date" id="date_in" value="" class="inputtext input_full_edit required">
                                     <label class="error" for="date" id="date_error" style="color:red;">Please enter the date </label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Contact Number</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                     <label class="error" for="name" id="mobile_error" style="color:red;">Please enter the mobile number </label>
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
         
          var destination = $('input[name="destination"]').val();
          if (destination == "") {
            $("label#destination_error").show();
            $("input#destination").focus();
            return false;
          }
           var days = $('input[name="days"]').val();
          if (days == "") {
            $("label#days_error").show();
            $("input#days").focus();
            return false;
          }
          var date = $('input[name="date"]').val();
          if (date == "") {
            $("label#date_error").show();
            $("input#date_in").focus();
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
