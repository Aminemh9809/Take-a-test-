<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .input-field {
            position: relative;
        }

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

<body>
    <!-- <?php include_once '../assets/header.php' ?> -->


    <div class="container">
        <div class="row">
            <form class="col s12" action="../controllers/controller-signup.php" method="post" novalidate>
                <div class="input-field col s12 m6">
                    <label for="enterpriseName">Enterprise Name:</label>
                    <input type="text" id="enterpriseName" name="enterpriseName" class="validate" required value="<?= isset($_POST['enterpriseName']) ? htmlspecialchars($_POST['enterpriseName']) : '' ?>">
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterpriseName'])) {
                            echo $errors['enterpriseName'];
                        } ?>
                    </span>
                </div>

                <div class="input-field col s12 m6 ">
                    <label for="enterpriseEmail">Enterprise Email:</label>
                    <input type="email" id="enterpriseEmail" name="enterpriseEmail" required value="<?= isset($_POST['enterpriseEmail']) ? htmlspecialchars($_POST['enterpriseEmail']) : '' ?>">
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterpriseEmail'])) {
                            echo $errors['enterpriseEmail'];
                        } ?>
                    </span>
                </div>
                <div class="input-field col s12 m6 ">

                    <label for="enterpriseSiret">Enterprise SIRET:</label>
                    <input type="text" id="enterpriseSiret" name="enterpriseSiret" required value="<?= isset($_POST['enterpriseSiret']) ? htmlspecialchars($_POST['enterpriseSiret']) : '' ?>">
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterpriseSiret'])) {
                            echo $errors['enterpriseSiret'];
                        } ?>
                    </span>
                </div>
                <div class="input-field col s12 m6">

                    <label for="enterpriseAddress">Enterprise Address:</label>
                    <input type="text" id="enterpriseAddress" name="enterpriseAddress" required value="<?= isset($_POST['enterpriseAddress']) ? htmlspecialchars($_POST['enterpriseAddress']) : '' ?>">
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterpriseAddress'])) {
                            echo $errors['enterpriseAddress'];
                        } ?>
                    </span>
                </div>

                <div class="input-field col s12 m6">
                    <label for="enterpriseZipcode">Enterprise Zip Code:</label>
                    <input type="text" id="enterpriseZipcode" name="enterpriseZipcode" required value="<?= isset($_POST['enterpriseZipcode']) ? htmlspecialchars($_POST['enterpriseZipcode']) : '' ?>">
                    <span class="helper-text error" data-error="wrong" data-success="right">
                        <?php if (isset($errors['enterpriseZipcode'])) {
                            echo $errors['enterpriseZipcode'];
                        } ?>
                    </span>
                </div>

                <div class="input-field col s12 m6">

                    <label for="enterpriseCity">Enterprise City:</label>
                    <input type="text" id="enterpriseCity" name="enterpriseCity" required value="<?= isset($_POST['enterpriseCity']) ? htmlspecialchars($_POST['enterpriseCity']) : '' ?>">
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterpriseCity'])) {
                            echo $errors['enterpriseCity'];
                        } ?>
                    </span>
                </div>
                <div class="input-field col s12 m12">

                    <label for="enterprisePassword">Enterprise Password:</label>
                    <input type="password" id="enterprisePassword" name="enterprisePassword" required>
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterprisePassword'])) {
                            echo $errors['enterprisePassword'];
                        } ?>
                    </span>
                </div>
                <div class="input-field col s12 m12">

                    <label for="enterprisePasswordconfirm">Confirm Password:</label>
                    <input type="password" id="enterprisePasswordconfirm" name="enterprisePasswordconfirm" required>
                    <span class="helper-text error" data-error="wrong">
                        <?php if (isset($errors['enterprisePasswordconfirm'])) {
                            echo $errors['enterprisePasswordconfirm'];
                        } ?>
                    </span>
                </div>
                <div class="input-field col s12 m12">
                    <button type="submit" class="btn waves-effect waves-light green">Submit</button>
                </div>

            </form>
        </div>
    </div>





    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>