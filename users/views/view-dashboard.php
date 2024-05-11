<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <!-- cdn chartsjs -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>


    <style>
        /* Custom styles */
        .side-nav {
            background-color: #3949ab;
        }

        .side-nav a {
            color: #fff !important;
        }

        .content {
            padding: 20px;
        }

        @media (min-width: 992px) {
            .sideNav {
                height: 100vh;
                /* Set height to 100% of the viewport height */
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="">
        <div class="nav-wrapper teal lighten-2">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
            <a href="#" class="brand-logo m-5">Dashboard</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#!"><i class="fas fa-bell"></i></a></li>
                <li>
                    <!-- Dropdown Trigger -->
                    <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                        <i class="material-icons">account_circle</i><i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <!-- Dropdown Structure -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="../controllers/controller-deconnection.php">Déconnection</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Layout -->
    <div class="row">
        <!-- Side Navigation -->
        <div class="sideNav col s12 m4 l3 purple darken-4">
            <!-- Grey navigation panel -->
            <ul class="collection with-header purple darken-4" style="border: none;">
                <li class="collection-header purple darken-4 white-text" style="border: none;">
                    <h4>User Info</h4>
                </li>
                <li class="collection-item purple darken-4 white-text" style="border: none;">Entreprise nom : <?= $enterprise['enterprise_name'] ?></li>
                <li class="collection-item purple darken-4 white-text" style="border: none;">Entreprise address : <?= $enterprise['enterprise_adress'] ?></li>
                <li class="collection-item purple darken-4 white-text" style="border: none;"><?= $enterprise['enterprise_email'] ?></li>
                <li class="collection-item purple darken-4 white-text" style="border: none;">Siret : <?= $enterprise['enterprise_siret'] ?></li>
                <!-- Add more items as needed -->
            </ul>
        </div>

        <!-- Page Content -->
        <div class="col s12 m8 l9">
            <div class="content">
                <!-- Cards Section -->
                <div class="row">
                    <!-- Carte 1 -->
                    <div class="col s12 m4">
                        <div class="card blue darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Total des utilisateurs</span>
                                <p>nombre d'utilisateurs : <?= $userCount ?></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 2 -->
                    <div class="col s12 m4">
                        <div class="card deep-purple darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Total des utilisateurs actifs</span>
                                <p>Aperçu des utilisateurs actifs: <?= $userActive ?></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 3 -->
                    <div class="col s12 m4">
                        <div class="card purple darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Total des trajets</span>
                                <p>Aperçu du total des trajets... <?= $rideCount ?></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 4 -->
                    <div class="col s12 m4">
                        <div class="card deep-purple darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Les 5 derniers utilisateurs </span>
                                <p>Les 5 derniers utilisateurs </p>
                            </div>
                            <div class="card-action">
                                <a href="../controllers/controller-fiveUsers.php">Détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 5 -->
                    <div class="col s12 m4">
                        <div class="card deep-purple darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Zone F : Stats des Moyens de transport (à venir)</span>
                                <canvas id="transportChart"></canvas>
                            </div>
                            <div class="card-action">
                                <a href="#">Détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carte 6 -->
                    <div class="col s12 m4">
                        <div class="card deep-purple darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Tous les utilisateurs qui existe dans l'entreprise : </span>
                            </div>
                            <div class="card-action">
                            <a href="../controllers/controller-allUsers.php">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript for Materialize CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var transportLabels = <?= json_encode(array_column($transportStats, 'transport_type')) ?>;
        var transportData = <?= json_encode(array_column($transportStats, 'count')) ?>;

        var ctx = document.getElementById('transportChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: transportLabels,
                datasets: [{
                    data: transportData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)', // Couleur pour le premier élément
                        'rgba(54, 162, 235, 0.7)', // Couleur pour le deuxième élément
                        'rgba(255, 206, 86, 0.7)', // Couleur pour le troisième élément
                        'rgba(75, 192, 192, 0.7)', // Couleur pour le quatrième élément
                        'rgba(153, 102, 255, 0.7)' // Couleur pour le cinquième élément

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)', // Couleur pour le premier élément
                        'rgba(54, 162, 235, 1)', // Couleur pour le deuxième élément
                        'rgba(255, 206, 86, 1)', // Couleur pour le troisième élément
                        'rgba(75, 192, 192, 1)', // Couleur pour le quatrième élément
                        'rgba(153, 102, 255, 1)' // Couleur pour le cinquième élément
                    ],
                    borderWidth: 1
                }]
            },
        });
    </script>
</body>

</html>