<?php
require "config.php";

if (isset($_POST['recaptchaResponse']) && !empty($_POST['recaptchaResponse'])) {
    $secret = SECRETKEY;
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['recaptchaResponse']);
    print_r($verifyResponse);
    $reCAPTCHA = json_decode($verifyResponse);
    if ($reCAPTCHA->success) {
        echo 'success';
    } else {
        echo 'bot';
    }
}
