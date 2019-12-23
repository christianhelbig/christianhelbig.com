<?php
    if (isset($_POST['submit'])) {
        $name       = sanitize($_POST['name']);
        $email      = sanitize($_POST['email']);
        $phone      = sanitize($_POST['phone']);
        $subject    = sanitize($_POST['subject']);
        $message    = sanitize($_POST['message']);
    }

    // Sanitize user input
    function sanitize($data) {

        filter_var($data, FILTER_SANITIZE_STRING);
        $data = trim($data);
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
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="message">Subject</label>
                <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Send</button>
            </div>
<!--            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">-->
        </div>
    </div>
</form>

<?php
    if (isset($_POST['submit'])) {
        $body = "Name: $name\n" .
                "E-Mail: $email\n" .
                "Phone: $phone\n\n" .
                "Message: \n $message\n";

        if (mail("hello@christianhelbig.com", $subject, $body)) {
            echo "<p class='msg success'>Message sent!</p>";
        } else {
            echo "<p class='msg error'>Couldn't send message, please try again!</p>";
        };
    }
?>