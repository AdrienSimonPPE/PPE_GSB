<?php 

session_start();

$login = (isset($_POST["login"]))? $_POST["login"] : "";
$passwd = (isset($_POST["passwd"]))? $_POST["passwd"] : "";

if(($login == "comptable") && ($passwd == "comptable")) {
    $_SESSION["is_loged"] = "true";
    header("location: main_menu_comptable.php");
    exit;
}

if(($login == "visiteur") && ($passwd == "visiteur")) {
    $_SESSION["is_loged"] = "true";
    header("location: main_menu_visiteur.php");
    exit;
}
header("location: index.php?error=1");
?>