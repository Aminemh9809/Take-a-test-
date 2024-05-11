<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Name - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS can be added here */
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <header class="bg-dark text-white py-4">
        <div class="container text-center">
            <h1>Welcome to Your Website</h1>
        </div>
    </header>

    <main class="container my-4">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2>Take Your Knowledge to the Next Level</h2>
                <p class="lead">Explore a wide range of tests covering various topics and improve your skills.</p>
                <a href="users/controllers/controller-signup.php">Sign up now to start your journey!</a>
            </div>
        </div>
    </main>

    <?php
    include 'users/assets/footer.php'; 
    ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
