<?php
require_once '../models/users.php';
require_once '../models/dashboard.php';
session_start();
if (isset($_SESSION['user'])) {
    $enterpriseId = $_SESSION['user']['enterprise_id'];
    // unset password 

    unset($_SESSION['user']['enterprise_password']);
    $getAllusers = json_decode(Users::getAllusers($enterpriseId), true);
    foreach ($getAllusers as $usersExist) {
        unset($usersExist['user_password']);
        // var_dump($usersExist);
        
    }
} else {
    header('Location: controller-signin.php');
    exit();
};





include_once '../views/view-allUsers.php';
