<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts (Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include '../assets/header.php'; ?>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Access Denied</h1>
                        <p class="lead text-center">You need to be signed in or logged in to access the test page.</p>
                        <div class="text-center">
                            <a href="../controllers/controller-signup.php" class="btn btn-primary btn-lg mr-3">Sign Up</a>
                            <a href="../controllers/controller-signin.php" class="btn btn-secondary btn-lg">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../assets/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>