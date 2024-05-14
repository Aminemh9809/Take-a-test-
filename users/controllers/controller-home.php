<?php 
// require_once '';
session_start();
if(isset($_SESSION['user'])){




}else{
    header('Location: ../views/view-homeNoAccess.php');
}
















include_once '../views/view-home.php';
?>