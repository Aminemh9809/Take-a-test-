 <?php
    require_once '../models/tests.php';
    session_start();
    if (isset($_SESSION['admin'])) {

        $tests = tests::testsShow();



        if (isset($_POST['test_id'])) {
            $testId = $_POST['test_id'];
            var_dump($testId);
            $testsDelete = tests::testsDelete($testId);
            // $testsEdit = tests::testsEdit($testId);
            header('Location: controller-dashboard.php');

        }
    } else {
        header('Location: controller-signin.php');
    }






    include_once '../views/view-dashboard.php';

    ?>