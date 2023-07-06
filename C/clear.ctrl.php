<?php
include_once "./M/DBManager.class.php";
include_once "../M/DBManager.class.php";
$bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");

$bdd->clearTable();
$bdd->testInsert();

header("Location: ../V/index.php");
