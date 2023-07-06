<?php

include_once "../M/DBManager.class.php";

session_start();

$bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");

$_SESSION['id'] = null;
$_SESSION['pass'] = null;



switch (true) {
    case empty($_POST["id"]):
        header("Location: ../V/connexion.php?error=Identifiant requis");
        exit;
        break;

    case empty($_POST["password"]):
        header("Location: ../V/connexion.php?error=Mot de passe requis");
        exit;
        break;

    case empty($_POST["password"]) || empty($_POST["id"]):
        header("Location: ../V/connexion.php?error=Identifiant et mot de passe requis");
        exit;
        break;

    default:
        $_SESSION['id'] = $_POST["id"];
        $_SESSION['pass'] = $_POST["password"];

        break;
}

$result = $bdd->hashConnexion($_SESSION['id'], $_SESSION['pass']);

if (!$result) {
    $_SESSION['connecté'] = 0;
    header("Location: ../V/connexion.php?error=Identifiant ou mot de passe incorrect");
} else {
    $_SESSION['connecté'] = 1;
    header("Location: ../V/index.php");
}
