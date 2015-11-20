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
	       	    <h1>VISA SERVICE</h1>

	            <div class="entry">
	           	  <p>We provide VISA services across the country to step forward a thousand miles ahead.</p>
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
						  Country to visit: {$_REQUEST['country']},
						  Month of travel: {$_REQUEST['month']},
						  No of pax: {$_REQUEST['pax']},
						  Mobile No : {$_REQUEST['mobile']},
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
                            <form action="#" method="post" id="commentForm" class="ajax_form">

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
                                    <label><strong>Country to visit</strong></label>
                                    <input type="text" name="country" id="country" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="country" id="country_error" style="color:red;">Please enter the country.</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Month of travel</strong></label>
                                    <select name="month" id="month" value="" class="inputtext input_full_edit required">
                                      <option value= "1">Jan</option>
                                      <option value= "2">Feb</option>
                                      <option value= "3">Mar</option>
                                      <option value= "4">Apr</option>
                                      <option value= "5">May</option>
                                      <option value= "6">Jun</option>
                                      <option value= "7">Jul</option>
                                      <option value= "8">Aug</option>
                                      <option value= "9">Sep</option>
                                      <option value= "10">Oct</option>
                                       <option value= "11">Nov</option>
                                        <option value= "12">Dec</option>

                                    </select>
                                    
                                    <label class="error" for="month" id="month_error" style="color:red;">Please enter the month.</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Number of pax</strong></label>
                                    <input type="number" name="pax" id="pax" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="pax" id="pax_error" style="color:red;">Please enter the pax.</label>
                                </div>

								<div class="clear"></div>

								<div class="row">
                                    <label><strong>Contact Number</strong></label>
                                    <input type="text" name="mobile" id="mobile" value="" class="inputtext input_full_edit required">
                                    <label class="error" for="mobile" id="mobile_error" style="color:red;">Please enter the mobile.</label>
                                    <label class="error1" for="mobile" id="mobile_error1" style="color:red;">Please enter the valid mobile number</label>
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

$('.error1').hide();
  $('.error').hide();
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

          var country = $('input[name="country"]').val();
          if (country == "") {
            $("label#country_error").show();
            $("input#country").focus();
            return false;
          }

          var month = $('#month').val();
          if (month == "") {
            $("label#month_error").show();
            $("input#month").focus();
            return false;
          }
          
          var pax = $('input[name="pax"]').val();
          var pax_val= (pax).length;
          if (pax_val != 2 && pax_val != 1) {
            $("label#pax_error").show();
            $("input#pax").focus();
            return false;
          }
          if (pax == "") {
            $("label#pax_error").show();
            $("input#pax").focus();
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

</script>
<!--/ middle -->
<?php include("footer.php"); ?>
