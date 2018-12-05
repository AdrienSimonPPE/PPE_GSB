<?php 

session_start();

$login = (isset($_POST["login"]))? $_POST["login"] : "";
$passwd = (isset($_POST["passwd"]))? $_POST["passwd"] : "";

if(($login == "admin") && ($passwd == "admin")) {
    $_SESSION["is_loged"] = "true";
    header("location: main_menu.php");
    exit;
}
header("location: index.php")
?>