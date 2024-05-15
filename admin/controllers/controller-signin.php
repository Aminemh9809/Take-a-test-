<?php
require_once '../models/admin.php';
require_once '../../autoload.php';


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $remoteIp = $_SERVER['REMOTE_ADDR'];
    // $secret = "6LewEHEpAAAAADqO2jBTT_65TM6o7KyPXVyZFUeM";
    $recaptcha = new \ReCaptcha\ReCaptcha("6LewEHEpAAAAADqO2jBTT_65TM6o7KyPXVyZFUeM");
    $gRecaptchaResponse = $_POST['g-recaptcha-response'];
    $resp = $recaptcha->setExpectedHostname('localhost')
        ->verify($gRecaptchaResponse, $remoteIp);
    $recaptcha = false;
    if ($resp->isSuccess()) {
        $recaptcha = true;
    } else {
        $errors['recaptcha'] = $resp->getErrorCodes();
        $recaptcha = false;
    }



    $email = $_POST["email"];

    $password = $_POST["password"];
    $result = Admin::signIn($email);
    var_dump($result);
    if (empty($_POST["email"])) {
        $errors['email'] = "required fields";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "The email address is invalid";
    };

    if (empty($password)) {
        $errors['password'] = "required fields";
    };
    if (!$recaptcha) {
        $errors['recaptcha'] = "Recaptcha verification failed";
    } else {

        if ($result == false) {
            $errors['email'] = "Email invalid";
        } else {
            // var_dump("ok");
            $storedHashedPassword = $result['password'];
            if ($password == $storedHashedPassword && $recaptcha == true) {
                $_SESSION["user"] = $result;
                unset($_SESSION["admin"]["admin"]);
                echo " hello there ";
                exit();  // Ensure that no further code is executed after the redirection

            } else {
                $errors['password'] = "incorrect Password";
            }
        }
    }
}
include_once '../views/view-signin.php';
