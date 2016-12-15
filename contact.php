<?php
	
	require 'vendor/autoload.php';
	use Mailgun\Mailgun;
	
	$mailgun = new Mailgun("key-a86fa34a3e3b25da325aac3352d282de");
	$domain = "toweltrack.com";
	
	
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
    $recipient = "corp@gher.com";

    // Set the email subject.
    $subject = "TowelTrack - Info Request";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Resort Name: $resort_name\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";
		
		
		// Send email with MailGun
		$mailgun->sendMessage($domain, array('from' => $email, 'to' => $recipient, 'subject' => $subject, 'text' => $email_content));
		echo "Your message has been sent.";
	
	} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
  }
	
?>