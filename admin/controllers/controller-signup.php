<?php
require_once '../models/users.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $enterpriseSiret = $_POST["enterpriseSiret"];
    $enterpriseName = $_POST["enterpriseName"];
    $enterpriseEmail = $_POST["enterpriseEmail"];
    if (empty($_POST["enterpriseName"])) {
        $errors['enterpriseName'] = "required fields";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["enterpriseName"])) {
        $errors['enterpriseName'] = "Name is not valid";
    } else if (Users::userCheckName($enterpriseName)){
        $errors['enterpriseName'] = "This name is already in use";
    }
        // email verification
        if (empty($_POST["enterpriseEmail"])) {
            $errors['enterpriseEmail'] = "SIRET field is required";
        } else if (!filter_var($_POST["enterpriseEmail"], FILTER_VALIDATE_EMAIL)) {
            $errors['enterpriseEmail'] = "The email address is invalid";
        }else if (Users::userCheckEmail($enterpriseEmail)){
            $errors['enterpriseEmail'] = "This email is already in use";
        }

    if (empty($_POST["enterpriseSiret"])) {
        $errors['enterpriseSiret'] = "Required fields";
    } else {
        if (strlen($_POST["enterpriseSiret"]) !== 14) {
            $errors['enterpriseSiret'] = "SIRET must be 15 characters long";
        } else if (Users::userCheckSiret($enterpriseSiret)) {
            $errors['enterpriseSiret'] = "This SIRET already exists";
        }
    }
    if (empty($_POST["enterpriseAddress"])) {
        $errors['enterpriseAddress'] = "required fields";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["enterpriseAddress"])) {
        $errors['enterpriseAddress'] = "Address is invalide.";
    }
    if (empty($_POST["enterpriseZipcode"])) {
        $errors['enterpriseZipcode'] = "required fields";
    } else if (!preg_match("/^\d{5}(?:-\d{4})?$/", $_POST["enterpriseZipcode"])) {
        $errors['enterpriseZipcode'] = "Zipcode is invalid";
    }
    if (empty($_POST["enterpriseCity"])) {
        $errors['enterpriseCity'] = "required fields";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["enterpriseCity"])) {
        $errors['enterpriseCity'] = "City is invalid";
    }

    $enterprisePassword = $_POST["enterprisePassword"];
    $confirm_password = $_POST["enterprisePasswordconfirm"];
    if (strlen($enterprisePassword) < 8) {
        $errors['enterprisePassword'] = "The password must be at least 8 characters long";
    }
    if (($enterprisePassword != $confirm_password)) {
        $errors['enterprisePasswordconfirm'] = "The passwords do not match";
    }

    if (empty($errors)) {
        try {

            $enterpriseAddress = $_POST["enterpriseAddress"];
            $enterpriseZipcode = $_POST["enterpriseZipcode"];
            $enterpriseCity = $_POST["enterpriseCity"];
            $enterprisePassword = $_POST["enterprisePassword"];

            // var_dump($_POST['enterprisePassword']);
            Users::create($enterpriseName, $enterpriseEmail, $enterpriseSiret, $enterpriseAddress, $enterpriseZipcode, $enterpriseCity, $enterprisePassword);
            header("Location: ../views/view-welcome.php");
            // exit();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            die();
        }
    };
}




include_once '../views/view-signup.php';
?>