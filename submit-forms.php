<?php
	
	// put your email address here
	$youremail = 'm.maedche82@gmail.com';

	
	$submitType = $_POST['type'];
	
	if('newsletter' == $submitType)
	{
		// prepare message
		$body = "You have got new subscribe request from your website : \n\n";
		$body .= "Email:  $_POST[email]";
		
		if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
			$headers = "From: $_POST[email]";
		} else {
			$headers = "From: $youremail";
		}
		
		mail($youremail, 'New Subscribe', $body, $headers );
	}
	
	if('registration' == $submitType)
	{
		// prepare message
		$body  = 	"You have got a new registration from your website : \n\n";
		$body .=	"First Name:  $_POST[first_name] \n\n";
		$body .=	"Last Name:  $_POST[last_name] \n\n";
		$body .=	"Email:  $_POST[email] \n\n";
		$body .=	"Address:  $_POST[address] \n\n";
		$body .=	"Zip Code:  $_POST[zip_code] \n\n";
		$body .=	"City:  $_POST[city] \n\n";
		$body .=	"Plan:  $_POST[plan] \n\n";
	
		if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
			$headers = "From: $_POST[email]";
		} else {
			$headers = "From: $youremail";
		}
	
		mail($youremail, 'New Registration', $body, $headers );
	}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p></p>
</body>
</html>