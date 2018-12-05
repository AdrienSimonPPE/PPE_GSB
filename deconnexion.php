<?php
session_start();
$_SESSION["is_loged"] = "false";
session_destroy();
header("location: connexion.php");