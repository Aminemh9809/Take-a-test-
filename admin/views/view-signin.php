<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
    .input-field .helper-text {
            position: absolute;
            font-size: 0.8em;
            /* Adjust the font size as needed */
            color: red;
            /* Adjust the color as needed */
        }
        ;
</style>
</head>

<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
        <form action="../controllers/controller-signin.php" method="POST" class="login-form" novalidate>
            <div class="row">
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">mail_outline</i>
                    <input type="email" id="email" name="enterpriseEmail" value="<?php echo isset($enterpriseEmail) ? $enterpriseEmail : '';   ?>">
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterpriseEmail'])) {
                            echo $errors['enterpriseEmail'];
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
            <div class="g-recaptcha" data-sitekey="6LewEHEpAAAAALwpZiVDLJgsLnHVN06QoUYnaQ6n"></div>
        <span class="error"><?php echo isset($errors['recaptcha'][0]) ? $errors['recaptcha'][0] : ''; ?>
        </span>
            <div class="row">
                <div class="input-field col s12 m12 l12 login-text">
                    <label>
                        <input type="checkbox" id="remember-me" />
                        <span>Remember me</span>
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="../controllers/controller-signup.php">Register Now!</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
                </div>
            </div>

        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- <script>
    var app = angular.module('mainModule', []);

    app.controller('mainController', function($scope, $http) { //o scope liga o js e o template
        $scope.nome = 'Valor Inicial';
        //$http.get().success();
        $scope.reset = function() {
            $scope.nome = '';
        }
    });
</script> -->
<!-- Compiled and minified JavaScript -->

</body>


</html>