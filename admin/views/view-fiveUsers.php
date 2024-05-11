<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .user-card {
            width: 300px;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: auto;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .user-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h4>User Profiles</h4>
            </div>
        </div>
        <div class="row">
            <?php foreach (Dashboard::lastUsers($enterpriseId) as $user) { ?>
                <div class="col s12 m4">
                    <div class="card user-card">
                        <div class="card-content center-align">
                            <div class="user-photo">
                                <?php echo '<img src="../assets/images/' . $user['user_photo'] . '" alt="User Photo">'; ?>
                            </div>
                            <span class="card-title"><?php echo $user['user_pseudo']; ?></span>
                            <p><?php echo $user['user_email']; ?></p>
                            <p><?php echo $user['user_describ']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>



        </div>
    </div>

    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>