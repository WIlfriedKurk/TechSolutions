<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$equipe = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <title>Texte de l'onglet</title>
     <link rel="stylesheet" href="css/Style.css"
   </head>
   <body>
     <?php include "inc/menu.php"; ?>
      <?php foreach ($equipe as $u) { ?>
      <ul>
        <li><?php echo $u["prenom"]; ?> <?php echo $u["nom"]; ?> - <?php echo $u["service"]; ?></li>
      </ul>
      <?php } ?>
       <?php include "inc/pied.php"; ?>