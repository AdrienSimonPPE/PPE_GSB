<?php 

session_start();
if(!isset($_SESSION["is_loged"]) || $_SESSION["is_loged"] != "true") {
    header("location: deconnexion.php");
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Page d'Index</title>
	<meta charset="utf-8">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
	
	<h1>Bienvenue sur le site de notre entreprise !</h1>
	<br><br>
	<a href="menu.php"><button type="button" class="btn btn-primary btn-lg btn-block">Accès au menu</button></a>
	
	<br><br>
	<a href="deconnexion.php"><button type="button" class="btn btn-danger btn-lg btn-block">Déconnexion</button></a>

</div>

</body>
</html>