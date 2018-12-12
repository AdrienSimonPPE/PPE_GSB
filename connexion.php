<?php 

session_start();

$login = (isset($_POST["login"]))? $_POST["login"] : "";
$passwd = (isset($_POST["passwd"]))? $_POST["passwd"] : "";
$type = (isset($_POST["type"]))? $_POST["type"] : "";

$bdd = new PDO("mysql:host=localhost;dbname=gsb_valide" , "root", "");


if ($type == 'c'){
    $cmd = "select count(*) as nbr  from comptable where login='$login' and mdp='$passwd' ";
    $res = $bdd->query($cmd);
    $row = $res->fetch();
    
    if($row['nbr'] == 1) {
        
        $cmd = "select *  from comptable where login='$login' and mdp='$passwd' ";
        
        $res = $bdd->query($cmd);
        $row = $res->fetch();
        
        $_SESSION["is_loged"] = "true";
        $_SESSION["is_comptable"] = "true";
        $_SESSION["usr_id"] = $row['id'];
        $_SESSION["usr_nom"] = $row['nom'];
        $_SESSION["usr_prenom"] = $row['prenom'];
        
        header("location: main_menu_comptable.php");
        exit;
    }
}

if ($type == 'v'){
    $cmd = "select count(*) as nbr from visiteur where login='$login' and mdp='$passwd' ";
    $res = $bdd->query($cmd);
    $row = $res->fetch();
    
    if($row['nbr'] == 1) {
        
        $cmd = "select *  from visiteur where login='$login' and mdp='$passwd' ";
        
        $res = $bdd->query($cmd);
        $row = $res->fetch();
        
        $_SESSION["is_loged"] = "true";
        $_SESSION["is_visiteur"] = "true";
        $_SESSION["usr_id"] = $row['id'];
        $_SESSION["usr_nom"] = $row['nom'];
        $_SESSION["usr_prenom"] = $row['prenom'];
        
        header("location: main_menu_visiteur.php");
        exit;
    }
}



header("location: index.php?error=1");
?>