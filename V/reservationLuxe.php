<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style2.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Kavoon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krona+One&display=swap">
    <link rel="shortscut icon" href="/Images/Akatsuki.png">
    <title>Réservation</title>
</head>
<body>
    <!-- Récupération des valeurs indiquées sur la page précédente -->
    <?php
        $arrivee = $_POST["arrivee"];
        $depart = $_POST["depart"];

        // Condition vérifiant que les dates entrées précédemment sont valides
        if ($arrivee > $depart) {
            header("Location: index.php?error=Les dates sélectionnées sont invalides");
        }
    ?>
    <header>
        <nav>
            <div class="logo">
                <a href="/Page/index.php" class="logo2">
                    <img src="../Images/Logo_TeamHotel.png" alt="logo Team Hotel">
                </a>
            </div>
            <a class="BtnDeco" href="connexion.php"> Déconnexion </a>
        </nav>
    </header>
    <div class="chambre">
    <!-- <img src="/Images/ChambreAnnonce.jpg" alt="Chambre"> -->
    <div class="ReservText">
    <!-- <p>Voici votre réservation</p>
    <p>579€</p>

    <ul>
        <li>2 nuits</li>
        <li>1 chambre</li>
        <li>2 lits simple</li>
        <li>Salle de bain privative</li>
        <li>WI-FI</li>
        <li>Sans petit déjeuner</li>
    </ul>

        <a href=""> Confirmer </a>
        </div>
    </div> -->
    <!-- <div class="option">
        <p class="nomOption">Avec petit déjeuner</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 30€ </p>
        <p class="nomOption"> Buffet a volonté de 07h à 10h </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div>
    <div class="option">
        <p class="nomOption">Option piscine + SPA</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 200€ </p>
        <p class="nomOption"> Accès illimité a la piscine + 1 massage </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div>
    <div class="option">
        <p class="nomOption">Accès club lounge</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 100€ </p>
        <p class="nomOption"> Accès de 19h à 00h </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div>
    <div class="option">
        <p class="nomOption">Accès rooftop</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 150€ </p>
        <p class="nomOption"> Accès de 13h à 00h </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div> -->
    <?php
        session_start();

        $categorie = $_SESSION['$categorie'];
        $chambre = $_SESSION['$listeChambre'];
        $count = count($chambre);

        shuffle($chambre);
    ?>

    <div class="chambre">

    <?php
        if (!$_SESSION['checkReservation']) {
            echo '<div class="retour"><a href="index.php">&lt; Retour</a></div>';
            echo "<h2>Les chambres disponibles :</h2>";
            echo "<br>";
            for ($i = 0; $i < $count; $i++) {
                if ($chambre[$i]["code_Categorie"] == $categorie) {
                    echo "<hr>";
                    echo "<p>Chambre numéro " . $chambre[$i]["num_Chamb"] . "</p>".
                        "<p>Le prix est de : " . $chambre[$i]["prix"] . "</p>";
                    echo "<br>";

                    echo "<a href='../C/ajoutReservation.ctrl.php?num_Chamb=" . $chambre[$i]["num_Chamb"] . "'>Réserver</a>";
                }
            }
            echo "<hr>";
        } else {
            echo '<div class="retour"><a href="index.php">&lt; Retour</a></div>';
            echo '<div class="success">La chambre numéro ' . $_SESSION['num_Chamb'] . ' a été réservée avec succès.</div>';
        }
    ?>
    </div>
</body>
</html>