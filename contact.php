<?php include "inc/infos.php"; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <title>Texte de l'onglet</title>
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
        <?php include "inc/menu.php"; ?>
      <p><h4>Une question ? Appelez-nous</p></h4>
      <p>Nos coordonnées</p>
      <p><strong>Téléphone :</strong> <?php echo $telephone; ?></p>
    <p><strong>Adresse :</strong> <?php echo $adresse; ?></p>
      <p>Nos horaires</p>
<table width="100%" border="1">
        <tr class="gris"> <th width="50%" valign=top>Jours</th>
        <th width="50%" valign=top>Horaires</th>
    </tr>
    <tr><td width="50%" valign=top>Du Lundi au Vendredi</td>
        <td width="50%" valign=top>8h30 - 18h00</td>
    </tr>
    <tr><td width="50%" valign=top>Samedi</td>
        <td width="50%" valign=top>9h00 - 12h00</td>
    </tr>
</table>
 <?php include "inc/pied.php"; ?>
</body>
</html>