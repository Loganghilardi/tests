<!DOCTYPE html>
<html>
<head>
	<title>Liste des Fonctions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
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
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Code</th>
							<th scope="col">Libellé</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">A</th>
							<td>Animateur</td>
						</tr>
						<tr>
							<th scope="row">AF</th>
							<td>Adjoint Financier</td>
						</tr>
						<tr>
							<th scope="row">BB</th>
							<td>Bibliothécaire Bénévole</td>
						</tr>
						<tr>
							<th scope="row">D</th>
							<td>Directeur</td>
						</tr>
						<tr>
							<th scope="row">DA</th>
							<td>Directeur Pédagogique Adjoint</td>
						</tr>
						<tr>
							<th scope="row">F</th>
							<td>Formation</td>
						</tr>
						<tr>
							<th scope="row">OT</th>
							<td>Autres</td>
						</tr>
						<tr>
							<th scope="row">SA</th>
							<td>Service Accueil</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12" style="margin: 1vh;">
				<div class="btn-group" role="group" aria-label="Exemple">
					<button type="button" class="btn btn-primary">Ajouter une ligne</button>
					<button type="button" class="btn btn-primary">Supprimer une ligne</button>
				</div>
		</div>
				<div class="col-lg-2 col-md-3 col-sm-7 col-xs-12" style="margin-top: 20vh;">

					<a href="maquette.php"><button type="button" class="btn btn-primary">Valider</button></a>
					<a href="maquette.php"><button type="button" class="btn btn-primary">Annuler</button></a>
			</div>




			
		</div>
	</div>
		
	

</body>
</html>