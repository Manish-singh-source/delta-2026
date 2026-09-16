<?php

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

// Server-Side Validation
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$services = $_POST['services'];
$message = $_POST['message'];
$hidden_field = trim($_POST['hidden_field']); // Honeypot field

// Set the default timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

$errors = [];

// Validate Honeypot
if (!empty($hidden_field)) {
    $errors[] = "Bot detected!";
}

// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

// Validate Phone Number (10 digits only)
if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = "Invalid phone number. Please enter a 10-digit number.";
}

// Validate Other Fields
if (empty($name) || empty($email) || empty($message)) {
    $errors[] = "All fields are required.";
}

// Validate Google reCAPTCHA
$recaptcha_secret = '6Ld-BqooAAAAAI7pUKd6MPx71bfNRroiW5UksAMD';
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$recaptcha_result = curl_exec($ch);
curl_close($ch);

$recaptcha_decoded = json_decode($recaptcha_result, true);

if (!$recaptcha_decoded['success']) {
    $errors[] = "reCAPTCHA verification failed. Please try again.";
}

// Display errors and exit if any
if (!empty($errors)) {
    echo '<script>';
    echo 'alert("' . implode('\\n', $errors) . '");';
    echo 'window.location.href = "contact.php";';
    echo '</script>';
    exit;
}

// Prepare email content for admin
$htmlbody = '
    <html>
    <head>
        <title>Contact Us - Form Enquiry</title>
    </head>
    <body>
        <table>
            <tbody>
                <tr>
                    <td valign="middle" align="center">
                        <table width="630" cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td valign="middle" align="center">
                                        <table width="630" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="middle" style="background-color:#eee;">
                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="left" style="width:75%">
                                                                        <img style="display: inline-block; position: relative; max-width: 100%" src="https://deltacab.co.in/imgs/logo1.png" width="60%" height="60%" border="0">
                                                                    </td>
                                                                    <td valign="middle" align="left"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="620" cellspacing="20" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <font style="font-size: 13px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                            <b>Client Has Submitted Following Data Through Our Online Contact Form</b>
                                                                        </font>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="580" cellspacing="5" cellpadding="0" border="0" bgcolor="#DCECF5">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Your Name :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($name) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Mobile No :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($contact) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Email ID :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($email) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Services :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($services) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Message :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($message) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                 
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="600" cellspacing="10" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table width="580" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            Regards,<br />
                                                                                            Team Delta Cab<br />
                                                                                            <span>Email: <a href="mailto:enquiry@deltacab.co.in">enquiry@deltacab.co.in</a></span><br />
                                                                                            <span>Contact No: +91 98202  99895</span><br />
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>';

        // Prepare email content for client
        $client_htmlbody = '
<html>
    <head>
        <title>Thank You for Contacting Us</title>
    </head>
    <body>
        <table>
            <tbody>
                <tr>
                    <td valign="middle" align="center">
                        <table width="630" cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td valign="middle" align="center">
                                        <table width="630" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="middle" style="background-color:#eee;">
                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="left" style="width:75%">
                                                                        <img style="display: inline-block; position: relative; max-width: 100%" src="https://deltacab.co.in/imgs/logo1.png" width="inherit" height="inherit" border="0">
                                                                    </td>
                                                                    <td valign="middle" align="left"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="620" cellspacing="20" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <font style="font-size: 13px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                            <b>Hi ' . htmlspecialchars($name) . ',</b>
                                                                            <p>Thanks for showing your interest,</p>
                                                                        </font>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table width="580" cellspacing="10" cellpadding="0" border="0" bgcolor="#DCECF5">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="middle" align="center">
                                                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td valign="middle" align="left">
                                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                            <span>We are delighted to welcome you to the Delta Cab family! We hope you enjoy using our services. We have created a request for you. Our business advisor will get in touch with you in the next 12 hours and guide you through all your requirements. In the meanwhile, If you have any specific queries you mail us at: <a href="mailto:enquiry@deltacab.co.in">enquiry@deltacab.co.in</a></span><br />
                                                                                                            <span>Please visit our Website: <a href="https://deltacab.co.in/">Deltacab.co.in</a> for more services. Our priority is to ensure that you get help & support from our team business advisor as quick and stress-free as possible - by keeping you updated on the progress. Again, thank you for deciding to work with us. We hope we can give you the same satisfaction as what our loyal clients have been experiencing from us. We look forward to a long-term relationship.</span><br />
                                                                                                        </font>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="middle" align="center">
                                                                                        <table width="600" cellspacing="10" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td valign="middle" align="center">
                                                                                                        <table width="580" cellspacing="0" cellpadding="0" border="0">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td valign="middle" align="left">
                                                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                                            Best Regards,<br />
                                                                                                                            <span>Team Delta Cab</span><br />
                                                                                                                            <span>Email: <a href="mailto:enquiry@deltacab.co.in">enquiry@deltacab.co.in</a></span><br />
                                                                                                                            <span>Contact No: +91 98202 99895</span>
                                                                                                                        </font>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>';

// Admin Email Setup
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'support@technofra.com';
$mail->Password = 'wtbm olzk gxee pusq';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('support@technofra.com', 'Delta Cab');
$mail->addAddress('support@technofra.com');
$mail->isHTML(true);
$mail->Subject = 'Received an inquiry from the Delta Cab website contact page (' . $currentDateTime . ')';
$mail->Body = $htmlbody;

// Send Admin Email
if (!$mail->send()) {
    header('Location: failed.php');
    exit;
}

// Client Email Setup
$client_mail = new PHPMailer();
$client_mail->IsSMTP();
$client_mail->Host = 'smtp.gmail.com';
$client_mail->SMTPAuth = true;
$client_mail->Username = 'support@technofra.com';
$client_mail->Password = 'wtbm olzk gxee pusq';
$client_mail->SMTPSecure = 'tls';
$client_mail->Port = 587;

$client_mail->setFrom('support@technofra.com', 'Delta Cab');
$client_mail->addAddress($email);
$client_mail->isHTML(true);
$client_mail->Subject = 'Thank You for Contacting Delta Cab (' . $currentDateTime . ')';
$client_mail->Body = $client_htmlbody;

// Send Client Email
if (!$client_mail->send()) {
    header('Location: failed.php');
    exit;
}

header('Location: success.php');
