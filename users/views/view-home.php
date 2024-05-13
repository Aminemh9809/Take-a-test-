<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Hub - Home</title>
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
        <h1 class="text-center mb-4">Available Tests</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Math Test</h5>
                        <p class="card-text">Test your mathematical skills with our comprehensive math exam.</p>
                        <a href="#" class="btn btn-primary">Take Test</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">English Test</h5>
                        <p class="card-text">Assess your English language proficiency with our English test.</p>
                        <a href="#" class="btn btn-primary">Take Test</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Science Test</h5>
                        <p class="card-text">Explore your knowledge of various scientific fields with our science test.</p>
                        <a href="#" class="btn btn-primary">Take Test</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">History Test</h5>
                        <p class="card-text">Dive into the past and test your historical knowledge.</p>
                        <a href="#" class="btn btn-primary">Take Test</a>
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