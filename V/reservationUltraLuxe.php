<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
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
                <a href="../Page/index.php" class="logo2">
                    <img src="../Images/Logo_TeamHotel.png" alt="logo Team Hotel">
                </a>
            </div>
            <a class="BtnDeco" href="connexion.php"> Déconnexion </a>
        </nav>
    </header>
    <div class="chambre">
    <img src="../Images/ChambreUltraLuxe.jpg" alt="Chambre">
    <div class="ReservText">
    <p>Voici votre réservation</p>
    <p>1079€</p>

    <ul>
        <li>1 chambre</li>
        <li>1 salon privé</li>
        <li>Salle de bain privative</li>
        <li>WI-FI</li>
        <li>Vue remarquable</li>
        <li>Déco Design</li>
        <li>1 lit Queen Size</li>
    </ul>

        <a href=""> Confirmer </a>
        </div>
    </div>
    <div class="option">
        <p class="nomOption">Option piscine + SPA</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 50€ </p>
        <p class="nomOption"> Accès illimité a la piscine + 1 massage </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div>
    <div class="option">
        <p class="nomOption">Accès club lounge</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 50€ </p>
        <p class="nomOption"> Accès de 19h à 00h </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div>
    <div class="option">
        <p class="nomOption">Accès rooftop</p>
		<span class="vertical-line"></span>
		<p class="prix"> + 30€ </p>
        <p class="nomOption"> Accès de 13h à 00h </p>
        <a class="BtnAjout" href="">Ajouter</a>
    </div>
    </body>
</html>