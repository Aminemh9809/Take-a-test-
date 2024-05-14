<?php
require_once '../config/config.php';

class Users
{

    public static function create(string $name, string $email, string $password)
    {

        try {
            // Les informations de connexion à la base de données


            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:name,:email,:password)";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            $query->bindValue(':name', htmlspecialchars($name), PDO::PARAM_STR);
            $query->bindValue(':email', htmlspecialchars($email), PDO::PARAM_STR);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
            
            // Exécution de la requête
            $query->execute();
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    public static function signIn(string $email)
    {
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * from users WHERE email = :email";
            $query = $db->prepare($sql);

            $query->bindValue(':email', $email,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public static function userCheckEmail(string $email){
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT email from users WHERE email = :email";
            $query = $db->prepare($sql);

            $query->bindValue(':email', $email,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    public static function userCheckName(string $name){
        try {
            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT name  from users WHERE name = :userName";
            $query = $db->prepare($sql);

            $query->bindValue(':userName', $name,  PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
//     // function that used to recover all users from usserprofil
//     public static function getAllusers(int $enterpriseId){
//         try {
//             // Création de l'objet PDO pour la connexion à la base de données
//             $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
//             // Paramétrage des erreurs PDO pour les afficher en cas de problème
//             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//             $sql = "SELECT * FROM userprofil WHERE enterprise_id = :enterpriseId";
//             $query = $db->prepare($sql);

//             $query->bindValue(':enterpriseId', $enterpriseId,  PDO::PARAM_INT);
//             $query->execute();

//             $result = $query->fetchAll(PDO::FETCH_ASSOC);
//             return json_encode($result);
//         } catch (PDOException $e) {
//             echo "An error occurred: " . $e->getMessage();
//         }
//     }
//     public static function getOneuser(int $userId){
//         try {
//             // Création de l'objet PDO pour la connexion à la base de données
//             $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
//             // Paramétrage des erreurs PDO pour les afficher en cas de problème
//             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//             $sql = "SELECT * FROM userprofil WHERE user_id = :userId";
//             $query = $db->prepare($sql);

//             $query->bindValue(':userId', $userId,  PDO::PARAM_INT);
//             $query->execute();

//             $result = $query->fetch(PDO::FETCH_ASSOC);
//             return json_encode($result);
//         } catch (PDOException $e) {
//             echo "An error occurred: " . $e->getMessage();
//         }
//     }
//         // function that used to block user

//     public static function blockUser(int $user_id) :bool{
//         try {
//             // Création de l'objet PDO pour la connexion à la base de données
//             $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
//             // Paramétrage des erreurs PDO pour les afficher en cas de problème
//             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//             $sql = "UPDATE userprofil SET user_validate = 0 where user_id =:userId";
//             $query = $db->prepare($sql);

//             $query->bindValue(':userId', $user_id,  PDO::PARAM_INT);
//             $query->execute();

//             return true;
//         } catch (PDOException $e) {
//             echo "An error occurred: " . $e->getMessage();
//         }
//     }
//     // function used to activate blocked users 
//     public static function validateUser(int $user_id) :bool{
//         try {
//             // Création de l'objet PDO pour la connexion à la base de données
//             $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
//             // Paramétrage des erreurs PDO pour les afficher en cas de problème
//             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
//             $sql = "UPDATE `userprofil` SET `user_validate` = 1 where `user_id` =:userId";
//             $query = $db->prepare($sql);

//             $query->bindValue(':userId', $user_id,  PDO::PARAM_INT);
//             $query->execute();

//             return true;
//         } catch (PDOException $e) {
//             echo "An error occurred: " . $e->getMessage();
//         }
//     }

}
