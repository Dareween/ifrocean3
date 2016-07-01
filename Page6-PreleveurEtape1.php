<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="projetifrocean.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<title>Page Preleveur Etape 1</title>
</head>
<body>
<div class="bandeau1">Projet Ifrocean</div>
  <h1 class="bandeau2">Étape 1  : Choix de la plage ou de la zone</h1>
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
</body>
</html>
