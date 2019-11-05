<!DOCTYPE html>
<html>
<head>
	<title>Liste des utilisateurs par motif</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" type="text/css" href="css2.css">

</head>
<body>
	<div class="container-fluid">
		<div class="navbar navbar-inverse">
			<a class="navbar-brand" href="maquette.php">Accueil</a>
			<ul class="nav navbar-nav">
				<li><a href="Exercices.php">Exercices</a></li>
				<li><a href="Fonction.php">Fonction</a></li>
				<li><a href="Motif.php">Motif</a></li>
				<li><a href="Relève&Détachement.php">Relève/Détachement</a></li>
				<li><a href="EditionEnMasse.php">Edition en masse</a></li>
			</ul>
		</div>


	
			

		<div class="row">
			<div class="col-lg-2 hidden-sm hidden-xs hidden-md" id="bande"></div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="max-height: 90vh; overflow: scroll ;">
				<div id="accordion">
			 		<table class="table table-hover" >
			 			
			 					<th>Code</th><th class="ff">Libellé</th><th class="ff1">Direction</th><th class="ff2">Service</th>

				 			<tr>

				 				<td id="no">

								  <div class="card">
								    <div class="card-header" id="headingOne">
								      <h5 class="mb-0">
								        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          <table ><tr><td >60ANNIVER</td><td> 60eme anniversaire du CRE</td><td>DG</td><td>SERVELU</td></tr></table>
								        </button>
								      </h5>
								    </div>

								    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
								      <div class="card-body">
								        <table ><tr><td >LGHILARDI</td><td>Logan GHILARDI</td><td>Informatique</td></tr><tr><td>PAUL</td><td>Muriel PAUL</td><td>Controle de gestion</td></tr></table>
								      </div>
								    </div>
								  </div>
						  		</td>
						  	</tr>
						  	<tr>
						  		<td id="no">

										<div class="card">
									   	 <div class="card-header" id="headingTwo">
									      <h5 class="mb-0">
									        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									          <table><tr><td>AC</td><td>Activités culturelles</td><td>SC</td><td>CULTURE</td></tr></table>
									        </button>
									      </h5>
									    </div>
									    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									      <div class="card-body">
									       <table ><tr><td >LGHILARDI</td><td>Logan GHILARDI</td><td>Informatique</td></tr><tr><td>PAUL</td><td>Muriel PAUL</td><td>Controle de gestion</td></tr></table>
									      </div>
									    </div>
									  </div>
								</td>
							</tr>


						</tbody>
					  	
					</table>

				</div>
			</div>
		</div>
</body>
</html>