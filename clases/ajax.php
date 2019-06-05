<?php
require_once("criptografia.php");
require_once("baseDatos.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");

if(isset($_GET['request'])){
    $request = $_GET['request'];
    if($request == "admin_login"){
        $objBD->login("admin",$_POST['usuario'],$_POST['clave']);
    }
}
?>