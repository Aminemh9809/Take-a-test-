<?php

require_once '../models/tests.php';
session_start();

if (isset($_SESSION['user'])) {
    if (isset($_GET['test_id'])){
        $test_id = $_GET['test_id'];
        $_SESSION['current_question_index'] = 0;
        if (!isset($_SESSION['current_test_id']) || $_SESSION['current_test_id'] !== $test_id) {
            // Reset current_question_index and user_answers for a new test
            // $_SESSION['user_answers'] = array();
            $_SESSION['current_test_id'] = $test_id; // Store the current test_id
        }
    };
    
    $questions = Tests::questions($_SESSION['current_test_id']);
    //var_dump($questions);
    $current_question_index = 0;
    
    // Check if the current question index is already set in the session
    if (!isset($_SESSION['current_question_index'])) {
       // echo "if not isset";
        $_SESSION['current_question_index'] = $current_question_index;
        
    }
    $_SESSION['current_question_id'] = $questions[ $_SESSION['current_question_index']]['id_questions'];
    $current_question = $questions[$_SESSION['current_question_index']];
    //var_dump($current_question);
   // echo "current index ".$_SESSION['current_question_index']. " id : ". $_SESSION['current_question_id'];

    $answers  = Tests::answersNew($_SESSION['current_test_id'], $_SESSION['current_question_id']);
    //var_dump($answers);
    //exit;

    // Initialize the user_answers array if it doesn't exist
    if (!isset($_SESSION['user_answers'])) {
        $_SESSION['user_answers'] = array(
        );
    }

    $selected_answer = isset($_POST[$_SESSION['current_question_id']]) ? $_POST[$_SESSION['current_question_id']] : null;
     
    //echo " anw ".$selected_answer;
    $correct_answer = isset($_POST['hidden']) ? $_POST['hidden'] : null;

    // var_dump($selected_answer);
    // if  the user is using post 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Store the selected answer in the user_answers array
        if ($selected_answer !== null) {
            // $_SESSION['user_answers'][$_SESSION['current_question_index']] = $selected_answer;
            $_SESSION['user_answers'][$_SESSION['current_question_index']] = array(
                'user_answer' => $selected_answer,
                'correct_answer' => $correct_answer
            );
        }
        // var_dump($_SESSION['user_answers']);

        // to count the correct answers
        $_SESSION['wrong_answers'] = 0 ;
        $_SESSION['correct_question_count'] = 0;
        foreach($_SESSION['user_answers'] as $answer) {
            if ($answer['correct_answer'] == 1){
                $_SESSION['correct_question_count'] ++;
                // var_dump($_SESSION['correct_question_count']);
            }else if ($answer['correct_answer'] == 0){
                $_SESSION['wrong_answers']++;
                // var_dump($_SESSION['wrong_answers']);

            };

        };
        $_SESSION['current_question_index']++;
     
        $_SESSION['current_question_id'] = $questions[$_SESSION['current_question_index']]['id_questions'];
        echo "current index ".$_SESSION['current_question_index']. " id : ". $_SESSION['current_question_id'];
    

        $_SESSION['user_answers_save'] = $_SESSION['user_answers'];
        // var_dump($_SESSION['user_answers_save']);
        if ($_SESSION['current_question_index'] < count($questions)) {
            if (isset($_POST["next"])) {
                //if ($_SESSION['current_question_index'] >= count($questions)) {
                // All questions have been answered, handle the submission or move to the next step
                // For example, you could redirect to a different page
                //$_SESSION['current_question_index'] = 0;
                // $_SESSION['user_answers_save'] = $_SESSION['user_answers'];
                //echo "stop";
                // header("Location: result.php");
                //exit;
                //}

                // $current_question = $questions[$_SESSION['current_question_index']];
               // $answers  = Tests::answers($_SESSION['current_question_index'] + 1);



                $current_question = $questions[$_SESSION['current_question_index']];                
                $_SESSION['current_question_id'] = $questions[$_SESSION['current_question_index']]['id_questions'];
                $answers  = Tests::answersNew($_SESSION['current_test_id'],$_SESSION['current_question_id'] );
            }
        } else {
            $_SESSION['current_question_index'] = 0;
            $_SESSION['current_question_id'] = $questions[$_SESSION['current_question_index']]['id_questions'];
            $_SESSION['user_answers']= array() ;
            // echo "stop";
            header("Location: controller-result.php");
            exit;
        }
    }
} else {
    header("Location: ../../index.php");
    exit();
}


include_once '../views/view-test.php';