<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>

<!-- Formulaire de pré remplissage pour la réservation -->
    <form action="reservation.php" method="post">
        <label for="arrivee">Arrivée</label>
        <input id="arrivee" name="arrivee" type="date" required/>

        <label for="depart">Départ</label>
        <input id="depart" name="depart" type="date" required/>

        <label for="nbPersonne">Nombre de personnes</label>
        <input id="nbPersonne" name="nbPersonne" type="text" required>

        <label for="Classe">Classe</label>
        <select name="classe" id="classe" required>
            <option value="default">--Choisissez votre classe</option>
            <option value="luxe">Luxe</option>
            <option value="superLuxe">Ultra luxe</option>
            <option value="ultraLuxe">Giga Luxe</option>
        </select>

        <!-- Bouton pour voir les chambres disponibles -->
        <a href="afficherChambre.php">Voir les chambres disponibles</a>

    </form>
</body>
</html>