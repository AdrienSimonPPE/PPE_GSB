<?php 

session_start();
$bdd = new PDO("mysql:host=localhost;dbname=gsb_valide" , "root", "");

$id = $_SESSION["usr_id"];
echo $id;
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
	
<h2>Renseigner ma fiche de frais du mois de Décembre 2018</h2>
            
      <form action="ficheFrais.php" method="post">
      <div class="corpsForm">
          <input type="hidden" name="etape" value="validerSaisie" />
          <fieldset>
            <legend>Eléments forfaitisés</legend>
                  <p>
              <label for="ETP">* Forfait Etape : </label>
              <input type="text" id="ETP" 
                    name="etp" 
                    size="10" maxlength="5"
                    title="Entrez la quantité de l'élément forfaitisé" 
                    value="10" />
            </p>
                        <p>
              <label for="KM">* Frais Kilométrique : </label>
              <input type="text" id="KM" 
                    name="km" 
                    size="10" maxlength="5"
                    title="Entrez la quantité de l'élément forfaitisé" 
                    value="50" />
            </p>
                        <p>
              <label for="NUI">* Nuitée Hôtel : </label>
              <input type="text" id="NUI" 
                    name="nui" 
                    size="10" maxlength="5"
                    title="Entrez la quantité de l'élément forfaitisé" 
                    value="30" />
            </p>
                        <p>
              <label for="REP">* Repas Restaurant : </label>
              <input type="text" id="REP" 
                    name="rep" 
                    size="10" maxlength="5"
                    title="Entrez la quantité de l'élément forfaitisé" 
                    value="20" />
            </p>
                      </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" 
               title="Enregistrer les nouvelles valeurs des éléments forfaitisés" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>

</div>
</body>
</html>













