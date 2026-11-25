<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <title>« TechSolutions : gestion des utilisateurs »</title>
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
<?php include "inc/menu.php"; ?>
<h1>Gestion des utilisateurs</h1>
<p>« Les comptes du personnel »</p>
<p>nombres de comptes : <?php echo count($utilisateurs); ?> </p>
<table>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Service</th>
        <th>Rôle</th>
      </tr>
      <?php foreach ($utilisateurs as $u) { ?>
      <tr>
        <td><?php echo $u["prenom"]; ?></td>
        <td><?php echo $u["nom"]; ?></td>
        <td><?php echo $u["service"]; ?></td>
        <td><?php echo $u["role"]; ?></td>
      </tr>
      <?php } ?>
      <a href=espace.php>Retour à mon espace</a>
    </table>
<?php include "inc/pied.php"; ?>
