<?php
session_start();   
if(!isset($_SESSION['usuario'])){
    header("location: ../index.php");
}elseif($_SESSION['rol'] != "admin"){
    header("location: ../index.php");
}
require_once("../includes/header.php");
?>

<?php
require_once("../includes/scripts.php");
?>