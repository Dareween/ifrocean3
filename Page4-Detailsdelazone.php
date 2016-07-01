<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<link rel="stylesheet" type="text/css" href="projetifrocean.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<body>
<div class="bandeau1">Projet Ifrocean</div>
<h1 class="bandeau2">Détails de la zone</h1>
<table border="1">
  <tr>
    <td>Noms des espèces</td>
    <td>Nombre total</td>
    <td>Choisissez</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button class="buttonValider">Valider</button>
      <button class="buttonModifier">Modifier</button>
      <button class="buttonSupprimer">Supprimer</button></td>
  </tr>
  <tr></tr>
  <tr></tr>
</table>
<br>
<button class="buttonValider">Valider et retour au tableau général</button>



<h1>Liste des triangles</h1>
        <table class="table">
            <tr>
                <th>Noms des espèces</th>
                <th>Nombre d'individus</th>
                <th>Valider</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
            <?php $zones=zone::getAllZones();
            foreach ($zones as $zone){
            ?>
            <tr>
                <td>Zone<?php SELECT nom_zone FROM zone;?></td>
                
                <td>Noms des espèces</td>
                <td>individus</td>
                <td>m2</td>
         
                <td><a href="10-VoirTriangle.php?id=<?php echo $tri->id ?>">Valider</a></td>
                <td><a href="10-ModifierTriangle.php?id=<?php echo $tri->id ?>">Modifier</a></td>
                <td><a href="10-SupprimerTriangle.php?id=<?php echo $tri->id ?>">Supprimer</a></td>
            </tr> 
            
              <?php  
            }
                ?>
        </table>

</body>
</html>