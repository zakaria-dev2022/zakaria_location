<?php
if (isset($_GET['resultas'])) {
    $resultas=$_GET['resultas'];
  switch ($resultas) {
    case "no":
          echo "<script>alert('Votre Compte Non Crée.Verifier Votre Donner');</script>";
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
    <title>Inscription - Location de Voiture</title>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Inscription</h1>
        </div>
        <form action="inscription.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Nom</label>
                <input type="text" id="username" name="nom" placeholder="Entrez votre Nom">
            </div>
            <div class="form-group">
                <label for="username">prenom</label>
                <input type="text" id="username" name="prenom" placeholder="Entrez votre Prenom">
            </div>
            <div class="form-group">
                <label for="username">Cin</label>
                <input type="text" id="username" name="cin" placeholder="Entrez votre N°CIN">
            </div>
            <div class="form-group">
                <label for="username">Permis</label>
                <input type="text" id="username" name="permis" placeholder="Entrez votre N°Permis de conduire">
            </div>
            <div class="form-group">
                <label for="username">Tel</label>
                <input type="text" id="username" name="tel" placeholder="Entrez votre N°Tel">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Entrez votre adresse Email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="mp" placeholder="Entrez votre mot de passe">
            </div>
            <div class="form-group">
                <label for="password">Confirmer Mot de passe</label>
                <input type="password" id="password" name="cmp" placeholder="Confirmer votre mot de passe">
            </div>
            <div class="form-group">
                <label for="">Photo Cin</label>
                <input type="file" id="password" name="ph_cin" placeholder="Entrez votre Photo  cin">
            </div>
            <button type="submit" >S'inscrire</button>
        </form>
        <div class="footer">
            <p>Déjà Avez-vous un compte ? <a href="index.php">Connectez-vous</a></p>
        </div>
    </div>
</body>
</html>
