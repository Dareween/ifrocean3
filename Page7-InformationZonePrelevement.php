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
                  <li><a href="index.html">Données GPS</a></li>
				</ol>
  <h1 class="bandeau2">Etape 2 - Informations de la zone de prélèvement</h1>
</header>
    <section>
    <div class="container">
            <h1>Ajouter une zone</h1>
            <hr>
            <form action="POSTAjouterZone.php"
                  method="post">
                <h2>Point A</h2>
                <h3>Latitude Point A</h3>
                <div class="form-group row">
                    <label for="latitude-A-degre" class="col-sm-2
                           form-control-label">latitude-A-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-A-degre" id="latitude-A-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-A-minute" class="col-sm-2
                           form-control-label">latitude-A-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-A-minute" id="latitude-A-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-A-seconde" class="col-sm-2
                           form-control-label">latitude-A-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="latitude-A-seconde" id="latitude-A-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point A</h3>
                   <div class="form-group row">
                    <label for="longitude-A-degre" class="col-sm-2
                           form-control-label">longitude-A-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-A-degre" id="longitude-A-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-A-minute" class="col-sm-2
                           form-control-label">longitude-A-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-A-minute" id="longitude-A-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-A-seconde" class="col-sm-2
                           form-control-label">longitude-A-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longitude-A-seconde" id="longitude-A-seconde"
                               class="form-control">
                    </div>
                </div>
                
               
                <h2>Point B</h2>
                <h3>Latitude Point B</h3>
                <div class="form-group row">
                    <label for="latitude-B-degre" class="col-sm-2
                           form-control-label">latitude-B-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-B-degre" id="latitude-B-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-B-minute" class="col-sm-2
                           form-control-label">latitude-B-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-B-minute" id="latitude-B-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-B-seconde" class="col-sm-2
                           form-control-label">latitude-B-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latitude-B-seconde" id="latitude-B-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point B</h3>
                   <div class="form-group row">
                    <label for="longitude-B-degre" class="col-sm-2
                           form-control-label">longitude-B-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-B-degre" id="longitude-B-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-B-minute" class="col-sm-2
                           form-control-label">longitude-B-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-B-minute" id="longitude-B-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-B-seconde" class="col-sm-2
                           form-control-label">longitude-B-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="longitude-B-seconde" id="longitude-B-seconde"
                               class="form-control">
                    </div>
                </div>
                 
                 
                 <h2>Point C</h2>
                <h3>Latitude Point C</h3>
                <div class="form-group row">
                    <label for="latitude-C-degre" class="col-sm-2
                           form-control-label">latitude-D-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-C-degre" id="latitude-C-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-C-minute" class="col-sm-2
                           form-control-label">latitude-C-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-C-minute" id="latitude-C-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-C-seconde" class="col-sm-2
                           form-control-label">latitude-C-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latitude-C-seconde" id="latitude-C-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point C</h3>
                   <div class="form-group row">
                    <label for="longitude-D-degre" class="col-sm-2
                           form-control-label">longitude-C-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-C-degre" id="longitude-C-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-C-minute" class="col-sm-2
                           form-control-label">longitude-C-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-C-minute" id="longitude-C-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-DC-seconde" class="col-sm-2
                           form-control-label">longitude-C-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="longitude-C-seconde" id="longitude-C-seconde"
                               class="form-control">
                    </div>
                </div>
                 
                 
                     <h2>Point D</h2>
                <h3>Latitude Point D</h3>
                <div class="form-group row">
                    <label for="latitude-D-degre" class="col-sm-2
                           form-control-label">latitude-D-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-D-degre" id="latitude-D-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latitude-D-minute" class="col-sm-2
                           form-control-label">latitude-D-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latitude-D-minute" id="latitude-D-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latitude-D-seconde" class="col-sm-2
                           form-control-label">latitude-D-seconde</label>
                    <div class="col-sm-4">
                        <input type="number"required
                               step="0.01"  name="latitude-D-seconde" id="latitude-D-seconde"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point D</h3>
                   <div class="form-group row">
                    <label for="longitude-D-degre" class="col-sm-2
                           form-control-label">longitude-D-degre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-D-degre" id="longitude-D-degre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longitude-D-minute" class="col-sm-2
                           form-control-label">longitude-D-minute</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longitude-D-minute" id="longitude-D-minute"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longitude-D-seconde" class="col-sm-2
                           form-control-label">longitude-D-seconde</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.0001"  name="longitude-D-seconde" id="longitude-D-seconde"
                               class="form-control">
                    </div>
                </div>
                 
                 
                 
                
               
                <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer">
                
            </form>
        </div>
    </section>
    
    
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
