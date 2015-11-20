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
			   echo "Thank you for contacting us! Our representative will contact you.";
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
                                    <label class="error" for="name" id="name_error" style="color:red;">Please enter the name.</label>

                                </div>

                                <div class="space"></div>

                                <div class="row  alignleft">
                                    <label><strong>Email</strong> </label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle required">
                                    <label class="error" for="email" id="email_error" style="color:red;">Please enter the email</label>
                                    <label class="error1" for="email" id="email_error1" style="color:red;">Please enter the valid email</label>
                                </div>
                                <div class="clear"></div>

								<div class="row">
                                    <label><strong>Destination</strong></label>
                                    <input type="text" name="destination" id="destination" value="" class="inputtext input_full_edit required">
                                     <label class="error" for="destination" id="destination_error" style="color:red;">Please enter the destination </label>
                                     <label class="error1" for="destination" id="destination_error1" style="color:red;">Please enter the valid destination</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Number of Days</strong></label>
                                    <input type="number" name="days" id="days" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="days" id="days_error" style="color:red;">Please enter the days </label>
                                </div>

								<div class="clear"></div>

								<div class="row">
								   <label><strong>IV details(Department)</strong></label>
								   <textarea cols="30" rows="10" name="message" id="message" class="textarea_edit textarea_middle required"></textarea>
								   <label class="error" for="message" id="message_error" style="color:red;">Please enter the message</label>
							   </div>

							   	<div class="clear"></div>

								<div class="row">
                                    <label><strong>Mobile NO.</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                    <label class="error1" for="mobile" id="mobile_error1" style="color:red;">Please enter the valid mobile number</label>
                                     <label class="error" for="name" id="mobile_error" style="color:red;">Please enter the mobile number </label>
                                </div>

								<div class="row">
                                    <label><strong>Contact Person</strong></label>
                                    <input type="text" name="person" id="person" value="" class="inputtext input_full_edit required">
                                     <label class="error" for="person" id="person_error" style="color:red;">Please enter the person details </label>

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
<script type="text/javascript">
$(document).ready(function(){
	$('.error').hide();
  $('.error1').hide();
 $("#send").click(function(event){
         $('.error').hide();
         $('.error1').hide();
          var name = $('input[name="yourname"]').val();
          if (name == "") {
            $("label#name_error").show();
            $("input#name").focus();
            return false;
          }
          var email = $('input[name="email"]').val();
          if (email == "") {
            $("label#email_error1").show();
            $("input#email").focus();
            return false;
          }
          if (email == ""){

            $("label#email_error").show();
            $("input#email").focus();
            return false;
          }
          var destination = $('input[name="destination"]').val();
          var regex = /^[a-zA-Z ]*$/;
          if(!regex.test(destination)){
            $("label#destination_error1").show();
            $("input#destination").focus();
            return false;
          }
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
          var message = $('#message').val();
          if (message == "") {
            $("label#message_error").show();
            $("input#message").focus();
            return false;
          }
          var person = $('input[name="person"]').val();
          if (person == "") {
            $("label#person_error").show();
            $("input#person").focus();
            return false;
          }
          var mobile = $('input[name="mobile"]').val();
          var mobile_val= (mobile).length;
          
          if (mobile_val != 10 ){
             
              $("label#mobile_error1").show();
              $("input#mobile").focus();
              return false;
          }
          if (mobile == ""){
            
              $("label#mobile_error").show();
              $("input#mobile").focus();
              return false;
          }
          });
});
</script>
<!--/ middle -->
<?php include("footer.php"); ?>
