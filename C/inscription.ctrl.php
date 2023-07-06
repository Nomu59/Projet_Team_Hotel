<?php
include_once "../M/DBManager.class.php";

session_start();

$bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");

$_SESSION['inscription'][0] = $_POST["id"];
$pass = $_POST["password"];
$count = count($bdd->selectListeClient());

// $_SESSION['inscription'][1] = $pass;
$_SESSION['inscription'][1] = password_hash($pass, PASSWORD_DEFAULT);
$_SESSION['inscription'][2] = $_POST["prenom"];
$_SESSION['inscription'][3] = $_POST["adress"];
$_SESSION['inscription'][4] = $_POST["tel"];
$_SESSION['inscription'][5] = $_POST["nationalite"];
$_SESSION['inscription'][6] = $_POST["numpass"];


$bdd->insertClient(
    $_SESSION['inscription'][2],
    $_SESSION['inscription'][3],
    $_SESSION['inscription'][4],
    $_SESSION['inscription'][5],
    $_SESSION['inscription'][6]
);
$bdd->insertUtilisateur(
    $_SESSION['inscription'][0],
    $_SESSION['inscription'][1]
);
// header("Location: ../V/afficherChambre.php");
header("Location: ../V/index.php");
