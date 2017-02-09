<?php

$from = 'Bow Robotics Contact Form <info@bowautomation.com>';
$sendTo = 'Info group <d.royce@bowautomation.com>';
$subject = 'New Message from the website contact form';
$fields = array('firstname' => 'Name', 'lastname' => 'Last Name', 'phone' => 'Phone', 'company' => 'Company', 'email' => 'Email', 'message' => 'Message'); 
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';



try
{
    $emailText = "You have new message from:";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}