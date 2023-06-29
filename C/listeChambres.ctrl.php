<?php 
include_once "../M/DBManager.class.php";

session_start();

$bdd = new DBManager('mysql:host=localhost;dbname=Hotel;charset=utf8mb4', 'root', "");
$_SESSION['$listeChambre'] = $bdd->selectListeChambre();
header("Location: ../V/afficherChambre.php");