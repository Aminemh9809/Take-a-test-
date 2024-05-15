<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test History</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <?php include_once "../../assets/header.php" ?>

    <!-- Test History -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Test History</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Test 1</h5>
                        <p class="card-text">Date: 2023-05-15</p>
                        <p class="card-text">Score: 80%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Test 2</h5>
                        <p class="card-text">Date: 2023-05-20</p>
                        <p class="card-text">Score: 75%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../../assets/footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>