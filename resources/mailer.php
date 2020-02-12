<?php

include realpath(__DIR__ . DIRECTORY_SEPARATOR . '../../mail_credentials.php');          # include mail credentials, which are kept in separate files for security reasons
include realpath(__DIR__ . DIRECTORY_SEPARATOR . '../../recaptcha_credentials.php');     # include recaptcha credentials, which are kept in separate file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

// store form data in variables
$name       = filter_var(sanitize($_POST['name']), FILTER_SANITIZE_STRING);
$email      = filter_var(sanitize($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone      = filter_var(sanitize($_POST['phone']), FILTER_SANITIZE_STRING);
$website    = filter_var(sanitize($_POST['website']), FILTER_SANITIZE_URL);
$subject    = filter_var(sanitize($_POST['subject']), FILTER_SANITIZE_STRING);
$message    = filter_var(sanitize($_POST['message']), FILTER_SANITIZE_SPECIAL_CHARS);
$message    = str_replace('&#10;', "</br>", $message); // make sure textarea keeps line breaks

// Sanitize user input
function sanitize($data) {

    $data = trim($data);
    $data = stripslashes($data);

    return $data;
}

// Validate reCaptcha
if(isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

// Check recaptcha response
if($response['success'] == false) {
    // recaptcha ERROR
    http_response_code(400);
} else {
    // recaptcha success
    // -> send message

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $Host;
        $mail->SMTPAuth = true;
        $mail->Username = $Username;
        $mail->Password = $Password;
        $mail->SMTPSecure = $SMTPSecure;
        $mail->Port = $Port;

        $mail->setFrom($From, 'Contact Form - christianhelbig.com');
        $mail->addAddress($To);
        $mail->addReplyTo($email, $name);

        //Content
        $body = "Name: " . $name . "</br>" .
            "E-Mail: " . $email . "</br>" .
            "Phone: " . $phone . "</br>" .
            "Website: " . $website . "</br></br>" .
            "Subject: " . $subject . "</br>" .
            "Message: </br></br>" . $message . "</br>";

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        http_response_code(200);
    } catch (Exception $e) {
        http_response_code(500);
    }
}