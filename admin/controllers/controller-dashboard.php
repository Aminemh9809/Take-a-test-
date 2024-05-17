<?php
    require_once '../models/tests.php';
    session_start();
    if (isset($_SESSION['admin'])) {

        $tests = tests::testsShow();
 
        if (isset($_POST['delete']) && $_POST['test_id']) {
            
            $testsDelete = tests::testsDelete($_POST['test_id']);
            // $testsEdit = tests::testsEdit($testId);
            header('Location: controller-dashboard.php');

        }
        else 
        if (isset($_POST['save']) && $_POST['test_id']){
            $champName="text".$_POST['test_id'] ;
            $text = $_POST[$champName];            
            $testsEdit = tests::testsEdit($_POST['test_id'],$text);
            header('Location: controller-dashboard.php');
        } 
        }
    else {
        header('Location: controller-signin.php');
    }






    include_once '../views/view-dashboard.php';

    ?>