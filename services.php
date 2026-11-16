<?php
include "inc/infos.php";

// Les tarifs hors taxes et le taux de TVA, écrits une seule fois
$essentiel = 60;
$serenite = 150;
$premium = 290;
$tva = 20;
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
      <h1>Nos services</h1>
      <p>Nous offrons une gamme complète de services pour répondre à vos besoins. Que vous soyez un particulier ou une entreprise, nous pouvons vous aider à atteindre vos objectifs.</p>
      <table width="100%" border="1">
        <tr class="gris"> <th width="25%" valign=top>Formule</th>
        <th width="50%" valign=top>Ce qui est compris</th>
        <th width="25%" valign=top>Tarif HT</th>
        <th width="25%" valign=top>Tarif TTC</th>
      </tr> 
      <tr>
        <td>Essentiel</td>
        <td>Intervention à la demande, prix de l'heure</td>
        <td><?php echo $essentiel; ?> euros</td>
        <td><?php echo $essentiel * (100 + $tva) / 100; ?> euros</td>
      </tr>
      <tr>
        <td>Sérénité</td>
        <td>Maintenance et sauvegarde</td>
        <td><?php echo $serenite; ?> euros</td>
        <td><?php echo $serenite * (100 + $tva) / 100; ?> euros</td>
      </tr>
      <tr>
        <td>Premium</td>
        <td>Tout compris, assistance illimitée</td>
        <td><?php echo $premium; ?> euros</td>
        <td><?php echo $premium * (100 + $tva) / 100; ?> euros</td>
      </tr>
    </table>
    <p> TVA au taux de 20%</p>
    <?php include "inc/pied.php"; ?>