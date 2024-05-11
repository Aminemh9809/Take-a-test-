<?php
require_once '../config/config.php';

class Dashboard
{
    public static function userCount(string $enterpriseId){
        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT COUNT(user_name) as user_count, enterprise_id from userprofil natural join enterprise where enterprise_id = :enterpriseId;";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête

            $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function userActive(string $enterpriseId){
        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT COUNT(user_name) as user_count, enterprise_id from userprofil 
            natural join enterprise
            INNER JOIN ride on ride.user_id = userprofil.user_id
            where enterprise_id = :enterpriseId";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête

            $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function rideCount(string $enterpriseId){
        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT
            COUNT(ride_id) AS rideCount
        FROM ride
        NATURAL JOIN enterprise WHERE enterprise_id = :enterpriseId;";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête

            $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function lastUsers(string $enterpriseId){
        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT user_email , user_describ, user_photo , user_pseudo FROM userprofil WHERE enterprise_id = :enterpriseId ORDER BY user_id DESC LIMIT 5";


            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête

            $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function lastRideAdded(string $enterpriseId){
        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT
            * from ride
            
        NATURAL JOIN enterprise WHERE enterprise_id = :enterpriseId order by ride_date DESC limit  5 ;";


            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête

            $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function pictureChange(string $userId, string $PhotoId){
        try {
            // Les informations de connexion à la base de données
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "UPDATE userprofil
            SET user_photo = :newPhoto
            WHERE user_id = :userId
            AND enterprise_id = (
                SELECT enterprise_id
                FROM enterprise
                WHERE userprofil.enterprise_id = enterprise.enterprise_id)";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête

            $query->bindValue(':userId', $userId,  PDO::PARAM_STR);
            $query->bindValue(':newPhoto', $PhotoId,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }

}
