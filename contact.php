<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		// Vars
		$name  = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
		$phone = strip_tags(trim($_POST['phone']));
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$resort_name = strip_tags(trim($_POST['resort_name']));
		
		
		if ( empty($name) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($resort_name) ) {
	    // Set a 400 (bad request) response code and exit.
	    http_response_code(400);
	    echo "Oops! There was a problem with your submission. Please complete all required fields.";
	    exit;
    }
		
		
		// Set the recipient email address.
    // $recipient = "corp@toweltrack.com";
    $recipient = "nickme@gher.com";

    // Set the email subject.
    $subject = "TowelTrack - Get Info Submission";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content = "Phone: $phone\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Resort Name:\n$resort_name\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";
		
		// Send the email.
	  if (mail($recipient, $subject, $email_content, $email_headers)) {
	    // Set a 200 (okay) response code.
	    http_response_code(200);
	    echo "Thank You! Your message has been sent.";
	  } else {
	    // Set a 500 (internal server error) response code.
	    http_response_code(500);
	    echo "Oops! Something went wrong and we couldn't send your message.";
	  }

	
	} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
  }
	
?>