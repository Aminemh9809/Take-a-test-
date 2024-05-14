<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Hub - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts (Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
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
            <?php foreach($allTests as $tests) :?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-book-open mr-2"></i><?= $tests['name'] ?></h5>
                        <p class="card-text"><?= $tests['description'] ?></p>
                        <a href="../controllers/controller-test.php?test_id=<?= $tests['id_tests'] ?>" class="btn btn-primary">Take Test</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        
        </div>
    </div>

    <!-- Footer -->
    <?php include '../assets/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>