<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page Préleveur Etape 1</title>
<!--<link rel="stylesheet" type="text/css" href="projetifrocean.css">-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="projetifrocean.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="projetifrocean.css">
</head>
<body>
<div class="container">
<div class="row">
<header>
<div class="bandeau1">Projet Ifrocean - Préleveur</div>
<ol class="breadcrumb">
                  <li><a href="Accueil.html">Accueil</a></li>
                  <li><a href="index.html">Choix de la plage</a></li>
				</ol>
  <h1 class="bandeau2">Étape 1  : Choix de la plage ou de la zone</h1>
  </header>
<div class="section">
  <h3>Choisissez la plage</h3>
    <form method="post" action="">
      <p>
        <select name="menu_destination">
          <option value="">plage A</option>
          <option value="">plage B</option>
          <option value="">plage C</option>
          <option value="">plage C</option>
        </select>
        <input type="submit" value="Valider" title="valider pour aller à la page sélectionnée" />
      </p>
    </form>
</div>
<div class="section">
  <div>
    <form method="post" action="09-post.php">
      <h3>Créez une zone :</h3>
        <input type="text">
        <input type="submit" value="valider">
    </form>
  </div>
</div>
<div class="section">
  <h3>Modifier une zone</h3>
    <form method="post" action="">
      <p>
        <select name="menu_destination">
          <option value="">zone A</option>
          <option value="">zone B</option>
          <option value="">zone C</option>
          <option value="">zone C</option>
        </select>
        <input type="submit" value="valider" title="valider pour aller à la page sélectionnée"/>
      </p>
    </form>
</div>
</div>
</div>
</body>
</html>
