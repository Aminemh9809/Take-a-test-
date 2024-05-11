<?php 

session_start();
session_unset();
session_destroy();
header("Location: ../controllers/controller-signin.php");
exit();
