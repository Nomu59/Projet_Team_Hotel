<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Kavoon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krona+One&display=swap">
    <link rel="shortscut icon" href="Images/Akatsuki.png">
    <title>Connexion</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="connexion.php" class="logo2">
                    <img src="Images/Logo_TeamHotel.png" alt="logo Team Hotel">
                </a>
            </div>
        </nav>
    </header>
    <div class="Connexion">
        <form action="../C/connexion.ctrl.php" method="post">

            <h2>Connexion</h2>
            <div class="connexion2">
            <input type="text" name="id" id="id" placeholder="Nom d'utilisateur">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            </div>
            <button type="submit" class="BtnValider">Valider</button>
            <a class="BtnInscription" href="inscription.php">Inscription</a>
    </div>
    <h3> ou choisissez l'une de ces options</h3>

    <div class="icons">

        <img src="Images/Apple.png" alt="logo apple">
        </a>
        <a href="https://www.facebook.com" class="BtnIcons">
            <img src="Images/Facebook.svg.png" alt="logo facebook">
        </a>
        <a href="https://www.google.com" class="BtnIcons">
            <img src="Images/Google.svg.png" alt="logo google">
        </a>
    </div>
    </form>
</body>

</html>