<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de chambre</title>
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

    <!-- Formulaire d'informations supplémentaire afin de finaliser la réservation -->
    <form action="../Controller/ajoutReservation.ctrl.php" method="post">
        <label for="emplacement">Emplacement</label>
        <select name="emplacement" id="emplacement" required>
            <option value="default">--Choisissez votre Emplacement</option>
            <option value="north">Vue nord</option>
            <option value="south">Vue sud</option>
            <option value="west">Vue ouest</option>
            <option value="east">Vue est</option>
        </select>
        <p>Entrez vos informations bancaires</p>
        <label for="cbNumber">Numéro de carte bancaire</label>
        <input type="number" id="cbNumber" name="cbNumber" required/>

        <label for="expiration">Date d'expiration</label>
        <input type="month" id="expiration" name="expiration" required />

        <label for="cv">Cryptogramme visuel</label>
        <input type="number" id="cv" name="cv" required/>

        <input type="submit" id="valider" name="valider">
    </form>

    

</body>
</html>