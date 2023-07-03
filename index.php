<?php
// index.php
require_once("UserController.php");

// Création d'une instance du contrôleur User
$userController = new UserController();

// Appel de la méthode appropriée en fonction de l'action demandée
$action = $_GET["action"] ?? "login";

switch ($action) {
    case "login":
        $userController->login();
        break;
    // Ajoutez d'autres cas pour gérer d'autres actions si nécessaire

    default:
        // Gérer les actions non prises en charge
        break;
}
?>