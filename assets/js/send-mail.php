<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_submitted"])) {

	// $to = "info@lvgrealestatedubai.com"; // Change this to your email address
	$to = "azatking23@gmail.com"; // Change this to your email address

	if ($_POST["form_submitted"] == 1) {
		// Process form data
// 		$yourname = $_POST["yourname"];
		$email = $_POST["email"];
		$phonenum = $_POST["phonenum"];
// 		$yourmessage = $_POST["yourmessage"];

		// Prepare email message
		$subject = "New Form Submission";
		$message = "Your name: $yourname </br>";
		$message .= "Your e-mail: $email </br>";
		$message .= "Your phone number: $phonenum </br>";
		$message .= "Your message: $yourmessage </br>";


		// Send email
		$headers =  array('Content-Type: text/html; charset=UTF-8', "From: Your Website <lvgrealestatedubai.com>"); // Change this to your email address or name
		// Handle the uploaded file
		if ($_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES['attachment']['tmp_name'];
			$filename = basename($_FILES['attachment']['name']);
			$upload_dir = wp_upload_dir();
			$destination = $upload_dir['basedir'] . '/' . $filename;

			// Move the file to the uploads directory
			if (move_uploaded_file($tmp_name, $destination)) {
				$attachments = array($destination);
			}
		}

		// var_dump($attachments);

		$result = wp_mail($to, $subject, $message, $headers, $attachments);

		// Check if email is sent successfully
		if ($result) {
			// Email sent successfully
			// echo json_encode(array('success' => false, 'message' => 'suuccess sending email.'));
			header("Location: https://lvgrealestatedubai.com/thanks/");
		}


	}

		// Send email
		$headers =  array('Content-Type: text/html; charset=UTF-8', "From: Your Website <lvgrealestatedubai.com>"); // Change this to your email address or name

		// if ($_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
		//     $tmp_name = $_FILES['attachment']['tmp_name'];
		//     $filename = basename($_FILES['attachment']['name']);
		//     $upload_dir = wp_upload_dir();
		//     $destination = $upload_dir['basedir'] . '/' . $filename;

		//     if (move_uploaded_file($tmp_name, $destination)) {
		//         $attachments = array($destination);
		//     }
		// }

		// var_dump($attachments);

		$result = wp_mail($to, $subject, $message, $headers, $attachments);

		// Check if email is sent successfully
		if ($result) {
			// Email sent successfully
			// echo json_encode(array('success' => false, 'message' => 'suuccess sending email.'));
			header("Location: https://lvgrealestatedubai.com/thanks/");
		}


	}

} else {
	// If the form is not submitted via POST request, return an error
	// echo json_encode(array('success' => false, 'message' => 'Form submission method not allowed.'));
}