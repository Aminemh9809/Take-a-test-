<?php
require_once '../config/config.php';

class Users
{

    public static function create(string $enterpriseName, string $enterpriseEmail, string $enterpriseSiret, string $enterpriseAdress, string $enterpriseZipcode, string $enterpriseCity, string $enterprisePassword)
    {

        try {
            // Les informations de connexion à la base de données


            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "INSERT INTO `enterprise`(`enterprise_name`, `enterprise_email`, `enterprise_siret`, `enterprise_adress`, `enterprise_zipcode`, `enterprise_city`, `enterprise_password`) VALUES (:enterprise_name,:enterprise_email,:enterprise_siret,:enterprise_adress,:enterprise_zipcode,:enterprise_city,:enterprise_password)";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            $query->bindValue(':enterprise_name', htmlspecialchars($enterpriseName), PDO::PARAM_STR);
            $query->bindValue(':enterprise_email', htmlspecialchars($enterpriseEmail), PDO::PARAM_STR);
            $query->bindValue(':enterprise_siret', htmlspecialchars($enterpriseSiret), PDO::PARAM_STR);
            $query->bindValue(':enterprise_adress', htmlspecialchars($enterpriseAdress), PDO::PARAM_STR);
            $query->bindValue(':enterprise_zipcode', htmlspecialchars($enterpriseZipcode), PDO::PARAM_STR);
            $query->bindValue(':enterprise_city', htmlspecialchars($enterpriseCity), PDO::PARAM_STR);
            $query->bindValue(':enterprise_password', password_hash($enterprisePassword, PASSWORD_DEFAULT), PDO::PARAM_STR); // Utilisation de l'algorithme PASSWORD_DEFAULT

            // Exécution de la requête
            $query->execute();
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function signIn(string $enterpriseEmail)
    {
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * from enterprise WHERE enterprise_email = :enterpriseEmail ";
            $query = $db->prepare($sql);

            $query->bindValue(':enterpriseEmail', $enterpriseEmail,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public static function userCheckSiret(string $enterpriseSiret)
    {
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT enterprise_siret  from enterprise WHERE enterprise_siret = :enterpriseSiret";
            $query = $db->prepare($sql);

            $query->bindValue(':enterpriseSiret', $enterpriseSiret,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public static function userCheckEmail(string $enterpriseEmail)
    {
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT enterprise_email  from enterprise WHERE enterprise_email = :enterpriseEmail";
            $query = $db->prepare($sql);

            $query->bindValue(':enterpriseEmail', $enterpriseEmail,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public static function userCheckName(string $enterpriseName){
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT enterprise_name  from enterprise WHERE enterprise_name = :enterpriseName";
            $query = $db->prepare($sql);

            $query->bindValue(':enterpriseName', $enterpriseName,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    // function that used to recover all users from usserprofil
    public static function getAllusers(int $enterpriseId){
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM userprofil WHERE enterprise_id = :enterpriseId";
            $query = $db->prepare($sql);

            $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_INT);
            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public static function getOneuser(int $userId){
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM userprofil WHERE user_id = :userId";
            $query = $db->prepare($sql);

            $query->bindValue(':userId', $userId,  PDO::PARAM_INT);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return json_encode($result);
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
        // function that used to block user

    public static function blockUser(int $user_id) :bool{
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE userprofil SET user_validate = 0 where user_id =:userId";
            $query = $db->prepare($sql);

            $query->bindValue(':userId', $user_id,  PDO::PARAM_INT);
            $query->execute();

            return true;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    // function used to activate blocked users 
    public static function validateUser(int $user_id) :bool{
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "UPDATE `userprofil` SET `user_validate` = 1 where `user_id` =:userId";
            $query = $db->prepare($sql);

            $query->bindValue(':userId', $user_id,  PDO::PARAM_INT);
            $query->execute();

            return true;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
}

class Rides
{
    public static function getTransportStats(int $enterprise_id): string
    {
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT transport.transport_type, COUNT(*) as count, SUM(ride.ride_distance) as total_distance 
                FROM ride 
                INNER JOIN transport ON ride.transport_id = transport.transport_id
                INNER JOIN userprofil ON ride.user_id = userprofil.user_id
                WHERE userprofil.enterprise_id = :enterprise_id
                GROUP BY transport.transport_type";
            $query = $db->prepare($sql);
            $query->bindValue(':enterprise_id', $enterprise_id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);


            return json_encode($result);
        } catch (PDOException $e) {

            return json_encode(array('error' => 'Erreur lors de la récupération des statistiques des moyens de transport : ' . $e->getMessage()));
        }
    }
}
