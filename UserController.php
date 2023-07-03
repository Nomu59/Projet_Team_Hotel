
<?php

class UserController {
    // Méthode pour gérer la soumission du formulaire de connexion
    public function login() {
        // Vérification si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupération des données du formulaire
            $username = $_POST["uname"];
            $password = $_POST["password"];

            // Création d'une instance du modèle User
            $userModel =  new UserModel();

            // Appel de la méthode pour vérifier les informations de connexion
            $isValidLogin = $userModel->verifyLogin($username, $password);

            if ($isValidLogin) {
                // Les informations de connexion sont valides
                // Effectuer les actions nécessaires (par exemple, rediriger vers une page d'accueil)
                // ...
            } else {
                // Les informations de connexion sont invalides
                // Afficher un message d'erreur ou effectuer une action appropriée
                // ...
            }
        }
        // Affichage de la vue du formulaire de connexion view
        include("login.php");
    }
}







?>