<?php
require("header.html");
?>
<div class="whiteContentBox">
<div class="contentContainer">
	<h2 class ="pageHeading" align="center">Contact Us</h2>
	<hr class="headingUnderline">

 <?php
 if(isset($_POST['submit'])){
	 
	$to = "abc@gmail.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	if(isset($_POST['subscribe'])) {
		
		$message = $message . " and I want to subscribe to newsletter.";
	};
	

	mail($to,$subject,$message,"From:".$email);
	
	echo "<h3>Thank you for contacting us!</h3>";
 } else {
?>


<form id="contactForm" method="post">
<div class="form-group row">
    
    <div class="col-sm-10">
      <p class="form-control-static">To: Rama Temple and Cultural Center</p>
    </div>
  </div>
<fieldset class="form-group">
    <label for="email">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" >
  </fieldset>
<fieldset class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" >
  </fieldset>
<fieldset class="form-group">
    <label for="exampleTextarea">Message</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </fieldset>
 <div class="checkbox">
    <label>
      <input type="checkbox" name="subscribe" value="subscribe"> Subscribe to Newsletter
    </label>
  </div>

<button type="submit" name="submit" class="btn btn-secondary contactButton">Submit</button>

</form>
<br>
<?php
 }
?>
</div>
</div>
<?php
require("footer.html");
?>