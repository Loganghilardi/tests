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
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">





<table class="table table-responsive table-hover">
    <thead>
        <tr><th>Code</th><th>Libellé</th><th>Direction</th><th>Secteur</th></tr>
    </thead>
    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1" aria-expanded="false" aria-controls="group-of-rows-1">
            <td>60ANNIVER</td>
            <td>60ème anniversaire du CRE</td>
          	<td>DG</td>  
            <td>SECRELU</td>
        </tr>
    </tbody>

    <tbody id="group-of-rows-1" class="collapse" style="border: ">
        <tr>
            <td></td>
            <th>Code</th>
          	<th>Nom</th>  
            <th>Groupe</th>
        </tr>
        <tr>
            <td></td>
            <td>Lghilardi</td>
          	<td>Logan Ghilardi</td>  
            <td>Informatique</td>
        </tr>
        <tr>
            <td></td>
            <td>PAUL</td>
          	<td>Muriel PAUL</td>  
            <td>Controle de Gestion</td>
        </tr>
    </tbody>


    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-2" aria-expanded="false" aria-controls="group-of-rows-2">
            <td><i class="fa fa-plus" aria-hidden="true"></i></td>
            <td>data</td>
          	<td>data</td>  
            <td>data</td>
        </tr>
    </tbody>
    <tbody id="group-of-rows-2" class="collapse">
        <tr>
            <td>- child row</td>
            <td>data 2</td>
          	<td>data 2</td>  
            <td>data 2</td>
        </tr>
        <tr>
            <td>- child row</td>
            <td>data 2</td>
          	<td>data 2</td>  
            <td>data 2</td>
        </tr>
    </tbody>
</table>
</body>
</html>