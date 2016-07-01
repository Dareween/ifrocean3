<?php include('head.php');

?>
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
  <h3>Créez une zone</h3>
    <a href="Page7-InformationZonePrelevement.php"><button type="button" class="btn">Valider</button></a>

  
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
