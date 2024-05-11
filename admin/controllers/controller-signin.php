<?php 
include_once '../models/users.php';
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

    $enterpriseEmail = $_POST["enterpriseEmail"];

    $password = $_POST["password"];
    $result = Users::signIn($enterpriseEmail);


    if (empty($_POST["enterpriseEmail"])) {
        $errors['enterpriseEmail'] = "required fields";
    } else if (!filter_var($_POST["enterpriseEmail"], FILTER_VALIDATE_EMAIL)) {
        $errors['enterpriseEmail'] = "The email address is invalid";
    };

    if (empty($password)) {
        $errors['password'] = "required fields";
    };

    if($result == false){
        $errors['enterpriseEmail'] = "Email invalid";
        
    }else{
        $storedHashedPassword = $result['enterprise_password'];
        if(password_verify($password, $storedHashedPassword) && $recaptcha = true){
            $_SESSION["user"] = $result;
            unset($_SESSION["user"]["user_password"]);
            header('Location: controller-dashboard.php');
            exit();  // Ensure that no further code is executed after the redirection

        }else {
            $errors['password'] = "incorrect Password";
        }
    }

}
include_once '../views/view-signin.php';

?>
