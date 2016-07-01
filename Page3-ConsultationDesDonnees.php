<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!--<link rel="stylesheet" type="text/css" href="projetifrocean.css">-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="projetifrocean.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<title>Page 2 - Consultation des Données</title>
</head>
<body>
<div class="container">
<div class="row">
<header>
 <div class="bandeau1">Projet Ifrocean - chercheur</div>
  <h1 class="bandeau2">Consultation des données</h1>
</header>

<div class="section">
  <h2>Plage / Commune / Département</h2>
  <form method="post" action="">
    <p>
      <select name="menu_destination">
        <option value="">plage A</option>
        <option value="">plage B</option>
        <option value="">plage C</option>
        <option value="">plage D</option>
      </select>
      <input type="submit" value="Valider" title="valider pour aller à la page sélectionnée" /></p>
  </form>
</div>
<div class="section">
  <div class="sectionGauche">
    <form method="post" action="09-post.php">
     <h2>Caractéristiques de la plage</h2>
      <h3>Superficie de l'estran</h3>
      <input type="text">
    </form>
  </div>
  <div class="sectionDroite">
    <form method="post" action="09-post.php">
      <h3>Nombre total d'espèces différentes</h3>
      <input type="text">
    </form>
  </div>
  <br>
  </div>
<br>

<table border="1">
  <tr>
    <td>Noms des espèces</td>
    <td>Estimation du nombre d'individus total</td>
    <td>Estimation de la densité au m2</td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  </table>
  <br>
  <div class="section">
  <form method="post" action="Page4-Detailsdelazone.html">
    <p>
      <select name="menu_destination">
        <option value="">zone A</option>
        <option value="">zone B</option>
        <option value="">zone C</option>
        <option value="">zone D</option>
      </select>
      <input type="submit" value="Valider" title=""/>
    </p>
  </form>
  <form>
  <div class="form-group">
  <div class="section">
    <button type="submit" class="btn btn-default">Clôturer</button></div>
      <div class="section">
    <button type="submit" class="btn btn-default">Exporter en .xls</button></div>
     <div class="section">
    <button type="submit" class="btn btn-default">Exporter en .kml</button></div>
  </div>
  </form>
</div>
</div>
</div>
</body>
</html>
