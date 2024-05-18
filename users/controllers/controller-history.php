<?php 
session_start();
if(isset($_SESSION['user'])){







}else{
    header('Location: ./controller-signin.php');
};














include_once '../views/view-history.php';
?>