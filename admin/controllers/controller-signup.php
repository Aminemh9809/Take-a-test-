<?php
require_once '../models/users.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $name = $_POST["name"];
    $email = $_POST["email"];
    if (empty($_POST["name"])) {
        $errors['name'] = "required fields";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST["name"])) {
        $errors['name'] = "Name is not valid";
    } else if (Users::userCheckName($name)){
        $errors['name'] = "This name is already in use";
    }
        // email verification
        if (empty($_POST["email"])) {
            $errors['email'] = "Email field is required";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "The email address is invalid";
        }else if (Users::userCheckEmail($email)){
            $errors['email'] = "This email is already in use";
        }


    


    $password = $_POST["password"];
    $confirm_password = $_POST["passwordConfirm"];
    if (strlen($password) < 8) {
        $errors['password'] = "The password must be at least 8 characters long";
    }
    if (($password != $confirm_password)) {
        $errors['passwordConfirm'] = "The passwords do not match";
    }

    if (empty($errors)) {
        try {

            $password = $_POST["password"];

            // var_dump($_POST['password']);
            Users::create($name, $email, $password);
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