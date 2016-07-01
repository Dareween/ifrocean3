<?php include('head.php');

?>
<body>
<div class="container">  
    <div class="row">
        
        <header>
            <div class="bandeau1">Projet Ifrocean - chercheur </div>
            <ol class="breadcrumb">
  <li><a href="Accueil.html">Accueil</a></li>
  <li><a href="index.html">Création et Consultation</a></li>
</ol>
            
            <div>
                <h1 class="bandeau2" >Création d'une plage</h1>
            </div>
        </header>

        <div class="section">
        <h2 class ="creerPage" >Créer une plage</h2>
        <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label for="plage" class="col-sm-2 control-label">Nom de la plage</label>
							<div class="col-sm-3">
							  <input type="text" class="form-control" id="plage" placeholder="Plage - Commune - Département">
							</div>
					</div>
                  <div class="form-group">
                    <label for="superficie" class="col-sm-2 control-label">Superficie</label>
                    <div class="col-sm-3">
                      <input type="number" step="0.01" class="form-control"  id="superficie" placeholder="Entrez une superficie en m2">
                  </div>
              </div>
              
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Créer</button>
         
              </div>
            </div>
        </form>
        </div>
        <hr>
         <div>
                <h1 class="bandeau2" >Consultation d'une plage</h1>
            </div>
                <div class="section">
            <div class = "col-sm-offset-0">
			<h2> Consultez les données d'une plage existante</h2>
		</div>
        <form class="form-horizontal" method="post" action="Page3-ConsultationDesDonnees.html">
            
			<div class="form-group">
                <label for="plage" class="col-sm-2 control-label">Choissez une plage</label>
				
					 <div class="col-sm-3">
						<select class="form-control" name="test"  >
							<option value="1" selected="selected">La Baule</option>
							<option value="2">Boucant Canot</option>
							<option value="3">Trestraou</option>
							<option value="4">Kerieg</option>
						</select>
					</div>
			</div>
        
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Consulter</button>
                </div>
          </div>
        </form>
        </div>

    </div><!--end row-->
</div><!--end container-->
</body>
</html>
