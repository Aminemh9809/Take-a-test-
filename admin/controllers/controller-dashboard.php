 <?php
    require_once '../models/tests.php';
    session_start();
    if (isset($_SESSION['admin'])) {

        $tests = tests::testsShow();


        var_dump($_request);
       
        if (isset($_POST['delete']) && $_POST['test_id']) {
            $testId = $_POST['test_id'];
            var_dump($testId);
            echo "delete";
            exit;
           // $testsDelete = tests::testsDelete($testId);
            // $testsEdit = tests::testsEdit($testId);
            header('Location: controller-dashboard.php');

        }
        else 
        if (isset($_POST['save']) && $_POST['test_id']){
             echo "save";
             exit;

            
        } 
        }
    else {
        header('Location: controller-signin.php');
    }






    include_once '../views/view-dashboard.php';

    ?>