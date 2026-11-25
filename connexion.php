<?php
include "inc/infos.php";
require "inc/bdd.php";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <title> TechSolutions : espace salariés </title>
     <link rel="stylesheet" href="css/Style.css"
   </head>
   <body>
     <?php include "inc/menu.php"; ?>
     <h1>Espace salariés</h1>
     <P>Connectez-vous avec votre identifiant</p>
<form action="verifier.php" method="post">
      <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label for="motdepasse">Mot de passe</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <button type="submit">Se connecter</button>
      </p>
    </form>
    <?php include "inc/pied.php"; ?>