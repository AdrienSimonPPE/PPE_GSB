<?php 
$error = (isset($_GET['error'])) ? $_GET['error'] : '' ;
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
	
	<h1>Page de connexion</h1>
	<br><br>
	
	<?php
	if($error != ''){
	    echo "error passwd !";
	}
	?>
	
	<form class="form-horizontal" method="post" action="connexion.php">
	
	<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Type de compte</label>
    	<div class="col-sm-10">
      		<select class="form-control" name="type">
              <option value="v">Visiteur</option>
              <option value="c">Comptable</option>
            </select>
    	</div>
  	</div>
	
	
  	<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" name="login" placeholder="Entrez votre identifiant">
    	</div>
  	</div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe</label>
    	<div class="col-sm-10">
      		<input type="password" class="form-control" name="passwd" placeholder="Entrez votre mot de passe">
    	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default">Connexion</button>
    </div>
  </div>
	</form>

</div>

</body>
</html>