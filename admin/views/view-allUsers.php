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
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 50px;
        }

        .user-card {
            width: 300px;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
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

        .card-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .switch {
            margin-top: 20px;
        }

        .switch p {
            margin-bottom: 10px;
        }

        .switch label {
            display: flex;
            align-items: center;
        }

        .switch input[type="checkbox"]+.lever {
            background-color: #ccc;
        }

        .switch input[type="checkbox"]:checked+.lever {
            background-color: #2196F3;
        }

        .switch input[type="checkbox"]:checked+.lever::after {
            background-color: #fff;
        }

        .switch label span.lever::before {
            background-color: #fff;
        }

        .switch label span.lever::after {
            background-color: #aaa;
        }

        .switch label span.lever {
            border-radius: 12px;
        }

        .switch label span.lever::before,
        .switch label span.lever::after {
            border-radius: 50%;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-container button {
            flex: 1;
            margin-right: 10px;
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
            <?php foreach ($getAllusers as $user) : ?>
                <div class="col s12 m4">
                    <div class="card user-card">
                        <div class="card-content center-align">
                            <div class="user-photo">
                                <img src="../assets/images/<?= $user['user_photo']; ?>" alt="User Photo">
                            </div>
                            <span class="card-title"><?= $user['user_pseudo']; ?></span>
                            <!-- Switch -->
                            <div class="switch">
                                <p><?= $user['user_email']; ?></p>
                                <br>
                                <label>
                                    Off
                                    <input type="checkbox" class="blockSwitch" data-user-id="<?= $user['user_id']; ?>" <?= $user['user_validate'] == 1 ? "checked" : ""; ?>>
                                    <span class="lever"></span>
                                    On
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener("click", e=>{
            if(e.target.type == "checkbox"){
                if(e.target.checked === false){
                    fetch(`controller-ajax.php?unvalidate=${e.target.dataset.userId}`);
                }else {
                    fetch(`controller-ajax.php?validate=${e.target.dataset.userId}`);
                }

            }

        })
    </script>
</body>

</html>