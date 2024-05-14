<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        body {
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

        .helper-text {
            font-size: 0.8em;
            color: red;
        }
    </style>
</head>

<body>
    <main>
    <?php include '../../users/assets/header.php'; ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form action="" method="POST" class="login-form" novalidate>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="material-icons">mail_outline</i></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
                                    </div>
                                    <div class="helper-text">
                                        <?php if (isset($errors['email'])) {
                                            echo $errors['email'];
                                        } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="material-icons">lock_outline</i></span>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="helper-text">
                                        <?php if (isset($errors['password'])) {
                                            echo $errors['password'];
                                        } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                
                                    <div class="g-recaptcha" data-sitekey="6LewEHEpAAAAALwpZiVDLJgsLnHVN06QoUYnaQ6n"></div>
                                        <span class="helper-text error"><?php echo isset($errors['recaptcha']) ? $errors['recaptcha'] : ''; ?></span>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <p><a href="../controllers/controller-signup.php">Register Now!</a></p>
                                </div>
                                <div class="col-6 text-right">
                                    <p><a href="#">Forgot password?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include '../../users/assets/footer.php'; ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>