<?php
include_once ("utils.class.php");
$logo= Utils::select_logo();
if (isset($_GET['resultas'])) {
    $resultas=$_GET['resultas'];
  switch ($resultas) {
    case "no":
          echo "<script>alert('Votre Compte Non Crée');</script>";
        break;
    case "ok":
          echo "<script>alert('Votre Compte Bien Crée .Pouvez-Vous se Connecter Maintenant.');</script>";
        break;
    
  }
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Location de Voiture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Couleur de fond */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 100px auto;
            /* background-color: #f85940cc; */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.653);
            display: flex; /* Utilisation de Flexbox pour diviser en deux parties */
            align-items: center; /* Centrer verticalement */
            justify-content: space-between; /* Espace équitablement les éléments */
        }
        .logo {
            height: 100%;
            flex: 0 0 40%;
            background-color: #008374; /* Prend 40% de l'espace */
        }
        .content {
            flex: 0 0 55%; /* Prend 55% de l'espace */
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        h1, h2 {
            color: #008374; /* Couleur du texte */
        }
        form {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333; /* Couleur du texte */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #008374; /* Couleur du bouton */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #00574f; /* Couleur du bouton au survol */
        }
        .footer {
            text-align: center;
        }
        p {
            margin: 0;
        }
        a {
            color: #008374; /* Couleur du lien */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .logo img{
            width: 80%;
            height: 200px;
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/img/logo/<?=$logo['logo']?>" alt="Logo">
        </div>
        <div class="content">
            <div class="header">
                <h1>BIENVENUE CHEZ ZAKARIA LOCATION</h1>
                <!-- <h2>RETOUR !</h2> -->
            </div>
            <form action="connecter.php" method="post">
                <div class="form-group">
                    <label for="username">Login</label>
                    <input type="text" id="username" name="login" placeholder="Entrez votre login">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
                </div>
                <button type="submit">Se connecter</button>
            </form>
            <div class="footer">
                <p>Pas encore de compte ? <a href="inscrire.php">Inscrivez-vous</a></p>
            </div>
        </div>
    </div>
</body>
</html>
