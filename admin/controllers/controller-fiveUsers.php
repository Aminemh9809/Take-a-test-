<?php
require_once '../models/dashboard.php';
session_start();
if (isset($_SESSION['user'])) {
    $enterpriseId = $_SESSION['user']['enterprise_id'];
    // var_dump($enterpriseId);
    // Dashboard::lastUsers($enterpriseId);
    $cheieften = Dashboard::lastUsers($enterpriseId);
    $lastUsersPseudo = Dashboard::lastUsers($enterpriseId)['user_pseudo'];
    $lastUsersImage = Dashboard::lastUsers($enterpriseId)['user_photo'];
    $lastUsersEmail = Dashboard::lastUsers($enterpriseId)['user_email'];
    $lastUsersdescrib = Dashboard::lastUsers($enterpriseId)['user_describ'];
    if ($lastUsersImage == null || $lastUsersImage == '') {
        $lastUsersImage = 'profile-picture.png';
    }
}
include_once '../views/view-fiveUsers.php';



















include_once '../views/view-fiveUsers.php';
