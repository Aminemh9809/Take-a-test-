<!DOCTYPE html>
<html>
<head>
    <title>Test Result</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <!-- Header -->
    <?php include '../../assets/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col s12">
                <h2>Test Result</h2>
                <p>You scored <span style="color:blue;"><?= $_SESSION['correct_question_count']?> </span>questions correctly.</p>
                <p>Your percentage score is: <span style="color:blue;"> <?= $_SESSION['correct_question_count']* 10  ?>%</span> </p>

                <!-- Display additional information or feedback based on the score -->

                <!-- Add a button or link to retake the test or go back to the home page -->
                <a href="../controllers/controller-home.php" class="btn">Back to Home</a>
            </div>
        </div>
    </div>
    <?php include '../../assets/footer.php'; ?>

    <!-- Include your JavaScript files here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>