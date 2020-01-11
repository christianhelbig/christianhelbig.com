<?php

    include "mail_credentials.php";     # include mail credentials, which are kept in separate files for security reasons

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    if (isset($_POST['submit'])) {
        $name       = filter_var(sanitize($_POST['name']), FILTER_SANITIZE_STRING);
        $email      = filter_var(sanitize($_POST['email']), FILTER_SANITIZE_EMAIL);
        $phone      = filter_var(sanitize($_POST['phone']), FILTER_SANITIZE_STRING);
        $website    = filter_var(sanitize($_POST['website']), FILTER_SANITIZE_URL);
        $subject    = filter_var(sanitize($_POST['subject']), FILTER_SANITIZE_STRING);
        $message    = filter_var(sanitize($_POST['message']), FILTER_SANITIZE_STRING);
    }

    // Sanitize user input
    function sanitize($data) {

        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
?>

<form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control" type="text" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input class="form-control" type="text" id="website" name="website" placeholder="Website">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="message">Subject</label>
                <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
            </div>
            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Send</button>
            </div>
        </div>
    </div>
</form>

<?php
    if (isset($_POST['submit'])) {
        // Validate reCaptcha
        if(isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
        }
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=***REMOVED***&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

        // Check recaptcha response
        if($response['success'] == false) {
            // recaptcha ERROR
            echo "<p class='msg text-danger'>Recaptcha failed.</p>";
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
                $body = "Name: $name</br>" .
                    "E-Mail: $email</br>" .
                    "Phone: $phone</br>" .
                    "Website: $website</br></br>" .
                    "Message: \n $message\n";

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $body;

                $mail->send();
                echo "<p class='msg text-success'>Message has been sent</p>";
            } catch (Exception $e) {
                echo "<p class='msg text-danger'>Message could not be sent.</p>";
                echo "<p class='msg text-danger'>Mailer Error:" . $mail->ErrorInfo . "</p>";
            }
        }
    }
?>