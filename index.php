<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Hub - Unleash Your Potential</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Montserrat', sans-serif;
        }

        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/1600x900/?knowledge,education');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 2rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
<?php include './assets/header.php'; ?>


    <section class="hero">
        <div class="container">
            <h1>Unleash Your Potential</h1>
            <p class="lead">Explore a wide range of tests covering various topics and improve your skills.</p>
            <a href="users/controllers/controller-signin.php" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </section>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/600x400/?knowledge" class="card-img-top" alt="Knowledge">
                    <div class="card-body">
                        <h5 class="card-title">Expand Your Knowledge</h5>
                        <p class="card-text">Discover new topics and deepen your understanding with our diverse collection of tests.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/600x400/?skills" class="card-img-top" alt="Skills">
                    <div class="card-body">
                        <h5 class="card-title">Enhance Your Skills</h5>
                        <p class="card-text">Improve your skills through practice and challenge yourself with our comprehensive tests.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://source.unsplash.com/600x400/?growth" class="card-img-top" alt="Growth">
                    <div class="card-body">
                        <h5 class="card-title">Continuous Growth</h5>
                        <p class="card-text">Embark on a journey of lifelong learning and stay ahead of the curve in your field with our comprehensive tests .</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include './assets/footer.php'; ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>