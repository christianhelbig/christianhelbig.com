<?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
        $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
        $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    }
?>

<form class="contact-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email address" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Phone">
        </div>
        <div class="col-md-6">
            <label for="message">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message" required></textarea>

            <button type="submit" class="submit">Send</button>
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