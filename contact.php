<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = 's.taylakov@student.inha.uz';
		$subject = 'Contact establishment';
		$message = "Name: " . $name . "\n" . "Wrote the following: " . "\n\n" . $message;
		$headers = "From: " . $email;

		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    	if(!preg_match($email_exp,$email)) {
    	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  		}


 		$string_exp = "/^[A-Za-z .'-]+$/";
 
  		if(!preg_match($string_exp,$name)) {
    	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
  		}


		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Your message has been sent successfully!</h1>";
		}
		else{
			echo "Could not send your email...";
		}

	}




 ?>