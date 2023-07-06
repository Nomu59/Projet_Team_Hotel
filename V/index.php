<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Kavoon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krona+One&display=swap">
    <link rel="shortscut icon" href="Images/Akatsuki.png">
    <title>Team Hôtel</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html" class="logo2">
                    <img src="Images/Logo_TeamHotel.png" alt="logo Team Hotel">
                </a>
            </div>
            <?php
            session_start();
            if (isset($_SESSION['connecté']) && $_SESSION['connecté'] == 1) {
                echo 'Bonjour ' . $_SESSION['id'];
                echo '<a class="BtnDeco" href="../C/deconnexion.ctrl.php">Déconnexion</a>';
            } else {
                echo '<a class="BtnDeco" href="connexion.php">Connexion</a><br>';
                echo '<a class="BtnInscri" href="inscription.php">Inscription</a>';
            }
            ?>
        </nav>
    </header>

    <form action="../C/ajoutReservation.ctrl.php" method="post">
        <div class="form1">

            <label for="arrivee">Arrivée :</label>
            <input id="arrivee" name="arrivee" type="date" value="<?php echo date('Y-m-d'); ?>" required />

            <label for="depart">Départ :</label>
            <input id="depart" name="depart" type="date" value="<?php echo date('Y-m-d'); ?>" required />

            <input id="nbPersonne" name="nbPersonne" type="text" placeholder="Nb de voyageurs" required>

            <label for="Classe">Classe :</label>
            <select name="classe" id="classe" required>
                <option value="default">--Choisissez votre classe</option>
                <option value="3">Luxe</option>
                <option value="2">Ultra luxe</option>
                <option value="1">Giga Luxe</option>
            </select>

            <!-- Bouton pour voir les chambres disponibles -->
            <button type="submit" class="BtnRecherche">Rechercher</button>

        </div>
    </form>


    <div class="pub">
        <img class="pub2" src="Images/ChambrePub.jpg" alt="Pub">
        <div class="pub3">
            <h2>Profitez jusqu’a 15% de reduction grâce a votre cagnotte</h2>
            <div class="center-btn">
                <a class="BtnReserver" href="afficherChambres.php">Reserver ici</a>
            </div>
        </div>
    </div>

</body>

</html>