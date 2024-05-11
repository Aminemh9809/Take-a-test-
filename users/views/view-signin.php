<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

        .input-field .helper-text,
        .helper-text {
            position: absolute;
            font-size: 0.8em;
            color: red;
        }
    </style>
</head>

<body>
    <main>
        <?php include '../assets/header.php'; ?>
        <div class="container">
            <div class="row">
                <br>
                <div class="col s12 m6 offset-m3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center-align">Login</span>
                            <form action="../controllers/controller-signin.php" method="POST" class="login-form" novalidate>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail_outline</i>
                                        <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
                                        <label for="email" data-error="wrong" data-success="right">Email</label>
                                        <span class="helper-text error" data-error="wrong">
                                            <?php if (isset($errors['email'])) {
                                                echo $errors['email'];
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input type="password" id="password" name="password" value="">
                                        <label for="password">Password</label>
                                        <span class="helper-text error" data-error="wrong">
                                            <?php if (isset($errors['password'])) {
                                                echo $errors['password'];
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="g-recaptcha" data-sitekey="6LewEHEpAAAAALwpZiVDLJgsLnHVN06QoUYnaQ6n"></div>
                                        <span class="helper-text error"><?php echo isset($errors['recaptcha']) ? $errors['recaptcha'] : ''; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label>
                                            <input type="checkbox" id="remember-me" />
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn waves-effect waves-light">Login</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <p class="margin medium-small"><a href="../controllers/controller-signup.php">Register Now!</a></p>
                                    </div>
                                    <div class="input-field col s6">
                                        <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>