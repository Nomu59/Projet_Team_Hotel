<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style2.css">
    <title>Réservation de chambre</title>
</head>

<body>
    <?php
    session_start();
    $nbJour = $_SESSION['nbJour'];

    if (isset($_GET['cat'])) {
        $categorie = $_GET['cat'];
    } else {
        $categorie = $_SESSION['$categorie'];
    }

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
                    echo "<p>Chambre numéro " . $chambre[$i]["num_Chamb"] . "</p>" .
                        "<p>Le prix est de : " . ($chambre[$i]["prix"]*$nbJour) . "</p>";
                    echo "<br>";

                    echo "<a href='../C/ajoutReservation.ctrl.php?num_Chamb=" . $chambre[$i]["num_Chamb"] . "'>Réserver</a>";
                    echo "<br>";
                    echo "<br>";
                }
            }
            echo "<hr>";
        } else {
            echo '<div class="retour"><a href="index.php">&lt; Retour</a></div>';
            echo '<div class="success">La chambre numéro ' . $_SESSION['num_Chamb'] . ' a été réservée avec succès.</div>';
        }
        ?>
    </div>

    </form>
</body>

</html>