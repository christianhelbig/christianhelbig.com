<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

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