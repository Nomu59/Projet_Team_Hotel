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
    $nbPersonne = $_POST["nbPersonne"];
    $classe = $_POST["classe"];

    if ($arrivee > $depart) {
        header("Location: index.php?error=Les dates sélectionnées sont invalides");
    }
    ?>

    <p>Entrez vos informations bancaires</p>
</body>
</html>