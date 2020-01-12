<?php
    // create js version tag for cache bursting
    $jsVersion = "1.0.0";
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
    <script src="https://www.google.com/recaptcha/api.js?render=***REMOVED***"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('***REMOVED***', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <script defer src="/js/main.js?v=<?php echo $jsVersion; ?>"></script>
</body>
</html>
