<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>reCAPCHA v3 sample</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
</head>
<body>
<script src="https://www.google.com/recaptcha/api.js?render=<?= SITEKEY ?>"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?= SITEKEY ?>', {action: 'homepage'}).then(function(token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
    });
</script>
<section class="section">
    <div class="container">
        <form action="login.php" method="post" class="comment_form">
            <input type="hidden" name="recaptchaResponse" id="recaptchaResponse" />
            <div class="field">
                <label class="label">ID</label>
                <div class="control">
                    <input class="input" type="text" name="id" placeholder="ID">
                </div>
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <input type="submit" class="button is-link" value="Login">
                </div>
            </div>
        </form>
    </div>
</section>

</body>
</html>