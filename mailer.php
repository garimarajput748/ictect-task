<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    respondWithError('Method Not Allowed');
}

// Check if required POST variables are set
$requiredFields = ["name", "email", "phonenumber"];
foreach ($requiredFields as $field) {
    if (!isset($_POST[$field])) {
        respondWithError('Input fields are empty!');
    }
}

// Sanitize and extract POST data
$userName = trim($_POST["name"]);
$userEmail = trim($_POST["email"]);
$userPhoneNumber = trim($_POST["phonenumber"]);

// Set recipient email address
$to = "test@gmail.com";

// Set email subject and message
$subject = "Contact Form Submission";
$message = "Name: $userName\n";
$message .= "Email: $userEmail\n";
$message .= "Phone Number: $userPhoneNumber\n";

// Set email headers
$headers = 'From: ' . $userEmail . "\r\n" .
    'Reply-To: ' . $userEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Attempt to send the email
$sentMail = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if (!$sentMail) {
    respondWithError('Could not send mail! Please contact administrator.');
} else {
    respondWithMessage('Hi ' . $userName . ' Thank you for your email');
}

// Helper functions for responding with error or message
function respondWithError($errorMessage) {
    $output = json_encode(array('type' => 'error', 'text' => $errorMessage));
    die($output);
}

function respondWithMessage($successMessage) {
    $output = json_encode(array('type' => 'message', 'text' => $successMessage));
    die($output);
}
