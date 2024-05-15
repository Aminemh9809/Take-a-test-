<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Knowledge Hub</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .form-container h2 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: 700;
        }

        .form-group .form-control {
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #ced4da;
            transition: border-color 0.3s ease-in-out;
        }

        .form-group .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: 700;
            text-transform: uppercase;
            width: 100%;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .error-message {
            color: #f44336;
            font-size: 0.8em;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php include '../../assets/header.php'; ?>

    <div class="container">
        <div class="form-container mb-5">
            <h2>Sign Up</h2>
            <form action="../controllers/controller-signup.php" method="post" novalidate>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
                    <div class="error-message">
                        <?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                    <div class="error-message">
                        <?php if (isset($errors['email'])) {
                            echo $errors['email'];
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="error-message">
                        <?php if (isset($errors['password'])) {
                            echo $errors['password'];
                        } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwordConfirm">Confirm Password</label>
                    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required>
                    <div class="error-message">
                        <?php if (isset($errors['passwordConfirm'])) {
                            echo $errors['passwordConfirm'];
                        } ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <p class="text-center mt-3">Already have an account? <a href="controller-signin.php">Log In</a></p>
            </form>
        </div>
    </div>

    <?php include '../../assets/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>