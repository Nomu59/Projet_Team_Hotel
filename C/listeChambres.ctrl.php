<?php
include_once "../M/DBManager.class.php";

session_start();
if ($_SESSION['connecté'] === 1) {

    $bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");
    $_SESSION['$listeChambre'] = $bdd->selectListeChambre(1);

    header("Location: ../V/afficherChambre.php");
} else {
    header("Location: ../V/connexion.php");
}
