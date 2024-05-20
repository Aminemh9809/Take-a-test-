<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Google Icons -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Test Website</title>
    <style>
        nav .brand-logo {
  display: flex;
  align-items: center;
  height: 64px;
  transition: color 0.3s ease; /* Add transition for smooth color change */
}

nav .brand-logo:hover {
  color: #e0e0e0; /* Change color on hover */
}

nav .brand-logo img {
  height: 50px;
  margin-right: 10px;
  max-width: 100%;
  transition: transform 0.3s ease; /* Add transition for smooth scaling */
}

nav .brand-logo:hover img {
  transform: scale(1.1); /* Scale up the image on hover */
}

nav .brand-logo span {
  white-space: nowrap;
}

nav ul a {
  transition: color 0.3s ease; /* Add transition for smooth color change */
}

nav ul a:hover {
  color: #e0e0e0; /* Change color on hover */
  background-color: rgba(255, 255, 255, 0.1); /* Add a subtle background color */
}

@media (max-width: 600px) {
  

  nav .brand-logo {
    font-size: 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    height: auto;
  }

  nav .brand-logo img {
    height: 25px; /* Adjust the height as desired */
    margin-right: 5px;
  }

  nav .brand-logo span {
    white-space: normal;
  }

  .sidenav-trigger {
    margin-left: auto;
  }
}

        @media (max-width: 600px) {
            nav .brand-logo {
                font-size: 1rem;
            }
            nav .brand-logo img {
                height: 25px; /* Adjust the height as desired */
            }
        }
    </style>
</head>
<body>
    <?php $urlProject = "http://localhost:5000/projetstage/projetphp"; ?>

    <header>
        <nav class="navbar-dark bg-dark">
            <div class="nav-wrapper container">
                <a href="<?= $urlProject ?>/index.php" class="brand-logo">
                    <img src="<?= $urlProject ?>/assets/images/images.png" alt="Logo" class="responsive-img">
                    Knowledge Hub
                </a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= $urlProject ?>/users/controllers/controller-home.php">Home</a></li>
                    <li><a href="<?= $urlProject ?>/users/views/view-about.php">About</a></li>
                    <li><a href="<?= $urlProject ?>/users/controllers/controller-history.php">History</a></li>
                    <li><a href="<?= $urlProject ?>/admin/controllers/controller-signin.php">Admin-Hub</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="<?= $urlProject ?>/users/controllers/controller-home.php">Home</a></li>
        <li><a href="<?= $urlProject ?>/users/views/view-about.php">About</a></li>
        <li><a href="<?= $urlProject ?>/users/controllers/controller-history.php">History</a></li>
        <li><a href="<?= $urlProject ?>/admin/controllers/controller-signin.php">Admin-Hub</a></li>
    </ul>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
</body>
</html>