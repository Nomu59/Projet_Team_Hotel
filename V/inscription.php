<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Kavoon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krona+One&display=swap">
    <link rel="shortscut icon" href="Images/Akatsuki.png">
    <title>Inscription</title>
</head>

<body class="inscription-page">
<header>
        <nav>
            <div class="logo">
                <a href="index.html" class="logo2">
                    <img src="Images/Logo_TeamHotel.png" alt="logo Team Hotel">
                </a>
            </div>
            <a class="BtnDeco" href="connexion.php"> Connexion </a>
        </nav>
    </header>
  <div class="form-container">
    <?php
    session_start();
    if (isset($_GET['error'])) { ?>
      <p><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <p class="title">Inscription</p>
    <div class="formulaire">
    <form action="../C/inscription.ctrl.php" method="post" class="form">
      <div class="input-group">
        <input type="text" name="id" id="id" placeholder="Nom d'utilisateur" required />
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Mot de passe" required />
      </div>
      <div class="input-group">
        <input type="text" name="nom" id="nom" placeholder="Nom" required />
      </div>
      <div class="input-group">
        <input type="text" name="prenom" id="prenom" placeholder="Prenom" required />
      </div>
      <div class="input-group">
        <input type="email" name="mail" id="mail" placeholder="Adresse mail" required />
      </div>
      <div class="input-group">
        <input type="tel" name="tel" id="tel" placeholder="Numero de téléphone" required />
      </div>
      <div class="input-group">
      <input type="text" name="adress" id="adress" placeholder="Adresse" required />
      <div class="input-group">
      </div>
        <input type="text" name="nationalite" id="nationalite" placeholder="Nationalité" required />
      </div>
      <div class="input-group">
        <input type="text" name="numpass" id="numpass" placeholder="Numéro de passeport" required />
      </div>
    </div>
      <div class="sign">
      <button class="sign2">Inscription</button>
      </div>
    </form>
    <div class="social-message">
      <div class="line"></div>
      <p class="message">S'inscrire avec l'une de ces options</p>
      <div class="line"></div>
    </div>
    <div class="icons">
      <a href="https://www.apple.com"class="BtnIcons">
        <img src="Images/Apple.png" alt="logo apple">
      </a>
      <a href="https://www.facebook.com"class="BtnIcons">
        <img src="Images/Facebook.svg.png" alt="logo facebook">
        </a>
        <a href="https://www.google.com"class="BtnIcons">
        <img src="Images/Google.svg.png" alt="logo google">
        </a>
    </div>
    <p class="signup">
      Déjà inscrit ?
      <a hr rel="noopener noreferrer" href="connexion.php" class="">Se connecter</a>
    </p>
  </div>
</body>

</html>