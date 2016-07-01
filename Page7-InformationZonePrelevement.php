<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IFROCEAN</title>
<link rel="stylesheet" type="text/css" href="projetifrocean.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="bandeau1">Projet Ifrocean</div>
<h1 class="bandeau2">Etape 2 - Informations de la zone de prélèvement</h1>
4 chiffres après la virgule<br>
<div class="section">
Entrer les coordonnées GPS <br>
Rentrer les coordonnées dans le sens horaire
  <div>
    <table>
        <form action ="" method="">
      <thead>
        <tr>
          <th></th>
          <th>Latitude</th>
          <th>Longitude</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Coordonnée A</td>
          <td><input type="number" size="6" name="latitudeA1"></td>
          <td><input type="number" size="6" name="latitA1"></td>
        </tr>
        <tr>
          <td>Coordonnée B</td>
          <td><input type="number" size="6" name="latitudeB1"></td>
          <td><input type="number" size="6" name="latitB1"></td>
        </tr>
        <tr>
          <td>Coordonnée C</td>
          <td><input type="number" size="6" name="latitudeC1"></td>
          <td><input type="number" size="6" name="latitC1"></td>
        </tr>
        <tr>
          <td>Coordonnée D</td>
          <td><input type="number" size="6" name="latitudeD1"></td>
          <td><input type="number" size="6" name="latitD1" step = "8"></td>
        </tr>
      </tbody>
      </form>
    </table>
  </div>
  </div>
  <br>
  <div class="section"> 
    <label for="nbrP">Nombre de préleveur</label>
    <input type="number" id="nombrePreleveur" name="nombre_preleveur" />
  </div>
  <br>
  <div class="section">
    <label for="nbrP">Date de l'etude</label>
    <input type="date" id="dateEtude" name="date_Etude" />
  </div>
  <br>
  <div>
    <input type="submit" value="Valider">
  </div>
</body>
</html>
