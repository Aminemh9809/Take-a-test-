 <?php
    require_once '../models/dashboard.php';
    require_once '../models/users.php';
    session_start();
    if (isset($_SESSION['user'])) {
        $enterpriseId = $_SESSION['user']['enterprise_id'];
        $transportStats = json_decode(Rides::getTransportStats($enterpriseId));
        // Zone A : Total de Users
        $userCount = Dashboard::userCount($enterpriseId)['user_count'];

        // Zone B : Total de Users Actifs
        $userActive = Dashboard::userActive($enterpriseId)['user_count'];

        // Zone C : Total de Trajets
        $rideCount = Dashboard::rideCount($enterpriseId)['rideCount'];

        // Zone D : Les 5 derniers utilisateurs avec comme infos : 
        // Image Profil
        // Pseudo
        // $lastUsers = Dashboard::lastUsers($enterpriseId)['user_pseudo'];

        // Zone G : Les 5 derniers trajets d'enregistrés
        // $lastRideAdded = Dashboard::lastRideAdded($enterpriseId);
        $enterprise = users::signIn(($_SESSION['user']['enterprise_email']));
    } else {
        header('Location: controller-signin.php');
    }






    include_once '../views/view-dashboard.php';

    ?>