<?php
session_start();
require_once("criptografia.php");
require_once("baseDatos.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");

if(isset($_GET['request'])){
    $request = $_GET['request'];
    if($request == "admin_login"){
        $res = $objBD->login("admin",$_POST['usuario'],$_POST['password']);
        if($res == 1){
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['rol'] = "admin";
        }
        echo $res;
    }
}
?>