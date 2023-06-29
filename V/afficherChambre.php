<?php 
// include_once "../M/DBManager.class.php";

session_start();
echo "Il y a ".count($_SESSION['$listeChambre'])." Chambres";