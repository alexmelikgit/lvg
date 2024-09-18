<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_submitted"])) {

	// $to = "info@lvgrealestatedubai.com"; // Change this to your email address
	$to = "azatking23@gmail.com"; // Change this to your email address

	if ($_POST["form_submitted"] == 1) {
		// Process form data
		$name = $_POST["name"];
		$fathers_name = $_POST["fathers_name"];
		$date_of_b = $_POST["date_of_b"];
		$fathers_number = $_POST["fathers_number"];
		$nationality = $_POST["nationality"];
		$mothers_name = $_POST["mothers_name"];
		$mothers_number = $_POST["mothers_number"];

		// Prepare email message
		$subject = "New Form Submission";
		$message = "Name: $name </br>";
		$message .= "Father's Name: $fathers_name </br>";
		$message .= "Date of Birth: $date_of_b </br>";
		$message .= "Father's Number: $fathers_number </br>";
		$message .= "Nationality: $nationality </br>";
		$message .= "Mother's Name: $mothers_name </br>";
		$message .= "Mother's Number: $mothers_number </br>";


		// Send email
// 		$headers =  array('Content-Type: text/html; charset=UTF-8', "From: Your Website <lvgrealestatedubai.com>"); // Change this to your email address or name
// 		// Handle the uploaded file
// 		if ($_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
// 			$tmp_name = $_FILES['attachment']['tmp_name'];
// 			$filename = basename($_FILES['attachment']['name']);
// 			$upload_dir = wp_upload_dir();
// 			$destination = $upload_dir['basedir'] . '/' . $filename;

// 			// Move the file to the uploads directory
// 			if (move_uploaded_file($tmp_name, $destination)) {
// 				$attachments = array($destination);
// 			}
// 		}

		// var_dump($attachments);

		$result = wp_mail($to, $subject, $message, $headers, $attachments);

		// Check if email is sent successfully
		if ($result) {
			// Email sent successfully
			// echo json_encode(array('success' => false, 'message' => 'suuccess sending email.'));
			header("Location: https://lvgrealestatedubai.com/thanks/");
		}


	}

	if ($_POST["form_submitted"] == 2) {
		// Process form data
		$name = $_POST["your_name"];
		$email = $_POST["email_address"];
		$age_of_ch = $_POST["age_of_ch"];
		$visit_date = $_POST["visit_date"];
		$cont_num = $_POST["cont_num"];
		$mess_age = $_POST["mess_age"];


		// Prepare email message
		$subject = "New Form Submission";
		$message = "Name: $name </br>";
		$message .= "email: $email </br>";
		$message .= "Age of the child: $age_of_ch </br>";
		$message .= "visit date: $visit_date </br>";
		$message .= "contact number: $cont_num </br>";
		$message .= "message: $mess_age </br>";


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
	if ($_POST["form_submitted"] == 3) {
		// Process form data
		$your_number = $_POST["your_number"];
		$email = $_POST["your_email"];


		// Prepare email message
		$subject = "New Form Submission";
		$message = "Number: $your_number </br>";
		$message .= "email: $email </br>";


		// Send email
		$headers =  array('Content-Type: text/html; charset=UTF-8', "From: Your Website <lvgrealestatedubai.com>"); // Change this to your email address or name

		if ($_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES['attachment']['tmp_name'];
			$filename = basename($_FILES['attachment']['name']);
			$upload_dir = wp_upload_dir();
			$destination = $upload_dir['basedir'] . '/' . $filename;

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
	if ($_POST["form_submitted"] == 4) {
		// Process form data
		$your_number = $_POST["your_number"];
		$email = $_POST["your_email"];


		// Prepare email message
		$subject = "New Form Submission";
		$message = "Number: $your_number </br>";
		$message .= "email: $email </br>";


		// Send email
		$headers =  array('Content-Type: text/html; charset=UTF-8', "From: Your Website <lvgrealestatedubai.com>"); // Change this to your email address or name


		// var_dump($attachments);

		$result = wp_mail($to, $subject, $message, $headers, $attachments);

		// Check if email is sent successfully
		if ($result) {
			// Email sent successfully
			// echo json_encode(array('success' => false, 'message' => 'suuccess sending email.'));
			header("Location: https://lvgrealestatedubai.com/thanks/");
		}


	}
	if ($_POST["form_submitted"] == 5) {
		// Process form data
		$your_name = $_POST["your_name"];
		$age_of_ch = $_POST["age_of_ch"];
		$email = $_POST["email_address"];
		$visit_date = $_POST["visit_date"];
		$cont_num = $_POST["cont_num"];
		$mess_age = $_POST["mess_age"];


		// Prepare email message
		$subject = "New Form Submission";
		$message = "Name: $your_name </br>";
		$message .= "email: $email </br>";
		$message .= "Age of the Child: $age_of_ch </br>";
		$message .= "Visit date: $visit_date </br>";
		$message .= "Number: $cont_num </br>";
		$message .= "Message: $mess_age </br>";


		// Send email
		$headers =  array('Content-Type: text/html; charset=UTF-8', "From: Your Website <lvgrealestatedubai.com>"); // Change this to your email address or name


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