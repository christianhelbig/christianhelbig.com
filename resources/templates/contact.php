<form class="contact-form" action="resources/mailer.php" method="POST">
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
        <div id="form-messages"></div>
    </div>
</form>