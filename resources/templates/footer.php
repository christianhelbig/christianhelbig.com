<?php
    // create js version tag for cache bursting
    $jsVersion = "1.0.2";

    // include recaptcha credentials, which are kept in separate file
    include realpath(__DIR__ . DIRECTORY_SEPARATOR . '../../../recaptcha_credentials.php');
?>

    <div id="footer" class="text-bright section-slim section-emphasize">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright">&copy; Copyright <?php echo date('Y')?> - Christian Helbig</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="/impressum">Impressum</a></li>
                        <li><a href="/datenschutz">Datenschutz</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script defer src="/js/fs.all.min.js"></script>
    <script defer src="/js/main.js?v=<?php echo $jsVersion; ?>"></script>
    <!-- Google reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha_sitekey; ?>"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo $recaptcha_sitekey; ?>', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</body>
</html>
