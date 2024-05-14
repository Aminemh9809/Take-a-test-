<?php 
require_once '../models/tests.php';
require_once '../models/users.php';
session_start();
if(isset($_SESSION['user'])){
$allTests = Tests::tests();

}else{
    header('Location: ../views/view-homeNoAccess.php');
}

include_once '../views/view-home.php';
?>