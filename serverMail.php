<?php

    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);

  	$name = $input["name"];
  	$email = $input["email"];
  	$subject = $input["subject"];
  	$message = $input["message"];
  	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
    $myemail = "web.antonio.popa@gmail.com";

  	if(mail($myemail, $subject, $message, $mailHeaders)) {
  	    echo "Your message has been received, I will contact you soon.";
  	} else {
		echo "Mail was not sent. Retry!";
	}
?>