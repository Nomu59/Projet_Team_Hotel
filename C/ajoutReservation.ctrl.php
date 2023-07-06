<?php
include_once "../M/DBManager.class.php";

session_start();
$id = $_SESSION['id'];
$bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");
$arrivee = $_POST["arrivee"];
$depart = $_POST["depart"];

$arrivee2 = strtotime($_POST['arrivee']);
$depart2 = strtotime($_POST['depart']);
$diff = $depart2 - $arrivee2;
$_SESSION['nbJour'] = $diff / 86400;


// Condition vérifiant que les dates entrées précédemment sont valides
if ($arrivee > $depart) {
    header("Location: index.php?error=Les dates sélectionnées sont invalides");
}

if (!isset($_GET['num_Chamb'])) {
    if ($_SESSION['connecté'] === 1) {
        $_SESSION['checkReservation'] = 0;

        $date1 = $_POST['arrivee'];
        $date2 = $_POST['depart'];

        $_SESSION['arrivee'] = date('Y-m-d', strtotime($date1));
        $_SESSION['depart'] = date('Y-m-d', strtotime($date2));

        $_SESSION['$listeChambre'] = $bdd->selectListeChambre(1);


        if (isset($_POST["classe"])) {
            $categorie = $_POST["classe"];
            $_SESSION['$categorie'] = $categorie;
            header("Location: ../V/reservation.php");
            exit();
            echo $_POST["arrivee"] . $_POST["depart"];
        } else if (isset($_GET['cat'])) {
            $_SESSION['$categorie'] = $_GET['cat'];
        }
    } else {
        header("Location: ../V/connexion.php?error=Tu dois être connecté pour effectuer ceci");
        exit();
    }
} else {
    $numChamb = $_GET['num_Chamb'];
    $_SESSION['num_Chamb'] = $numChamb;
    $codeClient = $bdd->getCodeUtilisateur($_SESSION['id']);
    $bdd->insertReservation(date('Y-m-d'), $numChamb, $_SESSION['arrivee'], $_SESSION['depart'], $codeClient);
    $_SESSION['checkReservation'] = 1;
    header("Location: ../V/reservation.php");
}
