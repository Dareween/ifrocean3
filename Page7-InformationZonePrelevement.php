<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IFROCEAN</title>
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
<form method="post" action="Page8-E3-Donnees.html">
<div class="container">
<div class="row">
<header>
  <div class="bandeau1">Projet Ifrocean - Préleveur</div>
  <ol class="breadcrumb">
                  <li><a href="Accueil.html">Accueil</a></li>
                  <li><a href="index.html">Choix de la plage</a></li>
                  <li><a href="index.html">Données GPS</a></li>
				</ol>
  <h1 class="bandeau2">Etape 2 - Informations de la zone de prélèvement</h1>
</header>
<div class="section">
<h4>Entrer les coordonnées GPS </h4>
<br>
<p>Les coordonnées sont du type : degrés, minutes, secondes<br>
  Rentrer les coordonnées dans le sens horaire</p>
<div>
<h4>Coordonnée A</h4>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-md-3 control-label" for="latitude">Latitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="nord" class="nord" checked/>
        N </label>
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="sud" class="sud" />
        S </label>
      <input class="form-control sexagesimal latitude_degres" type="textbox" placeholder="degrés">
      <label for="latitude_degres">&deg;</label>
      <input class="form-control sexagesimal latitude_minutes" type="textbox" placeholder="minutes">
      <label for="latitude_minutes">'</label>
      <input class="form-control sexagesimalsec latitude_secondes" type="textbox" placeholder="secondes">
      <label for="latitude_secondes">''</label>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="longitude">Longitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="est" class="est" checked/>
        E </label>
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="ouest" class="ouest" />
        O </label>
      <input class="form-control sexagesimal longitude_degres" type="textbox" placeholder="degrés">
      <label for="longitude_degres">&deg;</label>
      <input class="form-control sexagesimal longitude_minutes" type="textbox" placeholder="minutes">
      <label for="longitude_minutes">'</label>
      <input class="form-control sexagesimalsec longitude_secondes" type="textbox" placeholder="secondes">
      <label for="longitude_secondes">''</label>
    </div>
  </div>
</form>
<hr>
<h4>Coordonnée B</h4>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-md-3 control-label" for="latitude">Latitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="nord" class="nord" checked/>
        N </label>
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="sud" class="sud" />
        S </label>
      <input class="form-control sexagesimal latitude_degres" type="textbox" placeholder="degrés">
      <label for="latitude_degres">&deg;</label>
      <input class="form-control sexagesimal latitude_minutes" type="textbox" placeholder="minutes">
      <label for="latitude_minutes">'</label>
      <input class="form-control sexagesimalsec latitude_secondes" type="textbox" placeholder="secondes">
      <label for="latitude_secondes">''</label>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="longitude">Longitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="est" class="est" checked/>
        E </label>
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="ouest" class="ouest" />
        O </label>
      <input class="form-control sexagesimal longitude_degres" type="textbox" placeholder="degrés">
      <label for="longitude_degres">&deg;</label>
      <input class="form-control sexagesimal longitude_minutes" type="textbox" placeholder="minutes">
      <label for="longitude_minutes">'</label>
      <input class="form-control sexagesimalsec longitude_secondes" type="textbox" placeholder="secondes">
      <label for="longitude_secondes">''</label>
    </div>
  </div>
</form>
<hr>
<h4>Coordonnée C</h4>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-md-3 control-label" for="latitude">Latitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="nord" class="nord" checked/>
        N </label>
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="sud" class="sud" />
        S </label>
      <input class="form-control sexagesimal latitude_degres" type="textbox" placeholder="degrés">
      <label for="latitude_degres">&deg;</label>
      <input class="form-control sexagesimal latitude_minutes" type="textbox" placeholder="minutes">
      <label for="latitude_minutes">'</label>
      <input class="form-control sexagesimalsec latitude_secondes" type="textbox" placeholder="secondes">
      <label for="latitude_secondes">''</label>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="longitude">Longitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="est" class="est" checked/>
        E </label>
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="ouest" class="ouest" />
        O </label>
      <input class="form-control sexagesimal longitude_degres" type="textbox" placeholder="degrés">
      <label for="longitude_degres">&deg;</label>
      <input class="form-control sexagesimal longitude_minutes" type="textbox" placeholder="minutes">
      <label for="longitude_minutes">'</label>
      <input class="form-control sexagesimalsec longitude_secondes" type="textbox" placeholder="secondes">
      <label for="longitude_secondes">''</label>
    </div>
  </div>
</form>
<hr>
<h4>Coordonnée D</h4>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-md-3 control-label" for="latitude">Latitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="nord" class="nord" checked/>
        N </label>
      <label class="radio-inline">
        <input type="radio" name="latnordsud" value="sud" class="sud" />
        S </label>
      <input class="form-control sexagesimal latitude_degres" type="textbox" placeholder="degrés">
      <label for="latitude_degres">&deg;</label>
      <input class="form-control sexagesimal latitude_minutes" type="textbox" placeholder="minutes">
      <label for="latitude_minutes">'</label>
      <input class="form-control sexagesimalsec latitude_secondes" type="textbox" placeholder="secondes">
      <label for="latitude_secondes">''</label>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="longitude">Longitude</label>
    <div class="col-md-9">
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="est" class="est" checked/>
        E </label>
      <label class="radio-inline">
        <input type="radio" name="lngestouest" value="ouest" class="ouest" />
        O </label>
      <input class="form-control sexagesimal longitude_degres" type="textbox" placeholder="degrés">
      <label for="longitude_degres">&deg;</label>
      <input class="form-control sexagesimal longitude_minutes" type="textbox" placeholder="minutes">
      <label for="longitude_minutes">'</label>
      <input class="form-control sexagesimalsec longitude_secondes" type="textbox" placeholder="secondes">
      <label for="longitude_secondes">''</label>
    </div>
  </div>
</form>
<hr>
<div class="section">
  <label for="nbrP">
  <h4>Nombre de préleveur</h4>
  </label>
  <input class="form-control" type="number" id="nombrePreleveur" name="nombre_preleveur" />
</div>
<br>
<div class="section">
  <label for="nbrP">
  <h4>Date de l'etude</h4>
  </label>
  <input class="form-control" type="date" id="dateEtude" name="date_Etude" />
</div>
<br>
<div class="form-group">
  <div class="section">
    <button type="submit" class="btn btn-default">Valider</button>
  </div>
</div>
</div>
</div>
</div>
<!--end row-->
</div>
<!--end container-->
</form>
</body>
</html>
