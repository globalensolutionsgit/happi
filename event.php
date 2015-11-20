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
                                    <label><strong>Name</strong></label>
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
                                    <label><strong>No.of Guest</strong></label>
                                    <input type="number" name="guest" id="guest" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="guest" id="guest_error" style="color:red;">Please enter the number of  guest</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Vanue</strong></label>
                                    <input type="text" name="vanue" id="vanue" value="" class="inputtext input_full_edit required">
                                     <label class="error" for="vanue" id="vanue_error" style="color:red;">Please enter the vanue</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Date</strong></label>
                                    <input type="date" name="date" id="date_in" value="" class="inputtext input_full_edit required" readonly="readonly">
                                    <label class="error" for="date" id="date_error" style="color:red;">Please enter the date.</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Contact Number</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                     <label class="error1" for="mobile" id="mobile_error1" style="color:red;">Please enter the valid mobile number</label>
                                     <label class="error" for="mobile" id="mobile_error" style="color:red;">Please enter the mobile number </label>
                                </div>

								<div class="clear"></div>

								<div class="row">
									<label><strong>Contact Person</strong></label>
									<input type="text" name="person" id="person" value="" class="inputtext input_full_edit required">
                  <label class="error" for="person" id="person_error" style="color:red;">Please enter the person </label>
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
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
           if( !emailReg.test( email ) ) {
           
            $("label#email_error1").show();
            $("input#email").focus();
            return false;
          }
         if (email == ""){

            $("label#email_error").show();
            $("input#email").focus();
            return false;
          }
          var guest = $('input[name="guest"]').val();
          if (guest == "") {
            $("label#guest_error").show();
            $("input#guest").focus();
            return false;
          }
          var vanue = $('input[name="vanue"]').val();
          if (vanue == "") {
            $("label#vanue_error").show();
            $("input#vanue").focus();
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
             
              $("label#mobile_error1").show();
              $("input#mobile").focus();
              return false;
          }
          if (mobile == ""){
            
              $("label#mobile_error").show();
              $("input#mobile").focus();
              return false;
          }
          var person = $('input[name="person"]').val();
          var regex = /^[a-zA-Z ]*$/;
          if(!regex.test(person)){ 
            $("label#person_error").show();
            $("input#person").focus();
            return false;
          }
          if (person == "") {
            $("label#person_error").show();
            $("input#person").focus();
            return false;
          }
          });
          });
</script>
<!--/ middle -->
<?php include("footer.php"); ?>
