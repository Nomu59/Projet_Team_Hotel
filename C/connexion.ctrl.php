<?php
require_once '../M/DBManager.class.php';

if (isset($_POST["password"]) && (isset($_POST["uname"])))
{
//saisie des données
$password=$_POST["password"];
$uname=$_POST["uname"];

$bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");

// Appel de la fonction "connexion" avec des identifiants spécifiques

$resultat = $bdd->connexion($uname, $password);

// Utilisation du résultat
if ($resultat)  {
  
    // Faites ce que vous voulez avec les données récupérées
    echo "Connexion réussie pour l'utilisateur : $uname";
    header("Location: ../V/index.html");
} else  {
    header("Location: ../V/Authentification.ctrl.html");
    // Une erreur s'est produite lors de l'exécution de la requête SQL
   
}

}
