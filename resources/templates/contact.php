<?php
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

        // validate reCaptcha
        if(isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
        }

        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=***REMOVED***&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

        if($response['success'] == false) {
            echo "<p class='msg error'>Recaptcha failed.</p>";
        } else {
            $body = "Name: $name\n" .
                "E-Mail: $email\n" .
                "Phone: $phone\n" .
                "Website: $website\n\n" .
                "Message: \n $message\n";

            if (mail("hello@christianhelbig.com", $subject, $body)) {
                echo "<p class='msg success'>Message sent!</p>";
            } else {
                echo "<p class='msg error'>Couldn't send message, please try again!</p>";
            };
        }
    }
?>