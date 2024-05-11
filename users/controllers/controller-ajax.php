<?php
require_once '../models/users.php';

session_start();

if (isset($_SESSION['user'])) {
    $enterpriseId = $_SESSION['user']['enterprise_id'];



    if (isset($_GET['validate'])) {
        $getOneuser = json_decode(Users::getOneuser($_GET['validate']), true);
        if ($getOneuser['enterprise_id'] == $enterpriseId) {
            users::validateUser($_GET['validate']);
        }
    }
    if (isset($_GET['unvalidate'])) {
        $getOneuser = json_decode(Users::getOneuser($_GET['unvalidate']), true);
        if ($getOneuser['enterprise_id'] == $enterpriseId) {
            users::blockUser($_GET['unvalidate']);
        }

    }
}
