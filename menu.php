<?php 

session_start();
if(!isset($_SESSION["is_loged"]) || $_SESSION["is_loged"] != "true") {
    header("location: deconnexion.php");
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
	
	<h1>Bienvenue sur le site de notre entreprise !</h1>
	<br><br>
	<a href="user.php"><button type="button" class="btn btn-primary btn-lg btn-block">Accès aux utilisateurs</button></a>
	
	<br><br>
	<a href="etudiant.php"><button type="button" class="btn btn-default btn-lg btn-block">Accès aux étudiants</button></a>
	
	<br><br>
	<a href="main_menu.php"><button type="button" class="btn btn-success btn-lg btn-block">Retour</button></a>
	
	<br><br>
	<a href="deconnexion.php"><button type="button" class="btn btn-danger btn-lg btn-block">Déconnexion</button></a>
</div>

</body>
</html>