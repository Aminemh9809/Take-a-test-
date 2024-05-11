<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            border-radius: 10px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
        }

        .card-content {
            padding: 30px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .input-field {
            position: relative;
        }

        .input-field .helper-text {
            position: absolute;
            font-size: 0.8em;
            color: red;
        }

        .btn {
            background-color: #2196f3;
            width: 100%;
            margin-top: 20px;
        }

        .input-field input {
            border-bottom: 1px solid #9e9e9e;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <?php include '../assets/header.php'; ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align">Sign Up</span>
                            <form class="col s12" action="../controllers/controller-signup.php" method="post" novalidate>
                                <br>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" id="name" name="name" class="validate" required value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
                                        <label for="name">Name</label>
                                        <span class="helper-text error" data-error="wrong">
                                            <?php if (isset($errors['name'])) {
                                                echo $errors['name'];
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="email" id="email" name="email" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                                        <label for="email">Email</label>
                                        <span class="helper-text error" data-error="wrong">
                                            <?php if (isset($errors['email'])) {
                                                echo $errors['email'];
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input type="password" id="password" name="password" required>
                                        <label for="password">Password</label>
                                        <span class="helper-text error" data-error="wrong">
                                            <?php if (isset($errors['password'])) {
                                                echo $errors['password'];
                                            } ?>
                                        </span>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input type="password" id="passwordConfirm" name="passwordConfirm" required>
                                        <label for="passwordConfirm">Confirm Password</label>
                                        <span class="helper -text error" data-error="wrong">
                                            <?php if (isset($errors['passwordConfirm'])) {
                                                echo $errors['passwordConfirm'];
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn waves-effect waves-light">Sign Up</button>
                                        <p>Already have an account? <a href="controller-signin.php">Log In</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include '../assets/footer.php'; ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>